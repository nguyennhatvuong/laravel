<!DOCTYPE html>
<html lang="en">

@include('layouts.admin.head')
<body id="page-top" class="hero-anime">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper " class="grid-12 d-flex flex-column" style="width:100%">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('layouts.admin.header')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        @yield('main-content')
        <!-- /.container-fluid -->

      </div>
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
          <filter id="goo">
            <fegaussianblur in="SourceGraphic" stddeviation="4" result="blur"></fegaussianblur>
            <fecolormatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 22 -7" result="goo"></fecolormatrix>
            <feblend in="SourceGraphic" in2="goo"></feblend>
          </filter>
        </defs>
      </svg>
      <!-- End of Main Content -->
      @include('layouts.admin.footer')
      @include('layouts.admin.script')

</body>

</html>