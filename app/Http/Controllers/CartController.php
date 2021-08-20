<?php
    namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Str;
use Helper;
use App\Models\Profile;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Coupon;
use App\Models\RouteShip;
use App\Models\ServiceShip;
use App\Models\Shipping;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use App\Notifications\NewOrderNotification;
use App\Http\Requests\AddCartRequest;
use App\Http\Requests\OrderRequest;
use App\Notifications\CreateOrder;
use Illuminate\Notifications\Notifiable;
use App\Events\NotificationEvent;
class CartController extends Controller
{        
    use Notifiable;
    
    public function index()
    {
            $data = Cart::getSession();
            return view('frontend.shopping-cart', $data);
       
    }
    public function addCart(Request $request)
    {
        $product=Product::firstOrFail()->where('slug', $request->slug)->first();
        
            $id=$product->id;
            $oldCart = Session('cart') ? Session('cart') : null;
            $newCart = new Cart($oldCart);
            $result=$newCart->addCart($product, $id,$request);
            if($result==true){
                $request->session()->put('cart', $newCart);
                if (Session::has('cart'))
                {
                    $data = Cart::getSession();
                }
                return json_encode($data);
            }
            else{
                return json_encode($result);

            }
    }
    public function updateCart(Request $request)
    {
        $id = $request->id;
        $product=Product::findOrFail($id);
        
        $quantity = $request->quantity;
        $oldCart = Session('cart') ? Session('cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->updateCart($id, $quantity);
        $request->session()
            ->put('cart', $newCart);
        if (Session::has('cart'))
        {
            $data = Cart::getSession();

        }
        return json_encode($data);
    }
    public function deleteCart(Request $request)
    {
        $slug=$request->slug;
        $product=Product::firstOrFail()->where('slug', $slug)->first();
        $id = $product->id;
        $oldCart = Session('cart') ? Session('cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->deleteCart($id);
        if (Count($newCart->products) > 0)
        {
            $request->session()
                ->put('cart', $newCart);
        }
        else
        {
            $request->session()
                ->forget('cart');
        }
        if (Session::has('cart'))
        {
            $data = Cart::getSession();
            return json_encode($data);
        }
        else
        {
            return response()->json(false);
        }
    }
    public function shipping(Request $request){
        $weight=Helper::countWeight();
        $profile=Profile::findOrFail($request->id);
        $route_ship_id=RouteShip::getRouteShip($profile);
        $data=ServiceShip::getServiceShip($route_ship_id,$weight,$profile);
        return response()->json($data);
    }
    public function feeShip(Request $request){
        $oldCart = Session('cart') ? Session('cart') : null;
        $newCart = new Cart($oldCart);
        $fee_ship = $request->fee;
        $newCart->shipping($fee_ship);
        $request->session()
            ->put('cart', $newCart);
        if (Session::has('cart'))
        {
            $data = Cart::getSession();
        }
        return json_encode($data);
    }
    public function coupon(Request $request)
    {
        $code = $request->code;
        $coupon = Coupon::where('code', $code)->first();
        // dd($coupon);
        if ($coupon == null)
        {
            return response()->json(['message' => 'Mã code không chính xác', 'status' => 404], 404);
        }
        else
        {
            $now = Carbon::now();
            $start = $coupon->start_date;
            $end = $coupon->end_date;
            if ($now >= $start && $now <= $end)
            {
                $oldCart = Session('cart') ? Session('cart') : null;
                $newCart = new Cart($oldCart);
                $value = $coupon->value;
                $newCart->coupon($value);
                $request->session()
                    ->put('cart', $newCart);
                if (Session::has('cart'))
                {
                    $data = Cart::getSession();
                }
                return json_encode($data);

            }
            else
            {
                return response()->json(['message' => 'Mã khuyến mãi đã hết hạn', 'status' => 404], 404);
            }
        }
    }
    public function checkout()
    {
        $user_id=Auth::user()->id;
        $data['profile'] = Profile::where('user_id', $user_id)->default()->first();
        if (Session::has('cart'))
        {
            $data['cart'] = Cart::getSession();
            return view('frontend.checkout', $data);
        }
        else
        {
            return redirect()->route('product.grid');
        }
    }
    public function getAllProfile(){
        $user_id=Auth::user()->id;
        $data= Profile::where('user_id', $user_id)->get();
        return response()->json($data);
    }
    public function order(OrderRequest $request)
    {
        
        if (Session::has('cart'))
        {
            $data=Cart::order($request);
            $shipping=Shipping::createShip($request,$data['id']);
        
            $user=User::find(1);
            // event(new OrderShoppingCart($order_id));
            $data=[
                'title'=>Auth::user()->name.' đã đặt đơn hàng mới.',
                'url'=>route('admin.order.index',$data['code']),
                'user_code'=>Auth::user()->code
            ];
            $user->notify(new NewOrderNotification($data));
            event(new NotificationEvent('Bạn có thông báo mới'));

            // Notification::send($users, new NewOrderNotification($data));

            // Notification::send($userSchema, new OffersNotification($offerData));

            // $data=['title'=>'Bạn có đơn đặt hàng mới',
            //         'content'=>" đã đặt một đơn hàng mới.",
            //         'fas'=>'fa-file-alt'
            //     ];

            // $user=User::find(1);    
            // $when = now()->addMinutes(10);
            // $notify=$user->notify((new NewOrderNotification($data))->delay($when));
            // $options = array(
            //     'cluster' => 'ap1',
            //     'encrypted' => true
            // );
            // $pusher = new Pusher(
            //     env('PUSHER_APP_KEY'),
            //     env('PUSHER_APP_SECRET'),
            //     env('PUSHER_APP_ID'),
            //     $options
            // );
            // $pusher->trigger('Notify', 'notify', $data);
            $request->session()
                ->forget('cart');
            return response()
                ->json(true);
        }
    }
    public function updateStatus(Request $request){
        $order=Order::where('order_code',$request->code)->first();
        $order->status='2,Đơn hàng bị hủy';
        $order->publish='0';
        $order->save();
        return response()->json(true);

    }
    public function serviceShip(Request $request){
        $service=ServiceShip::where('route_ship_id',$request->route_id)->get();
        return response()->json($service);
    }
    public function routeShip(Request $request){
        $route=RouteShip::where('name',$request->route)->first();
        return response()->json($route->id);

    }
}
