<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;
use App\Models\Unit;
use App\Models\Stock;
use App\Models\PriceRange;
use App\Models\PriceListFormat;
use Carbon\Carbon;

class Product extends Model
{
    protected $fillable=['title','slug','detail','description','cat_id','child_cat_id','cost_price','on_price','off_price','status','photo','size','quantity','condition','type','quantity_status','color'];
    
    public static function store($request){
        // dd($request->all());
        $type=$request->type=='null' ? null : $request->type;
        $size=$request->size=='null' ? null : $request->size;
        $child_category=$request->child_category=='null' ? null : $request->child_category;
        $data=new Product();
        $data->title=$request->title;
        $data->slug=$request->slug;
        $data->code='code';
        $data->detail=$request->detail;
        $data->description=$request->description;
        $data->child_cat_id=$child_category;
        $data->cat_id=$request->category;
        $data->photo=$request->photo;
        $data->color=$color_id;
        $data->type=$type;
        $data->size=$size;
        $data->condition=$request->condition;
        $data->brand_id=$request->brand;
        $data->min=$request->min;
        $data->max=$request->max;
        $data->status=$request->status;
        $data->save();
        $code=createCode($data->id,'SP');
        $data->code=$code;
        $data->save();
        return $data->id;
    }
public static function updateProduct($request){
        $type=$request->type=='null' ? null : $request->type;
        $size=$request->size=='null' ? null : $request->size;
        $child_category=$request->child_category=='null' ? null : $request->child_category;
        $data=Product::findOrFail($request->id);
        $data->title=$request->title;
        $data->slug=$request->slug;
        $data->detail=$request->detail;
        $data->description=$request->description;
        $data->child_cat_id=$child_category;
        $data->cat_id=$request->category;
        $data->photo=$request->photo;
        $data->color=$color_id;
        $data->type=$type;
        $data->size=$size;
        $data->condition=$request->condition;
        $data->brand_id=$request->brand;
        $data->min=$request->min;
        $data->max=$request->max;
        $data->status=$request->status;

        $data->save();
    }

    public static function updateQuantity($request){
        foreach($request->array as $item){
            $quantity=(int)$item['quantity'];
            $product_id=$item['id'];
            $product=Product::findOrFail($product_id);
            $product=Product::where('id',$product_id)->first();
            $product->quantity+=$quantity;
            $product->save();
        }
    }
    public function unit(){
        return $this->belongsTo(Unit::class);

    }
    // public function stock(){
    //     return $this->belongsTo(Stock::class);

    // }
    public function scopeStatus($query)
    {
        return $query->where('status', '1');
    }
    public function scopeSort($query,$request)
    {
        dd($request->value);
        // return $query->where('', '1');
    }
    public function scopeName($query, $item)
    {
        return $query->where('title', 'LIKE', '%' . $item . '%');
    }
    public function scopeColor($query, $item)
    {
        return $query->where('color_id',$item);
    }
    public function scopeType($query, $item)
    {
        return $query->where('type',$item);
    }
    
    
    public function category(){
        return $this->hasOne('App\Models\Category','id','cat_id');
    }
    public function brand(){
        return $this->hasOne('App\Models\Brand','id','brand_id');
    }
    public function color(){
        return $this->hasOne('App\Models\Color','id','color_id');
    }
    public function child_category(){
        return $this->hasOne('App\Models\Category','id','child_cat_id');
    }
    public static function getAllProduct(){
        return Product::with(['cat_info','sub_cat_info'])->orderBy('id','desc')->get();
    }
    public function rel_prods(){
        return $this->hasMany('App\Models\Product','cat_id','cat_id')->where('status','active')->orderBy('id','DESC')->limit(8);
    }
    public function getReview(){
        return $this->hasMany('App\Models\ProductReview','product_id','id')->with('user_info')->where('status','active')->orderBy('id','DESC');
    }
    public static function getCondition($product,$price){
        if(isset($price['old_price'])){
            $format=PriceListFormat::where('price_list_id',$price['price_list_id'])->first();
            $condition=formatPriceList($format);
            $product->condition=$condition;
        }
        if($product['quantity']==0){
            $condition='H?t hàng';
            $product->condition=$condition;
        }
        $product->save();

        return $product;

       
    }
    
