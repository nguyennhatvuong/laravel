<?php
use App\Models\Message;
use App\Models\Category;
use App\Models\ProductReview;
use App\Models\PostTag;
use App\Models\PostCategory;
use App\Models\Order;
use App\Models\Wishlist;
use App\Models\Shipping;
use App\Models\Cart;
use App\Models\Banner;
use App\Models\Product;
use App\Models\PaymentMethod;
use App\Models\Region;
use App\Models\Color;
use App\Models\PriceRange;
use App\Enums\TypeProfileEnum;
use App\Enums\TypeProductEnum;
use App\Enums\QuantityStatusEnum;


// use Auth;
class Helper{
    public static function countCart(){
        $cart = Cart::getSession();
        return $cart['count'];
    }
    public static function countWeight(){
        $cart = Cart::getSession();
        return $cart['weight'];
    }
    public static function cart(){
        return $data = Cart::getSession();
    }
    public static function messageList()
    {
        return Message::whereNull('read_at')->orderBy('created_at', 'desc')->get();
    } 
    public static function getBannerCategory(){
        $data=Category::status()->limit(3)->get()->toArray();
        
        if($data){
            ?>
            <div class="col-lg-7 offset-lg-4">
                <div class="banner__item">
                    <div class="banner__item__pic"  style="max-width:450px !important">
                        <img src="<?php $photo=explode(' ', $data[0]['photo']); echo $photo[0]; ?>" alt="">
                        <!-- <img src="img/banner/banner-2.jpg" alt=""> -->
                    </div>
                    <div class="banner__item__text">
                        <h2><?php echo $data[0]['title']?></h2>
                        <a href="<?php echo route('product.category',$data[0]['slug']); ?>">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner__item banner__item--middle">
                    <div class="banner__item__pic" style="max-width:450px !important">
                        <img src="<?php $photo=explode(' ', $data[1]['photo']); echo $photo[0]; ?>" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2><?php echo $data[1]['title']?></h2>
                        <a href="<?php echo route('product.category',$data[1]['slug']); ?>">Shop now</a>
                        <!-- <a href="#" class="btn-glitch">Shop now</a> -->

                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="banner__item banner__item--last">
                    <div class="banner__item__pic"  style="max-width:450px !important">
                        <img src="<?php $photo=explode(' ', $data[2]['photo']); echo $photo[0]; ?>" alt="">

                    </div>
                    <div class="banner__item__text">
                        <h2><?php echo $data[2]['title']?></h2>
                        <a href="<?php echo route('product.category',$data[2]['slug']); ?>">Shop now</a>
                    </div>
                </div>
            </div>
            <?php 
        }
    }
    public static function productRelated($id){
        $products=Product::where('cat_id',$id)->limit(4)->get();
        $data=[];
        $data=Product::getProduct($data,$products);
        ?>
        <?php
            foreach($data as $item){

                $photo=explode(',', $item['photo']);
        ?>
        <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="<?php echo $photo[0] ?>">
                    <span class="label  label-condition" ><?php echo $item['condition'] ?></span>

                   
                </div>
                <div class="product__item__text">
                    <h6><?php echo $item['title'] ?></h6>
                    <a href="<?php echo route('product.detail',$item['slug'])?>" class="add-cart">Chi tiết</a>
                    <div class="star-wrapper">
                        <?php
                            Helper::rateProduct($item['slug'])
                        ?>
                    </div>
                    <div class="d-inline-flex">
                    <?php 
                        if(!isset($item['old_price'])){ 
                    ?>
                        <h5><?php echo number_format($item['price']); ?></h5>
                    <?php 
                        }
                            else 
                        { 
                    ?>
                        <h5 class="m-r-30 text-line-through"><?php echo number_format($item['old_price']); ?></h5>
                        <h5><?php echo number_format($item['price']); ?></h5>
                    <?php 
                        } 
                    ?>
                    </div>
                   

                </div>
            </div>
        </div>
        <?php
        }   
    }
    public static function getAllCategory(){
        $category_product=new Category();
        $menu=$category_product->getAllParentWithChild();
        return $menu;
    } 
    public static function  getSidebarCategory(){
        $category_product = new Category();
        // dd($category_product);
        $menu=$category_product->getAllParentWithChild();
        if($menu){
            ?>
             <li class="sub-menu list-group-item"><i class="fas fa-tshirt"></i><a href="#" onclick="filterTable('none','category'); return false;" >Tất cả</a></li>
           
                <?php
                    foreach($menu as $cat_info){
                        if($cat_info->child_cat->count()>0){
                            ?>
                             <li class="sub-menu">
                      <i  class="fas fa-pen" onclick="showModalUpdateCategory( <?php echo $cat_info->id; ?>,'category'); return false;"></i> <a href="#" onclick="filterTable(<?php echo $cat_info->id; ?>,'category'); return false;" ><?php echo $cat_info->title; ?><i class="arrow fa fa-angle-right pull-right"></i></a>
                                <ul>

                                <?php
                                    foreach($cat_info->child_cat as $sub_menu){
                                        ?>
                                        <li><i onclick="showModalUpdateCategory( <?php echo $sub_menu->id; ?>,'child_category'); return false;"  class="fas fa-pen "></i><a href="#" onclick="filterTable(<?php echo $sub_menu->id; ?>,'child_category'); return false;"> <?php echo $sub_menu->title; ?></a>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                            <?php
                        }
                        else{
                            ?>      
                                <li class="sub-menu">
                                <i onclick="showModalUpdateCategory( <?php echo $cat_info->id; ?>)" class="fas fa-pen "></i></button><a href="#" onclick="filterTable(<?php echo $cat_info->id; ?>,'category'); return false;"><?php echo $cat_info->title; ?></a>
                                </li>
                            <?php
                        }
                    }
                    ?>
             
        <?php
        }
    }
    public static function  getSidebarFrontendCategory(){
        $category_product = new Category();
        // dd($category_product);
        $menu=$category_product->getAllParentWithChild();
        if($menu){
            ?>
            
           
                <?php
                    foreach($menu as $cat_info){
                        if($cat_info->child_cat->count()>0){
                            ?>
                             <li >
                                <a href="#" ><?php echo $cat_info->title; ?><i class="arrow fa fa-angle-right pull-right"></i></a>
                                <ul>

                                <?php
                                    foreach($cat_info->child_cat as $sub_menu){
                                        ?>
                                        <li class="sub-category "><a href="#" > <?php echo $sub_menu->title; ?></a>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                            <?php
                        }
                        else{
                            ?>      
                                <li >
                                <a href="#"><?php echo $cat_info->title; ?></a>
                                </li>
                            <?php
                        }
                    }
                    ?>
             
        <?php
        }
    }
    public static function  getHeaderCategory(){
        $category_product = new Category();
        // dd($category_product);
        $menu=$category_product->getAllParentWithChild();
        if($menu){
            ?>
            
            <!-- <li> -->
                <ul class="dropdown border-0 shadow">
                <?php
                    foreach($menu as $cat_info){
                        if($cat_info->child_cat->count()>0){
                            ?>
                            <li><a href="<?php echo route('product.category',$cat_info->slug); ?>"><?php echo $cat_info->title; ?></a>
                                <ul class="dropdown sub-dropdown border-0 shadow">
                                    <?php
                                    foreach($cat_info->child_cat as $sub_menu){
                                        ?>
                                        <li><a href="#"><?php echo $sub_menu->title; ?></a></li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                            <?php
                        }
                        else{
                            ?>
                                <li><a href="<?php echo route('product.category',$cat_info->slug); ?>"><?php echo $cat_info->title; ?></a></li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            <!-- </li> -->
        <?php
        }
        
    }
    public static function getBanner(){
        $data=Banner::limit(3)->orderBy('id','DESC')->get();
        foreach ($data as $key => $value) {
        ?>
        <div class="hero__items set-bg" data-setbg="<?php echo $value['photo']?>">
        <div class="layer">
    </div>
                <div class="container">
                    <div class="row">
                        <div class=" col-md-12">
                            <div class="hero__text">
                                <h2><?php echo $value['title']?></h2>
                                <p><?php echo $value['description']?></p>
                                <button class="btn-glitch" onclick="shopNow()">Shop now</button>
                                    <script>
                                        function shopNow(){
                                            window.location="{{route('productGrids')}}";
                                        }
                                    </script>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        <?php
    }
    public static function getBannerLogin(){
        
        $data=Banner::limit(3)->orderBy('id','DESC')->get();
        ?>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php   foreach ($data as $key => $value) { ?>
                <li data-target="#Gslider" data-slide-to="<?php echo $key ?>" class="<?php ($key==0)? 'active' : ''?>"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php   foreach ($data as $key => $value) { ?>
                <div class="carousel-item <?php ($key==0)? 'active' : ''?>">
                    <img class="first-slide" src="<?php echo $value['photo'] ?>" alt="First slide">
                    <div class="carousel-caption d-none d-md-block text-left">
                    </div>
                </div>  
                <?php }?>
            </div>
        </div>
    <?php } ?>
        <?php
    }
    
                   
    public static function CategoryList($option='all'){
        if($option='all'){
            return Category::orderBy('id','DESC')->get();
        }
        return Category::has('products')->orderBy('id','DESC')->get();
    }

    public static function postTagList($option='all'){
        if($option='all'){
            return PostTag::orderBy('id','desc')->get();
        }
        return PostTag::has('posts')->orderBy('id','desc')->get();
    }

    public static function postCategoryList($option="all"){
        if($option='all'){
            return PostCategory::orderBy('id','DESC')->get();
        }
        return PostCategory::has('posts')->orderBy('id','DESC')->get();
    }
    // Cart Count
    public static function cartCount($user_id=''){
       
        if(Auth::check()){
            if($user_id=="") $user_id=auth()->user()->id;
            return Cart::where('user_id',$user_id)->where('order_id',null)->sum('quantity');
        }
        else{
            return 0;
        }
    }
    // relationship cart with product
    public function product(){
        return $this->hasOne('App\Models\Product','id','product_id');
    }

    public static function getAllProductFromCart($user_id=''){
        if(Auth::check()){
            if($user_id=="") $user_id=auth()->user()->id;
            return Cart::with('product')->where('user_id',$user_id)->where('order_id',null)->get();
        }
        else{
            return 0;
        }
    }
    // Total amount cart
    public static function totalCartPrice($user_id=''){
        if(Auth::check()){
            if($user_id=="") $user_id=auth()->user()->id;
            return Cart::where('user_id',$user_id)->where('order_id',null)->sum('amount');
        }
        else{
            return 0;
        }
    }
    // Wishlist Count
    public static function wishlistCount($user_id=''){
       
        if(Auth::check()){
            if($user_id=="") $user_id=auth()->user()->id;
            return Wishlist::where('user_id',$user_id)->where('cart_id',null)->sum('quantity');
        }
        else{
            return 0;
        }
    }
    public static function getAllProductFromWishlist($user_id=''){
        if(Auth::check()){
            if($user_id=="") $user_id=auth()->user()->id;
            return Wishlist::with('product')->where('user_id',$user_id)->where('cart_id',null)->get();
        }
        else{
            return 0;
        }
    }
    public static function totalWishlistPrice($user_id=''){
        if(Auth::check()){
            if($user_id=="") $user_id=auth()->user()->id;
            return Wishlist::where('user_id',$user_id)->where('cart_id',null)->sum('amount');
        }
        else{
            return 0;
        }
    }

    // Total price with shipping and coupon
    public static function grandPrice($id,$user_id){
        $order=Order::find($id);
        dd($id);
        if($order){
            $shipping_price=(float)$order->shipping->price;
            $order_price=self::orderPrice($id,$user_id);
            return number_format((float)($order_price+$shipping_price),2,'.','');
        }else{
            return 0;
        }
    }


    // Admin home
    public static function earningPerMonth(){
        $month_data=Order::where('status','delivered')->get();
        // return $month_data;
        $price=0;
        foreach($month_data as $data){
            $price = $data->cart_info->sum('price');
        }
        return number_format((float)($price),2,'.','');
    }

    public static function shipping(){
        return Shipping::orderBy('id','DESC')->get();
    }
    public static function getAddress($profile){
        $name=$profile->name;
        $phone=$profile->phone;
        $province=explode(',', $profile->province);
        $district=explode(',', $profile->district);
        $ward=explode(',', $profile->ward);
        $address=$profile->address;
        ?>
            <h5 class=" m-r-10"><?php echo $name.", ".$phone.", ".$address.", ". $ward[1].", ".$district[1].", ".$province[1].".";?></h5>
            
        <?php
    }
    public static function getTypeProfile(){
        $data=TypeProfileEnum::getKeys();
        foreach ($data as $key => $value) {
            switch ($value) {
                case 'home':
                    $val='Nhà riêng';
                    break;
                
                default:
                    $val='Văn phòng';
                    break;
            }
            ?>
            <input type="radio" name="type_profiles" value="<?php echo $val ?>" id="<?php echo $val ?>" checked="checked" />
                  <label for="<?php echo $val ?>"><?php echo $val ?></label>
            <?php     
        }
    }
    public static function getPaymentMethod(){
        $data=PaymentMethod::get();
        foreach ($data as $item) {
            ?>
            <li class="custom-control custom-radio list-group-item ">
                <label class="radio">
                    <input type="radio" name="payment_method" value="<?php echo $item['id'] ?>" >
                        <span class="custom-control-label">
                            <img src="<?php echo $item['image'] ?>" alt="<?php echo $item['image'] ?>" style="max-height:35px !important">
                            <?php echo $item['name'] ?>
                        </span>
                </label>
            </li>
            <?php     
        }
    }
    public static function getRegion(){
        $data=Region::get();
        ?>
        <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button type="button" onclick="table()" class="btn" data-toggle="collapse" data-target="#collapseRegion"><i class="fa fa-angle-right"></i>
                                    Tất cả
                                </button>									
                            </h5>
                        </div>
                        <div id="collapseRegion" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="accordion" id="accordionExample1">
                                
                                <aside class="sidebar-card">
                                    <div id="leftside-navigation" class="nano">
                                      <ul class="nano-content" id="sidebar-category">

                                      </ul>
                                    </div>
                                  </aside>
                              
                        
                        
                            </div>
                        </div>
                    </div>
                    <?php
        foreach($data as $region){
            ?>
                <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button type="button" onclick="table(<?php echo $region->id;?>)" class="btn" data-toggle="collapse" data-target="#collapseRegion<?php echo $region->id?>"><i class="fa fa-angle-right"></i>
                                    <?php echo $region->name;?>
                                </button>									
                            </h5>
                        </div>
                        <div id="collapseRegion<?php echo $region->id?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="accordion" id="accordionExample1">
                                
                                <aside class="sidebar-card">
                                    <div id="leftside-navigation" class="nano">
                                      <ul class="nano-content" id="sidebar-category">
                                          <li class="list-group-item"><?php echo $region->description;?></li>  

                                      </ul>
                                    </div>
                                  </aside>
                              
                        
                        
                            </div>
                        </div>
                    </div>
            <?php
        }
    }
    public static function getQuantityStatus(){
        $data=QuantityStatusEnum::getKeys();
        foreach ($data as $key => $value) {
            switch ($value) {
                case 'all':
                    $title='Tất cả';
                    break;
                case 'less':
                    $title='Dưới định mức tồn';
                    break;
                case 'outOfStock':
                    $title='Hết hàng';
                    break;
                default:
                    $title='Còn hàng';
                    break;
                    
            }
            ?>
                <li class="list-group-item">
                    <div class="form-check cursor-poiter">
                        <input class="form-check-input cursor-poiter"  onclick="filterTable('<?php echo $value ?>','quantity')" type="radio" name="filterQuantity" id="filterQuantity<?php echo $value ?>" value="<?php echo $value ?>">
                        <label class="form-check-label cursor-poiter" for="filterQuantity<?php echo $value ?>">
                            <?php echo $title?>
                        </label>
                    </div>
                </li>
            <?php     
        }
    }
    public static function getTableRoute($data,$table_name) {
        ?>
            <div class="card-body">
                <table style="color: #333" cellspacing="0" class="table table-bordered" id="<?php echo $table_name ?>"  width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center align-middle w-25">Tuyến</th>
                            <th class="text-center align-middle">Gói dịch vụ</th>
                            <th class="text-center align-middle">Khối lượng</th>
                            <th class="text-center align-middle">Nội thành</th>
                            <th class="text-center align-middle">Ngoại thành</th>
                            <th class="text-center align-middle">Thêm 0.5kg</th>
                            <th class="text-center align-middle">Thời gian giao</th>
                        </tr>
                        </thead>
                            <tbody>
                                <?php
                                foreach ($data as $key => $item){
                                    $arr=explode(',', $item->description);
                                ?>
                                    <tr>
                                        <td><h4 class="text-center"><?php echo $item->name;?></h4>
                                        <?php
                                            foreach ($arr as $key => $value){
                                        ?>
                                            <p class="text-center"><?php echo $value;?></p>
                                            <?php } ?>
                                        </td>
                                        <td><?php echo $item->type;?></td>
                                        <td>≤ <?php echo number_format($item->weight);?> g</td>
                                        <td><?php echo number_format($item->urban);?></td>
                                        <td><?php echo number_format($item->suburban);?></td>
                                        <td><?php echo number_format($item->more_weight);?></td>
                                        <td><?php echo $item->time;?></td>
                                   </tr>
                                <?php }?>
                                
                            </tbody>
                            
                         </table>
                         
                  
                    </div>
                    <?php     

    } 
    // public static function createCode($id,$str){
    //     $lengthId=strlen($id);
    //     if($lengthId>6){
    //         $count=9;
    //     }
    //     else{
    //         $count=6;
    //     }
    //     $length=$count-$lengthId;
    //     for($i=0; $i<$length; $i++){
    //         $str.='0';
    //     }
    //     return $str.$id;
    // }
    public static function rateProduct($slug){
        $product=Product::where('slug',$slug)->first();
        $rate=ProductReview::where('product_id',$product->id)->avg('rate');
        // dd($rate);
        ?>
            <div class="star-wrapper">
        <?php
        for($i=1; $i<=5; $i++){
            if($i<=$rate){
                ?>
                <i id="star-<?php echo $i;?>" class="cursor-poiter fas fa-star fa-star-active"></i>
                <?php
            }
            else{
                ?>
                <i id="star-<?php echo $i;?>" class="cursor-poiter far fa-star"></i>
                <?php
            }
            
        }
        ?>
            </div>
        <?php
    }
    public static function getColor(){
        $colors=Color::get();
        foreach ($colors as $key => $item){
            ?>

            <label  onclick="chooseOption(this)" data-type="color" data-id="<?php echo $item['id']?>"  style="background:<?php echo $item['name']?>"  for="<?php echo "color-". $item['id']?>">
            <input type="radio" name="color" id="<?php echo "color-". $item['id']?>" value="<?php echo $item['name']?>">
            </label>
        <?php
        }
        ?>
        <?php
    }
    public static function getTypeProduct(){
        $data=TypeProductEnum::getKeys();
        foreach ($data as $key => $item){
            switch ($item) {
                case 'men':
                    $name='Nam';
                    break;
                case 'kids':
                    $name="Trẻ em";
                    break;

                default:
                    $name="Nữ";
                    break;
            }
            ?>

            <label onclick="chooseOption(this)" data-type="type" data-id="<?php echo $item?>" for="<?php echo "type-product-". $item?>"><?php echo $name?>
            <input type="radio" name="type-product" id="<?php echo "type-product-". $item?>" value="<?php echo $name?>">
            </label>
        <?php
        }
        ?>
        <?php
    }
    public static function getPriceRange(){
        $data=PriceRange::get();
        foreach ($data as $key => $item){
            ?>

            <label onclick="chooseOption(this)" data-type="price-range" data-id="<?php echo $item['id']?>" for="<?php echo "price-range-". $item['id']?>"><?php echo $item['title']?>
            <input type="radio" name="price-range" id="<?php echo "price-range-". $item['id']?>">
            </label>
        <?php
        }
        ?>
        <?php
    }
    public static function avatar(){
        $user=Auth()->user();
        $avatar=$user->avatar==null?Avatar::create($user->name)->toBase64():$user->avatar;
        ?>
        <img class="img-profile rounded-circle" src="<?php echo $avatar?>">
        <?php

    }
}

?>