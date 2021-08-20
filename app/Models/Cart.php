<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderDetail;
use App\Models\Debt;
use Illuminate\Support\Str;
use App\Models\User;
Use \Carbon\Carbon;
use DB;
use App\Helpers\Helper;
class Cart extends Model
{
    // protected $fillable=['user_id','product_id','order_id','quantity','amount','price','status'];

    public $products = null;
    public $total_price = 0;
    public $sub_price = 0;
    public $fee_ship = 0;
    public $discount = 0;
    public $count = 0;
    public $weight = 0;
    public $size = 0;
    public function __construct($cart = null)
    {
        if ($cart)
        {
            $this->products = $cart->products;
            $this->sub_price = $cart->sub_price;
            $this->fee_ship = $cart->fee_ship;
            $this->discount = $cart->discount;
            $this->count = $cart->count;
            $this->weight = $cart->weight;
            $this->size = $cart->size;
            $this->total_price = $this->sub_price - $this->discount * $this->sub_price / 100 + $this->fee_ship ;
        }
    }
    public static function getSession()
    {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $data['products'] = $cart->products;
        $data['total_price'] = $cart->total_price;
        $data['sub_price'] = $cart->sub_price;
        $data['fee_ship'] = $cart->fee_ship;
        $data['discount'] = $cart->discount;
        $data['count'] = $cart->count;
        $data['weight'] = $cart->weight;

        return $data;
    }