    public static function productSlug($slug){
        $product=Product::with('color')->where('slug',$slug)->first()->toArray();
        $price=Product::price($product['id'],'frontend')->toArray();
        $data=array_merge($product, $price);
        return $data;
    }
    // public static function productGrid(){
    //     $products=Product::status()->get();
    //     return Product::getProduct($products);
    // }
    
    // public static function getProductBySlugCategory($slug){
      
    //     return getProduct($products);
    //     return Product::where('cat_id',$cat_id)->get();
    // }
    public static function countActiveProduct(){
        $data=Product::where('status','active')->count();
        if($data){
            return $data;
        }
        return 0;
    }

    public function carts(){
        return $this->hasMany(Cart::class)->whereNotNull('order_id');
    }

    public function wishlists(){
        return $this->hasMany(Wishlist::class)->whereNotNull('cart_id');
    }
    public static function price($product_id,$type){
        $isDefault=0;
        $priceList=PriceList::apply()->status()->first();
        $default=PriceList::default()->first();
        if($priceList->start_date!=null){
            $now=Carbon::now();
            if(!($now->gte($priceList->start_date) && $now->lte($priceList->end_date))){
                // dd('notification');

                // $id=$default->id;
                $isDefault++;

            }
            else{
                $data=PriceListDetail::where('price_list_id',$id)->where('product_id',$product_id)->first();

            }
            
        }
        if($isDefault){
            $data=PriceListDetail::where('price_list_id',$default->id)->where('product_id',$product_id)->first();
        }
        if($type=="frontend"){
            if($isDefault>0){
                $data['price']=$data['on_price'];
                unset($data['on_price']);
            }
            else{
                $data['price']=$data['promotion_on_price'];
                $data['old_price']=$data['on_price'];
                unset($data['on_price']);
                unset($data['promotion_on_price']);
            }
        }
        return $data;
    }
    public static function filter($request){
        $price_range=0;
        $query=Product::with('brand','category','child_category');
        foreach ($request->arrFilter as $key => $item) {
            $type=$item['type'];
            $value=$item['value'];
            if($type=='category' && $value!='none'){
                $query=$query->where('cat_id',$value);
            }
            if($type=='quantity' && $value!='all'){
                $query=$query->where('quantity_status',$value);
            }
            if($type=='search' && $value!='none'){
                $query=$query->name($value);
            }
            if($type=='color' && $value!='none'){
                $query=$query->color($value);
            }
            if($type=='type' && $value!='none'){
                $query=$query->type($value);
            }
            if($type=='price-range' && $value!='none'){
                $price_range_id=$value;
                $price_range++;
            }
            if($type=='price-sort' && $value!='none'){
                $price_sort=$value;
            }
        }
        $products=$query->get();
        $data=[];
            foreach($products as $key => $product){
                $product_id=$product['id'];
                if(isset($price_sort)){
                    $price=Product::price($product_id,'frontend');
                }
                else{
                    $price=Product::price($product_id,'backend');
                }
                $obj=array_merge($product->toArray(), $price->toArray());
                array_push($data,$obj);
            }
            if($price_range!=0){
                $data=PriceRange::filter($arr,$price_range_id);
            }
            if(isset($price_sort)){
                if($price_sort=="desc"){
                    usort($data,function($first,$second){
                        return $first['price'] < $second['price'];
                    });
                }
                else{
                    usort($data,function($first,$second){
                        return $first['price'] > $second['price'];
                    }); 
                }
            }
            return $data;
       
    }
 
    public static function productCategory($slug){
        $data['cat']=Category::where('slug',$slug)->first();
        return view('frontend.product-grid',$data);
    }
    public static function getProduct($arr,$products){
        foreach($products as $key => $product){
            $price=Product::price($product->id,'frontend')->toArray();
            
            $product=$product->getCondition($product,$price);
            $obj=array_merge($product->toArray(), $price);
            array_push($arr,$obj);
        }
        return $arr;
    }
}
