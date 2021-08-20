@extends('layouts.frontend.master')
@section('title','True Blues')
@section('main-content')
    <section class="spad-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="cart_item_list">
                                @if(Helper::cart()['count']!=0)
									@foreach(Helper::cart()['products'] as $key=>$product)
                                    
                                <tr>
                                    @php
											$photo=explode(',',$product['productInfo']['photo']);
											@endphp
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6><a href="{{route('product.detail',$product['productInfo']['slug'])}}" >{{$product['productInfo']['title']}}</a></h6>
                                            <h5>{{number_format($product['product_price'])}} vnđ</h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro-qty-2">
                                                <span class="fa fa-minus dec qtybtn" onclick="minusQuantity({{$product['id']}})"></span>
                                                <input class="quantity_cart" type="text" id="quantity_{{$product['id']}}" value="{{$product['quantity']}}">
                                                <span class="fa fa-plus dec qtybtn" onclick="plusQuantity({{$product['id']}})"></span>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price">{{number_format($product['price'])}}</td>
                                <td class="cart__close"><i class="fa fa-close" data-slug="{{$product['productInfo']['slug']}}" onclick="deleteCart(this)"></i></td>
                                </tr>
                                @endforeach
								@else
                                <tr>
                                    <td class="text-center">
                                        Giỏ hàng rỗng. <a href="{{route('product.grid')}}" style="color:blue;">Continue shopping</a>

                                    </td>
                                    
                                </tr>
                                @endif
                                
                                
                            </tbody>
                        </table>
                    </div>
                   
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-6" style="font-size: 20px; color:#001489" >
                                    <i class="fas fa-tags"></i>Voucher
                                </div>
                            </div>
                        </div>
                        <div>
                          <div class="card-body">
                              <input class="input w-100" placeholder="Nhập mã voucher">
                          </div>
                        </div>
                      </div>
                    <div class="card">
                        <div class="card-body shopping__cart__table">
                          <table>
                            <tbody id="cart_price">
                              <tr>
                                <td class="cart__price">Tạm tính:</td>
                                <td class="float-right font-size-18" id="sub_price">
                                    {{number_format(Helper::cart()['sub_price'])}}
                                </td>
                              </tr>
                              <tr>
                                <td class="cart__price">Giảm giá:</td>
                                <td class="float-right font-size-18" id="discount">
                                    {{number_format(Helper::cart()['discount'])}}
                                </td>
                              </tr>
                              <tr>
                                <td class="cart__price">Phí ship</td>
                                <td class="float-right font-size-18" id="fee_ship">
                                    {{number_format(Helper::cart()['fee_ship'])}}
                                </td>
                              </tr>
                              <tr>
                                <td class="cart__price">Tổng cộng:</td>
                                <td class="float-right font-size-18" id="total_price">
                                    {{number_format(Helper::cart()['total_price'])}}

                                </td>
                              </tr>
                              <tr>
                                  <td class="cart__price"  colspan="2" id="nameMoney">

                                  </td>
                              </tr>
                              <tr>
                                  <td  colspan="2"  > 
                                    <button onclick="checkout()" class="float-right btn btn-primary"><i class="fab fa-amazon-pay"></i> &ensp;Thanh toán</button>
                                  </td>
                              </tr>
                            </tbody>
                          </table>
                        
                        </div>
                      </div>
                 
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        nameMoney();
        function nameMoney(){
            var total=converTextNumber("#total_price");
            $("#nameMoney").text(convertVnd(total));
        }
    </script>
@endpush

    <!-- Shopping Cart Section End -->

    <!-- Footer Section Begin -->
    