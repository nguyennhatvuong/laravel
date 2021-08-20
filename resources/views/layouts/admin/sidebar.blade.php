<ul class="toggled navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin <sup>99</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Tổng quan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct"
            aria-expanded="true" aria-controls="collapseProduct">
            <i class="fas fa-fw fa-tshirt"></i>
            <span>Sản phẩm</span>
        </a>
        <div id="collapseProduct" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('admin.product.index')}}">Sản phẩm</a>
                <a class="collapse-item" href="{{route('admin.priceList.index')}}">Bảng giá</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseExchange"
            aria-expanded="true" aria-controls="collapseExchange">
            <i class="fas fa-exchange-alt"></i>
            <span>Giao dịch</span>
        </a>
        <div id="collapseExchange" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('home')}}">Website</a>
                <a class="collapse-item" href="utilities-border.html">Màn hình thu ngân</a>
                <a class="collapse-item" href="utilities-animation.html">Giao hàng - COD</a>
                <a class="collapse-item" href="utilities-other.html">Trả hàng</a>
                <a class="collapse-item" href="utilities-other.html">Nhập hàng</a>
                <a class="collapse-item" href="utilities-other.html">Trả hàng nhà cung cấp</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePartner"
            aria-expanded="true" aria-controls="collapsePartner">
            <i class="fas fa-users"></i>
            <span>Đối tác</span>
        </a>
        <div id="collapsePartner" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="w">Khách hàng</a>
                <a class="collapse-item" href="utilities-border.html">Nhà cung cấp</a>
                <a class="collapse-item" href="utilities-animation.html">Shipper</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-money-check-alt"></i>
            <span>Thu chi</span></a>
    </li>
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReport"
            aria-expanded="true" aria-controls="collapseReport">
            <i class="fas fa-chart-line"></i>
            <span>Báo cáo</span>
        </a>
        <div id="collapseReport" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="w">Tổng kết cuối ngày</a>
                <a class="collapse-item" href="utilities-border.html">Báo cáo bán hàng</a>
                <a class="collapse-item" href="utilities-animation.html">Báo cáo trả hàng</a>
                <a class="collapse-item" href="utilities-animation.html">Báo cáo nhập hàng</a>
                <a class="collapse-item" href="utilities-animation.html">Báo cáo kho hàng</a>
                <a class="collapse-item" href="utilities-animation.html">Báo cáo công nợ</a>
                <a class="collapse-item" href="utilities-animation.html">Sổ quỹ thu chi</a>
                <a class="collapse-item" href="utilities-animation.html">Phân tích bán hàng</a>
                <a class="collapse-item" href="utilities-animation.html">Kết quả kinh doanh</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseShip"
            aria-expanded="true" aria-controls="collapseShip">
            <i class="fas fa-shipping-fast"></i>
            <span>Ship</span>
        </a>
        <div id="collapseShip" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.region.index') }}">Khu vực</a>
                <a class="collapse-item" href="{{route('admin.routeShip.index')}}">Dịch vụ</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Divider -->

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>