<!DOCTYPE html>
<html lang="zxx">
    @include('layouts.frontend.head')
<body>
    @include('layouts.frontend.header')
    <main>
        @yield('main-content')

    </main>
    <div class="counter"></div>
    @include('layouts.frontend.footer')
    @include('layouts.frontend.script')

</body>
</html>