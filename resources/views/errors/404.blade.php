<!DOCTYPE html>
<html lang="en">

<head>

  @include('layouts.admin.head')

</head>

<body>
  
  <div class="container-fluid">

    <div class="row" style="margin-top:10%">
        <!-- 404 Error Text -->
      <div class="col-md-12">
        <div class="text-center">
          <div class="error mx-auto" data-text="404">404</div>
          <p class="lead text-gray-800 mb-5">Không thể tìm thấy trang web</p>
          <p class="text-gray-500 mb-0">Có vẻ như bạn đã tìm thấy một trục trặc </p>
          {{-- {{dd(auth()->user())}}; --}}
            <a href="{{ route('home') }}">&larr; Trang chủ</a>

        </div>
      </div>
    </div>

    </div>


    @include('layouts.admin.footer')

</body>

</html>