    public function scopeStatus($query)
    {
        return $query->where('status', $query);
    }
    public function addCart($product, $id,$request)
    {
        $newProduct = ['quantity' => 0,'weight'=>$product->weight, 'price' => $request->price,'product_price' => $request->price, 'id' => $product->id, 'productInfo' => $product];
        if ($this->products)
        {
            if (array_key_exists($id, $this->products))
            {
                $newProduct = $this->products[$id];
            }
        }
        if($newProduct['quantity']>$product->quantity){
            return ['type'=>'error', 'Sản phẩm không đủ hàng'];
        }
        else{
            $newProduct['quantity']++;
            $newProduct['product_price']=$request->price;
            $newProduct['price'] = $newProduct['quantity'] * $request->price;
            $newProduct['weight'] = $newProduct['quantity'] * $product->weight;
            $this->products[$id] = $newProduct;
            $this->sub_price += $request->price;
            $this->weight += $product->weight;
            $this->total_price = $this->sub_price;
            $this->count++;
            return true;
        }

       
        // dd($this->weight);

    }
    public function updateCart($id, $quantity)
    {
        $this->count -= $this->products[$id]['quantity'];
        $this->sub_price -= $this->products[$id]['price'];
        $this->weight -= $this->products[$id]['weight'];
        $this->products[$id]['quantity'] = $quantity;
        $this->products[$id]['price'] = $quantity * $this->products[$id]['product_price'];
        $this->products[$id]['weight'] = $quantity * $this->products[$id]['productInfo']->weight;
        $this->count += $this->products[$id]['quantity'];
        $this->sub_price += $this->products[$id]['price'];
        $this->weight += $this->products[$id]['weight'];
        $this->total_price = $this->sub_price ;
    }
    public function deleteCart($id)
    {
        $this->count -= $this->products[$id]['quantity'];
        $this->sub_price -= $this->products[$id]['price'];
        $this->weight -= $this->products[$id]['weight'];
        $this->total_price = $this->sub_price - $this->discount * $this->sub_price / 100 + $this->fee_ship;
        unset($this->products[$id]);
    }
    public function discount($value)
    {
        if($this->discount != $value){
            $this->total_price = $this->sub_price - $this->discount * $this->sub_price / 100 + $this->fee_ship;
        }
    }
    public function shipping($fee_ship)
    {
        $this->fee_ship =($fee_ship!=$this->fee_ship)?$fee_ship: $this->fee_ship;
        $this->total_price = $this->sub_price - $this->discount * $this->sub_price / 100 + $this->fee_ship;
    }
    public static function order(Request $request)
    {
        //HÓA ĐƠN BÁN LẺ
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $order = new Order();
        $order->user_id=Auth::user()->id;
        $order->profile_id =$request->profile_id;
        $order->code =rand(1,1000);
        $data['carts'] = $cart->products;
        $order->total_price = $cart->total_price;
        $order->sub_price = $cart->sub_price;
        $order->discount = $cart->discount;
        $order->fee_ship = $cart->fee_ship;
        $order->quantity = $cart->count;
        $order->payment_method_id=$request->payment_method_id;
        $order->service_ship_id=$request->obj_service['id'];
        $order->type=$request->type;
        $order->status_id='1';
        $order->save();
        $date=$order->created_at;
        $order_id = $order->id;
        $code=Helper::createCode($order_id,'HD');
        $order->code=$code;
        $order->save();

        //CHI TIẾT HÓA ĐƠN BÁN LẺ
        foreach ($cart->products as $item)
        {
            $detail = new OrderDetail();
            $detail->order_id = $order_id;
            $detail->product_id = $item['id'];
            $detail->price = $item['product_price'];
            $detail->quantity = $item['quantity'];
            $detail->amount = $item['price'];
            $detail->save();
        }
        $data = ['id' => $order_id, 'code' => $code];

        return $data;
        
        

        // $receipt=new Receipt();
        // $receipt->total=$cart->sub_price;
        // $receipt->document=$order_code;
        // $receipt->document_date= $date;
        // $receipt->note='Mã hóa đơn bán hàng: <a href="admin/order/show/'.$request->order_code.'">'.$request->order_code.'</a>';
        // $receipt->cat_id='1';
        // $receipt->user_id=Auth::user()->id;
        // $receipt->child_cat_id='5';
        // $receipt->status='Chưa hoàn thành';
        // $receipt->save();
        // $id=$receipt->id;
        // $lengthId=strlen($id);
        // $length=$count-$lengthId;
        // $str='PT';
        // for($i=0; $i<$length; $i++){
        //     $str.='0';
        // }
        // $code=$str.$id;
        // $receipt->code=$code;
        // $receipt->save();

        // // CÔNG NỢ PHẢI THU 
        // $href='{{url("admin/order/show/'.$order_code.'")}}';
        // $debt=new Debt();
        //     $debt->user_id=Auth::user()->id;
        //     $debt->debit= $cart->total_price;
        //     $debt->document=$order_code;
        //     $debt->category='CNPT';
        //     $debt->date=$date;
        //     $debt->note=Auth::user()->name.' nợ tiền hàng';
        //     $debt->save();
            
        // $debt=new Debt();
        //     $debt->user_id=Auth::user()->id;
        //     $debt->credit= $cart->total_price;
        //     $debt->document=$order_code;
        //     $debt->category='CNPT';
        //     $debt->date=$date;
        //     $debt->status=0;
        //     $debt->note=Auth::user()->name.' trả tiền hàng';
        //     $debt->save();

        // // CHỨNG TỪ CHỜ XUẤT KHO
        // $receipt_stock=new ReceiptStock();
        // $receipt_stock->cat_id=4;
        // $receipt_stock->child_cat_id=18;
        // $receipt_stock->user_id=Auth::user()->id;
        // $receipt_stock->quantity=$cart->count;
        // $receipt_stock->total=$cart->total_price;
        // $receipt_stock->payment=0;
        // $receipt_stock->debt=$cart->total_price;
        // $receipt_stock->note='';
        // $receipt_stock->document=$order_code;
        // $receipt_stock->document_date=$date;
        // $receipt_stock->status='Chờ xuất kho';
        // $receipt_stock->date=$date;
        // $receipt_stock->save();
        // $receipt_id=$receipt_stock->id;
        
        // // LƯU MÃ PHIẾU XUẤT
        // $lengthId=strlen($receipt_id);
        // $length=$count-$lengthId;
        // $PX='PX';
        // for($i=0; $i<$length; $i++){
        //     $PX.='0';
        // }
        // $receipt_stock_code=$PX.$receipt_id;
        // $receipt_stock->code=$receipt_stock_code;
        // $receipt_stock->save();
        
        
        // // CẬP NHẬT NHÀ CUNG CẤP
        // $suppiler=Supplier::find($request->suppiler);
        // $suppiler->total+=$request->total;
        // $suppiler->debt+=$request->debt;
        // $suppiler->save();

        //CHI TIẾT CHỨNG TỪ CHỜ XUẤT KHO
        // foreach ($cart->products as $item)
        // {
        //     $detail = new DetailOrder();
        //     $detail->order_id = $order_id;
        //     $detail->product_id = $item['id'];
        //     $detail->price = $item['productInfo']['price'];
        //     $detail->quantity = $item['quantity'];
        //     $detail->amount = $item['price'];
        //     $detail->save();
        //     //LƯU CHI TIẾT CHỨNG TỪ KHO
        //     $detail=new DetailReceiptStock();
        //     $detail->receipt_id=$receipt_id;
        //     $detail->product_id=$item['id'];
        //     $detail->price=$item['productInfo']['cost_price'];
        //     $detail->quantity=$item['quantity'];
        //     $detail->amount=$item['productInfo']['cost_price']*$item['quantity'];
        //     $detail->save();
        //      //CẬP NHẬT SẢN PHẨM
        //      $product=Product::findOrFail($item['id']);
        //      $product->quantity-=$item['quantity'];
        //      $product->save();
             
        // }
        // $detail=DB::table('detail_receipt_stocks')
        //         ->selectRaw('SUM(amount) as amount')
        //         ->where('receipt_id',$receipt_id)
        //         ->first();
        // $receipt=ReceiptStock::where('id',$receipt_id)->first();       
        // $receipt->total=  $detail->amount;
        // $receipt->debt=$detail->amount;
        // $receipt->save();      
        // return $order_code;

       
    }
}
