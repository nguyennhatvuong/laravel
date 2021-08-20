
    <!-- Header Section End -->
    @extends('layouts.frontend.master')
    @section('title','True Blues')
    @section('main-content')
    <!-- Shop Details Section Begin -->
    <section class="shop-details spad-top">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <section class="slider" style="padding: 0 30px;">
                            
                            <div id="slider" class="flexslider">
                                @php 
                                    $photos=explode(',',$product['photo']);
                                @endphp 
                               <ul class="slides">
                                   @foreach ($photos as $photo)
                                    <li>
                                        <img src="{{$photo}}" />
                                    </li>
                                   @endforeach
                               </ul>
                            </div>
                            <div id="carousel" class="flexslider">
                               <ul class="slides">
                                    @foreach ($photos as $photo)
                                    <li>
                                        <img src="{{$photo}}" />
                                    </li>
                                    @endforeach
                               </ul>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="product__details__text">
                            <h4>{{$product['title']}}</h4>
                            <input type="hidden" value="{{$product['slug']}}" id="slug"></h4>
                                {{Helper::rateProduct($product['slug'])}}
                            
                            @if (isset($product['old_price']))
                                <input type="hidden" name="" id="price" value="{{$product['price']}}">
                                <h3> {{number_format($product['price'])}} <span>{{number_format($product['old_price'])}}</span></h3>
                            @else
                                <input type="hidden" name="" id="price" value="{{$product['price']}}">
                                <h3> {{number_format($product['price'])}}</h3>

                            @endif
                            <input type="hidden"  name="" id="input-detail" value="{{$product['detail']}}">
                            <input type="hidden"  name="" id="input-description" value="{{$product['description']}}">
                            {{--  <? echo htmlspecialchars( $contentFromDB ); ?>  --}}
                            {{-- {{htmlspecialchars($product['detail'])}} --}}
                            <div class="product__details__option">
                                @if ($product['size']!=null)
                                    <div class="product__details__option__size">
                                        @php 
                                            $sizes=explode(',',$product['size']);
                                        @endphp
                                        <span>Kích thước:</span>
                                        @foreach ($sizes as  $size)
                                            <label class="size"  data-value="{{$size}}" for="{{$size}}">{{$size}}
                                                <input type="radio" id="{{$size}}" value="{{$size}}">
                                            </label>
                                        @endforeach
                                    </div>
                                    <input type="hidden" name="" id="size-status" value="1">
                                @else
                                    <input type="hidden" name="" id="size-status" value="0">

                                @endif
                                @if ($product['color']!=null)
                                    <div class="product__details__option__color">
                                        <span>Màu sắc:</span>
                                        <label class="c-1" for="sp-1" style="background: {{$product['color']['name']}}">
                                            <input type="radio" id="sp-1">
                                        </label>
                                    </div>
                                @endif

                            </div>
                            <div class="product__details__cart__option">
                                <button class="btn-addToCart" onclick="addToCart()">
                                    <span>Thêm giỏ hàng</span>
                                    <div class="cart">
                                        <svg viewBox="0 0 36 26">
                                            <polyline points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"></polyline>
                                            <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__details__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-5"
                                    role="tab">Mô tả</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">
                                    Đánh giá</a>
                                </li>
                               
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                    <div class="product__details__tab__content" id="detail">

                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-6" role="tabpanel">
                                    <div class="product__details__tab__content">
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Details Section End -->

    <!-- Related Section Begin -->
    <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Sản phẩm liên quan</h3>
                </div>
            </div>
            <div class="row">
                {{Helper::productRelated($product['cat_id'])}}
            </div>
        </div>
    </section>
    <!-- Related Section End -->

    <!-- Footer Section Begin -->
    @endsection
    @push('scripts')
        <script>
            getTextCkediter();
            function getTextCkediter(){
                var description=$("#input-description").val();
                var detail=$("#input-detail").val();
                console.log($("<div/>").html(description).text());
                    $("#description").text($("<div/>").html(description).text());
                    $("#detail").text($("<div/>").html(detail).text());
            }
            function addToCart(){
            var slug=$("#slug").val();
            var size=$('.size.active').children('input[type="radio"]').val();
            var price=$('#price').val();
            if($("#size-status").val()==1){
                if(size==undefined){
                    toastr.error('Vui lòng chọn kích thước');
                    return false;
                }
            }
            else{
                size=null;
            }
            $.ajax({
                type: 'post',
                dataType: 'json',
                url:'{{route("cart.add")}}',
                data: {
                    slug: slug,
                    size: size,
                    price: price,
                },
                success: function(result) {
                    {
                        if(result['type']=='error'){
                            toastr.error(result[0]);
                        }
                        else{
                            toastr.success('Cập nhật thành công');
                            renderCart(result);
                        }
                    
                    }
                },
                error: function(response) {
                    if(response!=undefined){
                        var errors = response.responseJSON.errors;
                        $.each(errors, function (field_name, error) {
                            if (field_name == Object.keys(errors)[0]) {
                                toastr.error(error);
                                
                            }
                        });
                    }
                    
                }
            });
        }
        </script>
        
    @endpush