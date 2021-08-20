
<nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow m-b-10" >

    <!-- Sidebar Toggle (Topbar) -->
    <a class="navbar-brand" href="https://front.codes/" target="_blank"><img src="{{ asset('photos/logo.png') }}" alt=""></a>	


    <!-- Topbar Search -->
    
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto py-4 py-md-0">
      <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
        <a class="nav-link" href="#">Tổng quan</a>
    </li>
        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Người dùng 
              <i class="fas fa-sort-down m-l-5" ></i>
            </a>
            <div class="dropdown-menu">
               <a class="dropdown-item font-size-15" href="{{route('admin.user.index')}}">Tài khoản</a>
               <a class="dropdown-item font-size-15" href="{{route('admin.role.index')}}">Quyền truy cập</a>
            </div>
        </li>
        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cửa hàng
              <i class="fas fa-sort-down m-l-5" ></i>
            </a>
            <div class="dropdown-menu">
             <a class="dropdown-item font-size-15" href="{{route('admin.personel.index')}}">Nhân viên</a>
             {{-- <a class="dropdown-item font-size-15" href="{{route('admin.sal'ary.index')}}">Bảng lương</a> --}}
            </div>
        </li>
        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-tshirt m-r-5"></i>
              Sản phẩm
              <i class="fas fa-sort-down m-l-5" ></i>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item font-size-15" href="{{route('admin.product.index')}}">
                <i class="fas fa-tshirt fa-sm fa-fw mr-2 "></i>
                  Sản phẩm
              </a>
             <a class="dropdown-item font-size-15" href="{{route('admin.priceList.index')}}">
                <i class="fas fa-calculator fa-sm fa-fw mr-2 "></i>
                  Bảng giá
              </a>

              {{--  <a class="dropdown-item font-size-15" href="{{route('admin.priceList.index')}}">
                <i class="fas fa-calculator m-r-5"></i>
                Bảng giá</a>  --}}
            </div>
        </li>
        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-users m-r-5" ></i>

              Đối tác
              <i class="fas fa-sort-down" ></i>
            </a>
            <div class="dropdown-menu">
             <a class="dropdown-item font-size-15" href="{{route('admin.supplier.index')}}"><i class="fas fa-industry"></i>&ensp;Nhà cung cấp</a>
            </div>
        </li>
        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">

            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-exchange-alt m-r-5" ></i>
              Giao dịch
              <i class="fas fa-sort-down " ></i>
            </a>
            <div class="dropdown-menu">
             <a class="dropdown-item font-size-15" href="{{route('admin.productImport.index')}}"><i class="fas fa-truck-moving"></i>&ensp;Nhập hàng</a>
             <a class="dropdown-item font-size-15" href="{{route('admin.order.index')}}"><i class="fas fa-opencart"></i>&ensp;Đơn hàng</a>
            </div>
        </li>
        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
          <a class="nav-link" href="{{route('admin.cashflow.index')}}">              
            <i class="fas fa-money-bill-alt m-r-5" ></i>
            Thu & chi</a>
      </li>
       
    </ul>
    <ul class="navbar-nav ml-auto">

      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    
      {{-- Home page --}}
      
      <li class="nav-item dropdown no-arrow  mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-home" ></i>
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
         
         <a class="dropdown-item font-size-15" href="{{route('home')}}">
            <i class="fas fa-globe fa-sm fa-fw mr-2 "></i>
              Website
          </a>
         <a class="dropdown-item font-size-15" href="{{route('sell.index')}}">
            <i class="fab fa-opencart fa-sm fa-fw mr-2 "></i>
              Màn hình thu ngân
          </a>
         {{-- <a class="dropdown-item font-size-15" href="{{route('sell.index')}}">
            <i class="fas fa-tablet-alt fa-sm fa-fw mr-2 "></i>
            Màn hình thu ngân
          </a> --}}
        
      </li>
      <li class="nav-item dropdown no-arrow  mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-shipping-fast" ></i>
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
         
         <a class="dropdown-item font-size-15" href="{{ route('admin.region.index') }}">
          <i class="fas fa-map-marked fa-sm fa-fw mr-2 "></i>
              Khu vực
          </a>
         <a class="dropdown-item font-size-15" href="{{route('admin.routeShip.index')}}">
            <i class="fas fa-truck-moving fa-sm fa-fw mr-2 "></i>
            Dịch vụ
          </a>
        
      </li>
      <li class="nav-item dropdown no-arrow  mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-cog" ></i>
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
         
         <a class="dropdown-item font-size-15" href="{{ route('unisharp.lfm.show') }}">
            <i class="fas fa-globe fa-sm fa-fw mr-2 "></i>
            Thư viện
          </a>
         <a class="dropdown-item font-size-15" href="{{route('admin.information.index')}}">
            <i class="fas fa-info-circle fa-sm fa-fw mr-2 "></i>
            Thông tin
          </a>
          <div class="dropdown-divider"></div>
        
      </li>
      
      @include('admin.notification.show')

      

      <!-- Nav Item - Messages -->
      
      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          @php
          $user=Auth()->user();
          @endphp
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{$user->name}}</span>
          @if($user->avatar)
            <img class="img-profile rounded-circle" src="{{$user->avatar}}">
          @else
            @php
            $avatar=Avatar::create($user->name)->toBase64();
            @endphp
            <img  class="img-profile rounded-circle" src="{{ $avatar }}" alt="">
          @endif
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
         <a class="dropdown-item font-size-15" href= "#" data-code="{{ $user->code }}" onclick="showUser(this)">
            <i class="fas fa-user fa-sm fa-fw mr-2 "></i>
            Thông tin cá nhân
          </a>
          {{-- <a class="dropdown-item font-size-15" href="{{route('admin.change.password.form')}}">
              <i class="fas fa-key fa-sm fa-fw mr-2 "></i>
              Change Password
            </a> --}}
         {{-- <a class="dropdown-item font-size-15" href="{{route('admin.settings')}}">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 "></i>
            Settings
          </a> --}}
          <div class="dropdown-divider"></div>
         <a class="dropdown-item font-size-15" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                 <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 "></i> {{ __('Logout') }}
            </a>

            
            <div class="dropdown-divider"></div>
            <div class="content-switch">
                <div id="switch">
                    <div id="circle"></div>
                </div>
            </div>
        </div>
      </li>

    </ul>

  </nav>
  