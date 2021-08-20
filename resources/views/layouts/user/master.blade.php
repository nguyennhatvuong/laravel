@extends('layouts.frontend.master')
@section('title','True Blues')
@section('main-content')
    <section class="spad-top">
        <div class="container">
            <div class="row">
              <div class="col-lg-3">
                <div class="shop__sidebar">
                    <div class="shop__sidebar__user">
                      <div class="our-team">
                        @php
                        $user=Auth()->user();
                        @endphp
                        
                        <div class="picture">
                            @if($user->avatar)
                                <img class="img-fluid" src="{{$user->avatar}}">
                            @else
                                @php
                                $avatar=Avatar::create($user->name)->toBase64();
                                @endphp
                                <img  class="img-fluid" src="{{ $avatar }}" alt="">
                            @endif
                        </div>
                        <div class="team-content">
                          <h4 class="name">{{$user->name}}</h4>
                        </div>
                        
                      </div>
                    </div>
                    <div class="shop__sidebar__accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseOne"><i class="fas fa-user"></i>&ensp;Tài khoản của tôi</a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__categories">
                                            <ul class="nice-scroll">
                                                <li><a href="#">Hồ sơ</a></li>
                                                <li><a href="#">Địa chỉ</a></li>
                                                <li><a href="#">Đổi mật khẩu</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a> <i class="fab fa-opencart"></i>&ensp;Đơn hàng</a>
                                </div>
                                
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                  <a data-toggle="collapse" data-target="#collapseThree"><i class="fas fa-bell"></i>&ensp;Thông báo</a>
                                </div>
                                <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__price">
                                            <ul>
                                                <li><a href="#">$0.00 - $50.00</a></li>
                                                <li><a href="#">$50.00 - $100.00</a></li>
                                                <li><a href="#">$100.00 - $150.00</a></li>
                                                <li><a href="#">$150.00 - $200.00</a></li>
                                                <li><a href="#">$200.00 - $250.00</a></li>
                                                <li><a href="#">250.00+</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseFour"><i class="fas fa-sticky-note"></i>&ensp;Kho voucher</a>
                                </div>
                                <div id="collapseFour" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseFive"><i class="fas fa-donate"></i>&ensp;TrueBlue xu</a>
                                </div>
                                <div id="collapseFive" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__color">
                                            <label class="c-1" for="sp-1">
                                                <input type="radio" id="sp-1">
                                            </label>
                                            <label class="c-2" for="sp-2">
                                                <input type="radio" id="sp-2">
                                            </label>
                                            <label class="c-3" for="sp-3">
                                                <input type="radio" id="sp-3">
                                            </label>
                                            <label class="c-4" for="sp-4">
                                                <input type="radio" id="sp-4">
                                            </label>
                                            <label class="c-5" for="sp-5">
                                                <input type="radio" id="sp-5">
                                            </label>
                                            <label class="c-6" for="sp-6">
                                                <input type="radio" id="sp-6">
                                            </label>
                                            <label class="c-7" for="sp-7">
                                                <input type="radio" id="sp-7">
                                            </label>
                                            <label class="c-8" for="sp-8">
                                                <input type="radio" id="sp-8">
                                            </label>
                                            <label class="c-9" for="sp-9">
                                                <input type="radio" id="sp-9">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="shop__product__option">
                    <div class="row">
                        @yield('main-content-user')

                    </div>
                </div>
               
            </div>
            </div>
        </div>
    </section>
@endsection