@extends('layouts.frontend.master')

@section('title',' Đăng nhập')

@section('main-content')

<section class="login-block spad-top">
    <div class="form-structor">
        <div class="login ">
            <div class="center">
                <h2 class="form-title" id="login">Đăng nhập</h2>
                <div class="form-group">
                    <input type="text" class="form-control input" id="user_name" placeholder="Email hoặc số điện thoại" type="email" name="email" placeholder="" value="{{old('email')}}">
                </div>
                
                <div class="form-group">
                    <input type="password" class="form-control input" id="password" name="password" placeholder="Mật khẩu" required="required" value="{{old('password')}}">
                </div>
                <div class="form-group">
                    @if (Route::has('password.request'))
                                <a class="lost-pass" href="#">
                                    Quên mật khẩu
                                </a>
                            @endif
                    <button onclick="login()" class="btn btn-glitch float-right">Đăng nhập</button>
                </div>
                
            </div>
            <div class="social-container">
                <ul class="social-icons">
                    <li><a href="{{ url('/auth/redirect/facebook') }}"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                    <li><a href="#"><i class="fab fa-github"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="signup slide-up ">
            <h2 class="form-title" id="signup">Đăng ký</h2>
            <div class="d-none" id="signup-form">
                <div class="form-group">
                    <input type="text" class="form-control input" id="user_name" placeholder="Email hoặc số điện thoại" type="email" name="email" placeholder="" value="{{old('email')}}">
                </div>
                
                <div class="form-group">
                    <input type="password" class="form-control input" id="password" name="password" placeholder="Mật khẩu" required="required" value="{{old('password')}}">
                </div>
                <div class="form-group">
                    @if (Route::has('password.request'))
                                <a class="lost-pass" href="#">
                                    Quên mật khẩ
                                </a>
                            @endif
                    <button onclick="login()" class="btn btn-glitch float-right">Đăng nhập</button>
                </div>
            </div>
           
        </div>
        
    </div>
</section>

    
    
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
@endpush
@push('scripts')
    <script>
        const loginBtn = document.getElementById('login');
      const signupBtn = document.getElementById('signup');
      const signupForm = document.getElementById('signup-form');
      
      loginBtn.addEventListener('click', (e) => {

          let parent = e.target.parentNode.parentNode;
          Array.from(e.target.parentNode.parentNode.classList).find((element) => {
              if(element !== "slide-up") {
                  parent.classList.add('slide-up')

              }else{
                  signupBtn.parentNode.classList.add('slide-up');
                  signupForm.classList.add('d-none');


                //   signupBtn.parentNode.classList.add('d-none')

                  parent.classList.remove('slide-up')
              }
          });
      });
      
      signupBtn.addEventListener('click', (e) => {
          let parent = e.target.parentNode;
          Array.from(e.target.parentNode.classList).find((element) => {
              if(element !== "slide-up") {
                  parent.classList.add('slide-up');
                  signupForm.classList.remove('d-none');

              }else{
                  loginBtn.parentNode.parentNode.classList.add('slide-up');
                  
                  parent.classList.remove('slide-up')
              }
          });
      });
        $('.input').keypress(function (e) {
            if (e.which == 13) {
                login();
                return false;    //<---- Add this line
            }
        });

        function login(){
            
            var name=$("#user_name").val();
            var password=$("#password").val();

            $.ajax({
                type: 'post',
                dataType: 'json',
                url: "{{ route('login.post') }}",
                data: {
                    name:name,
                    password:password,
                    "_token": "{{ csrf_token() }}"
                },
                success: function(result) {
                    {
                        toastr.success('Đăng nhập thành công');  
                        window.location.href=result;
                        // history.go(-1);
                        // location.reload();
                    }
                },
                error: function(response) {
                    var errors = response.responseJSON.errors;
                    $.each(errors,function(field_name,error){
                        if(field_name==Object.keys(errors)[0]){
                            toastr.error(error);
                        }
                    });
                },
            });
        }
    </script>
@endpush