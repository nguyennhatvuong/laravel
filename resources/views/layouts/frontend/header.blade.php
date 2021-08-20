<header class="header">
    <div class="header__top container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div class="header__top__left">
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__top__right">
                    <div class="header__top__links">
                        <ul>
                            <li>
                                @auth
                                    <a href="#" ><i class="fa fa-user"></i>
                                        @php
                                        $user=Auth()->user();
                                        echo $user->name;
                                        @endphp
                                    </a>
                                    <ul class="dropdown">
                                        @if(Session::has('role'))
                                            @if( Session::get('role')=='admin')
                                                <li><i class="ti-user"></i> <a href="{{route('admin.index')}}"  target="_blank">Trang quản lý</a></li>
                                            @else 
                                                <li><i class="ti-user"></i> <a href="{{route('user.index')}}">Tài khoản của tôi</a></li>
                                                <li><a href="./shopping-cart.html">Đơn mua</a></li>

                                            @endif
                                        @endif
                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();$('#logout-form').submit();">Đăng xuất</a></li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </ul>
                                @else
                                    <a href="{{route('login.get')}}" ><i class="fa fa-user"></i> Đăng nhập</a>
                                @endauth
                            </li>
                        </ul>
                        
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid header_main">
        <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{asset('photos/Untitled-2.png')}}" alt=""></a>
    
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="{{Request::route()->getName()=='home' ? 'active' : ''}}"><a href="{{route('home')}}">Trang chủ</a></li>
                            <li class="{{Request::route()->getName()=='product.grid' ? 'active' : ''}}"><a href="{{route('product.grid')}}">Sản phẩm</a>
                                {{Helper::getHeaderCategory()}}
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./blog.html">True Blues shop</a></li>
                            {{-- <li class="{{Request::route()->getName()=='contact' ? 'active' : ''}}"><a href="{{route('contact')}}">Liên hệ</a></li>  --}}
                        </ul>
                    </nav>
                </div>
                
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <ul>
                            
                            <li>
                                <a href="{{route('cart.index')}}"><i class="fab fa-opencart"></i> 
                                    @if(session()->has('cart'))
                                        <span class="total-count">{{ Helper::cart()['count'] }}</span>
                                    @else    
                                        <span class="total-count">0</span>

                                    @endif
                                </a>
                                <div class="shopping shadow">
                                    <div class="shopping-cart">
                                        <div class="shopping-cart-header">
                                          <i class="fab fa-opencart cart-icon"></i><span class="badge-cart-icon">{{Helper::countCart()}}</span>
                                          <div class="shopping-cart-total">
                                            <span class="lighter-text">Tổng cộng:</span>
                                            <span class="main-color-text">{{number_format(Helper::cart()['total_price'])}} vnđ</span>
                                          </div>
                                        </div> <!--end shopping-cart-header -->
                                    
                                        <ul class="shopping-cart-items">
                                            @if(session()->has('cart'))
                                                @foreach(Helper::cart()['products'] as $product)
                                                    @php
                                                        $photo=explode(',',$product['productInfo']['photo']);
                                                    @endphp
                                                    <li class="clearfix">
                                                        <img src="{{$photo[0]}}" alt="{{$photo[0]}}" />
                                                        
                                                        {{-- <span class="item-name">{{$product['productInfo']['title']}}</span> --}}
                                                        <span class="item-name"><a href="{{route('product.detail',$product['productInfo']['slug'])}}" target="_blank">{{$product['productInfo']['title']}}</a></span>
                                                        <span class="item-price">{{number_format($product['price'])}} vnđ</span>
                                                        <span class="item-quantity">Số lượng: {{$product['quantity']}}</span>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                        <a href="{{route('cart.index')}}" class=" btn-primary btn float-left"><i class="fab fa-opencart"></i> &ensp;Giỏ hàng</a>
                                        {{--  <button class=" btn-primary btn float-left"><i class="fab fa-opencart"></i> &ensp;Giỏ hàng</button>  --}}
                                        <a href="{{route('checkout.index')}}" class=" btn-primary btn float-right"><i class="fab fa-amazon-pay"></i> &ensp;Thanh toán</a>
                                      </div>
                                   
                                </div>

                            </li>
                        </ul>
                        
                        
                    </div>
                  
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
   
</header>