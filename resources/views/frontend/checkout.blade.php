
    <!-- Breadcrumb Section End -->
    @extends('layouts.frontend.master')
    @section('title','True Blues')
    @section('main-content')
    <!-- Checkout Section Begin -->
    <section class="checkout spad-top">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="line"></div>
              <div class="card">
                  <div class="card-header">
                      <div class="row">
                          <div class="col-6" style="font-size: 20px; color:#001489" >
                              <i class="fas fa-map-marker-alt"></i> Địa chỉ nhận hàng
                          </div>
                          <div class="col-6 ">
                              <button class=" d-none btn btn-primary float-right btn-new-address" onclick="showModalUpdateProfile()"><i class="fas fa-plus"></i> Thêm địa chỉ mới</button>
                              <a href="#" class="d-none btn btn-primary float-right m-r-20 btn-update-address" >Thiết lập địa chỉ</a>
                          </div>
                      </div>
                  </div>
                  <div class="card-body">
                    <ul class="list-group list-group-flush list-profiles">
                      @if ($profile==null)
                              <li class="list-group-item">Vui lòng thiết lập địa chỉ <i onclick="getAllProfile()" class="m-l-10 fa-xs fas fa-pen cursor-poiter "></i></li>
                      @else
                
                          
                          
                      @endif
                     
                    </ul>
                  </div>
                  
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 col-md-8">
              
              <div class="card">
                  <div class="card-body shopping__cart__table">
                    <table>
                      <thead>
                          <tr>
                              <th>Sản phẩm</th>
                              <th>Số lượng</th>
                              <th>Thành tiền</th>
                          </tr>
                      </thead>
                      <tbody id="cart_item_list">
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
                              <td class="cart__price">{{number_format($product['quantity'])}}</td>
  
                              <td class="cart__price">{{number_format($product['price'])}}</td>
                          </tr>
                          @endforeach
        
                          
                          
                      </tbody>
                  </table>
                  </div>
              </div>
              <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6" style="font-size: 20px; color:#001489" >
                            <i class="fas fa-shipping-fast"></i> Vận chuyển
                        </div>
                        <div class="col-6 ">
                          <button class=" d-none btn btn-primary float-right btn-update-ship" onclick="updateShip()"><i class="fas fa-plus"></i> Thay đổi</button>
                      </div>
                      
                    </div>
                </div>
                <div class="card-body  shopping__cart__table p-t-0" id="card_ship">
                  

                
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6" style="font-size: 20px; color:#001489" >
                            <i class="fas fa-tags"></i> Phương thức thanh toán
                        </div>
                        
                      
                    </div>
                </div>
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    {{Helper::getPaymentMethod()}}
                    </ul>
                </div>
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
                        <td class="float-right font-size-18" id="sub_price"></td>
                      </tr>
                      <tr>
                        <td class="cart__price">Giảm giá:</td>
                        <td class="float-right font-size-18" id="discount"></td>
                      </tr>
                      <tr>
                        <td class="cart__price">Phí ship:</td>
                        <td class="float-right font-size-18" id="fee_ship"></td>
                      </tr>
                      <tr>
                        <td class="cart__price">Tổng cộng:</td>
                        <td class="float-right font-size-18" id="total_price"></td>
                      </tr>
                      <tr>
                          <td class="cart__price"  colspan="2" id="nameMoney"></td>
                      </tr>
                      <tr>
                          <td  colspan="2"  > 
                            <button onclick="order()" class="float-right btn btn-primary"><i class="fab fa-amazon-pay"></i> &ensp;Đặt hàng</button>
                          </td>
                      </tr>
                    </tbody>
                  </table>
                  {{--  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Subtotal: <span>$ 169.50</span></li>
                    <li class="list-group-item">Subtotal: <span>$ 169.50</span></li>
                </ul>  --}}
                </div>
              </div>
          </div>
          </div>
            
        </div>
    </section>
    <div class="modal fade" id="modalNewAddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document" style="max-width:60%">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Địa chỉ mới</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="form-group row">
                  <div class="col">
                    <input type="text" class="form-control" id="name" placeholder="Họ và tên">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" id="phone" placeholder="Số điện thoại">
                  </div>
                </div>
              <div class="form-group row">
                  <div class="col-4" id="province-form">
                  </div>
                  <div class="col-4" id="district-form">

                  </div>
                  <div class="col-4" id="ward-form">

                  </div>
              </div>  
              <div class="form-group ">
                  <input type="text" class="form-control" id="address" placeholder="Địa chỉ cụ thể">

              </div>
          </div>
          <div class="modal-footer d-flex justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> &ensp;Hủy</button>
  
            <button onclick="storeProfile()" type="button" class="btn btn-primary"><i class="fas fa-save"></i> &ensp;Lưu</button>
        </div>
        </div>
      </div>
    </div>
    @extends('layouts.modal.profile')

    <!-- Checkout Section End -->

    <!-- Footer Section Begin -->
    
    <!-- Footer Section End -->

    <!-- Search Begin -->
    
    <!-- Search End -->

    <!-- Js Plugins -->
  @endsection
    @push('scripts')
        <script>
            getDefaultProfile();
            function showModalUpdateProfile(){
                $("#modalUpdateProfile").modal('show');
                getProvince();
            }
            function getDefaultProfile(){
              $.ajax({
                type: 'get',
                dataType: 'json',
                url: '{{route("user.profile.getDefault")}}',
                success: function(result) {
                    {
                        $(".btn-new-address").addClass("d-none");
                        $(".btn-update-address").addClass("d-none");
                        var address = formatAddress(result);

                        content = '<li class="list-group-item d-flex">' +
                                    '<input type="hidden" id="profile_id" value="'+result['id']+'">'+
                                    '<h5 class="font-weight-bold m-r-10">' +
                                    result['name'] + ", " + result['phone'] +
                                    '</h5>' +
                                    '<h5>' +
                                    address +
                                    '</h5>' +
                                    '<i onclick="getAllProfile()" class="m-l-10 fa-xs fas fa-pen cursor-poiter"></i></li>';
                        $(".list-profiles").html(content);
                        shipping(result);
                        // toastr.success('Cập nhật thành công');
                    }
                },
                error: function(response) {
                    var errors = response.responseJSON.errors;
                    showError(errors);
                }
              });
            }
            arr_service=[];
            obj_service={
              'id':'',
              'ship':'',
              'time':'',
              'type':'',
            }
            function  shipping(result) {
              profile_id=result['id'];
              $.ajax({
                type: 'post',
                dataType: 'json',
                data:{
                  id:profile_id
                },
                url: '{{route("cart.shipping")}}',
                success: function(result) {
                    {
                      if(result.length>1){
                        $(".btn-update-ship").removeClass('d-none');
                        arr_service=result;
                      }
                      obj_service['id']=result[0]['id'];
                      obj_service['ship']=result[0]['ship']
                      obj_service['type']=result[0]['type']
                      obj_service['time']=result[0]['time']
                      getService(obj_service);
                      feeShip(result[0]['ship']);

                    }
                },
                error: function(response) {
                    var errors = response.responseJSON.errors;
                    showError(errors);
                }
              });
            }
            function feeShip(fee) {
            $.ajax({
              type: 'post',
              dataType: 'json',
              data:{
                fee:fee
              },
              url: '{{route("cart.feeShip")}}',
              success: function(result) {
                cartPrice(result);
              }
            });
            }
            function cartPrice(cart){
                $("#sub_price").text(convertNumber(cart['sub_price'])+" vnđ");
                $("#discount").text(convertNumber(cart['discount'])+" vnđ");
                $("#total_price").text(convertNumber(cart['total_price'])+" vnđ");
                $("#fee_ship").text(convertNumber(cart['fee_ship'])+" vnđ");
                $("#nameMoney").text(convertVnd(cart['total_price']));
            }
            function getService(data) {
              content="";
                        content+= `<table><tbody ><tr><td><input class="input w-90" placeholder="Lời nhắn cho shipper">   </td>
                                    <td class="product__cart__item">
                                      <div class="product__cart__item__text" style="padding-top: 0">
                                        <h5>`+data['type']+`</h5>

                                          <h6>Thời gian dự kiến: `+data['time']+`</h6>
                                        </div>
                                    </td>
                                    <td class="cart__price float-right">`+convertNumber(data['ship'])+`</td></tr></tbody></table>`;
                        $("#card_ship").html(content);
            }
            function updateShip() {
              content="";
                content+='<ul class="list-group list-group-flush">';
              for(var item of arr_service){
                
                content+='<li class="list-group-item ">'+
                                        '<label class="radio">';
                                        if(item['id']==obj_service['id']){
                                            content+='<input type="radio" name="check_service" checked value="'+item['id']+'" >';
                                        }else{
                                            content+='<input type="radio" name="check_service" value="'+item['id']+'" >';
                                        }
                                        content+='<span class="d-flex">'+
                                            '<h5 class="font-weight-bold m-r-10">'+
                                                 item['type']+", "+convertNumber(item['ship'])+
                                            '</h5>'+
                                            '<h6>, thời gian dự kiến: '+
                                              item['time']+
                                            '</h6>'+    
                                        '</span>'+
                                        '</label>'+
                                    '</li>';
              }
              content+='<li class="list-group-item d-flex justify-content-start">'+
                            '<button onclick="checkService()" type="button" class="btn btn-primary"><i class="fas fa-save"></i> &ensp;Cập nhật</button>'+
                        '</li>'+
                        '</ul>';
              $("#card_ship").html(content);

            }
            function checkService() {
                val=$("input[name=check_service]:checked").val();
                for (const item of arr_service) {
                  if(val==item['id']){
                      obj_service['id']=item['id'];
                      obj_service['ship']=item['ship']
                      obj_service['type']=item['type']
                      obj_service['time']=item['time']
                  }
                  feeShip(item['ship']);
                  getService(obj_service);

                }
            }
            function order(){
              profile_id=$("#profile_id").val();
              $.ajax({
                type: 'post',
                dataType: 'json',
                url: "{{route('cart.order')}}",
                data: {
                    payment_method_id:$("input[name='payment_method']:checked").val(),
                    profile_id:profile_id,
                    obj_service:obj_service,
                    type:'online'
                },
                success: function(response) {
                    if (response == true) {
                        document.location.href = '/';
                      
                        toastr.success('Đặt hàng thành công');
                    }
                },
                error: function(response) {
                  var errors = response.responseJSON.errors;
                    showError(errors);
                }
            });
            }
            
      </script>
  @endpush
