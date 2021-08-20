    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/jquery.flexslider.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/mixitup.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/frontend.js')}}"></script>
    <script src="{{asset('js/formatNumber.js')}}"></script>
    <script src="{{asset('js/toastr.js')}}"></script>
    <script src="{{asset('js/vnd.js')}}"></script>
    <script src="{{asset('js/cart.js')}}"></script>
    <script src="{{asset('js/selectpicker.js')}}"></script>
    <script src="{{asset('js/address.js')}}"></script>
    <script>
        function showError(errors) {
            $.each(errors, function (field_name, error) {
                if (field_name == Object.keys(errors)[0]) {
                    toastr.error(error);
                    $("#" + field_name).addClass("border-error");
                    setTimeout(function () {
                        $("#" + field_name ).removeClass("border-error");
                    }, 5000);
                }
            });
        }
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        function converValueNumber(e){
          return $(e).val().replace(/\,/g, '');
        }
        function converTextNumber(e){
          return $(e).text().replace(/\,/g, '');
        }
        function  detail(e) {
            slug=$(e).attr('data-slug');
            href="{{route('product.detail', '')}}"+"/"+slug;
            window.location.href=href;
        }
        var itemCart = [];
        function renderCart(result) {
            if(result==false){
                $(".total-count").text(0);
                $(".shopping-cart-total .main-color-text").text(0);
                var content ='<tr><td class="text-center">Giỏ hàng rỗng .' +
                '<a href="productGrid()" style="color:blue;">Continue shopping</a>'+
                                    '</td></tr>';
                $("#cart_item_list").html(content);
            }
            else{
                var products = result.products;
                var sub_price = result.sub_price;
                var total_price = result.total_price;
                var count = result.count;
                $(".total-count").text(count);
                $(".badge-cart-icon").text(count);
                $(".shopping-cart-total .main-color-text").text(parseInt(result.total_price).toLocaleString() + "vnd");
                var content = " ";
                for (var item in products) {

                    var product = products[item];
                    object = {
                        'name': product['productInfo']['name'],
                        'code': product['productInfo']['code'],
                        'quantity': product['quantity'],
                    };
                    itemCart.push(object);
                    var photo = product['productInfo']['photo'].split(',');
                    content += '<li class="clearfix">'+
                                    '<img src="'+photo[0]+'" alt="'+photo[0]+'" />'+
                                    '<span class="item-name"><a href="#" onclick="detail(this); return false;" data-slug='+product['slug']+'>'+product['productInfo']['title']+'</a></span>'+
                                    '<span class="item-price">'+convertNumber(product['price'])+'vnd</span>'+
                                    '<span class="item-quantity">Số lượng: '+product['quantity']+'</span>'+
                                '</li>';

                };
                
                $(".shopping-cart-items").html(content);
                var content = "";
                for (var item in products) {
                    var product = products[item];
                    var photo = product['productInfo']['photo'].split(',');
                    content+='<tr><td class="product__cart__item">'+
                                '<div class="product__cart__item__pic">'+
                                    '<img src="' + photo[0] + '" alt="' + photo[0] + '">'+
                                '</div>'+
                                '<div class="product__cart__item__text">'+
                                    '<h6><a href="#" onclick="detail(this); return false;" data-slug='+product['slug']+' >' + product["productInfo"]["title"] + '</a></h6>'+
                                    '<h5>'+convertNumber(product['product_price'])+' vnd</h5>'+
                                '</div>'+
                                '</td>'+
                                '<td class="quantity__item">'+
                                    '<div class="quantity">'+
                                        '<div class="pro-qty-2">'+
                                            '<span class="fa fa-minus dec qtybtn" onclick="minusQuantity('+product['id']+')"></span>'+
                                            '<input class="quantity_cart" type="text" id="quantity_'+product['id']+'" value="'+product['quantity']+'">'+
                                            '<span class="fa fa-plus dec qtybtn" onclick="plusQuantity('+product['id']+')"></span>'+
                                        '</div>'+
                                    '</div>'+
                                '</td>'+
                                '<td class="cart__price">'+convertNumber(product['price'])+'</td>'+
                                '<td class="cart__close"><i class="fa fa-close"></i></td>';
                    
                }
                $("#cart_item_list").html(content);
            }
            cartPrice(result);
           
        }
        function plusQuantity(id) {
            var number = $("#quantity_" + id).val();
            if (number < 7) {
                number++;
                $('#quantity_' + id).attr("value", parseInt(number));
                updateCart(id);
            }
        }

        function minusQuantity(id) {
            var number = $("#quantity_" + id).val();
            if (number > 1) {
                number--;
                $('#quantity_' + id).attr("value", parseInt(number));
                updateCart(id);
            }
        }
        $(".quantity_cart").on('change keypress', function() {
            var id = $(this).attr('data-id');
            var number = parseInt($(this).val());
            if (!Number.isInteger(number) || number < 1) {
                $(this).val(parseInt(number));
            }
            $(this).val(parseInt(number));
        });


        function updateCart(id) {
            var quantity = $('#quantity_' + id).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'post',
                dataType: 'json',
                url: '{{route("cart.update")}}',
                data: {
                    id: id,
                    quantity: quantity
                },
                success: function(result) {
                    {
                        toastr.success('Cập nhật thành công');
                        renderCart(result);
                        
                    }
                }
            });
        }
        function deleteCart(e) {
            var slug = $(e).data('slug');
            $.ajax({
                type: 'post',
                dataType: 'json',
                url: "{{route('cart.delete')}}",
                data: {
                    slug: slug,
                },
                success: function(result) {
                    {
                        toastr.success('Cập nhật thành công');
                        renderCart(result);
                    }
                }
            });
        }
        function checkout(){
            window.location.href="{{route('checkout.index')}}";

        }
        function getAllProfile(){
            $(".btn-new-address").removeClass("d-none");
            $(".btn-update-address").removeClass("d-none");
            $.ajax({
                type: 'get',
                dataType: 'json',
                url: "{{route('checkout.getAllProfile')}}",
                
                success: function(result) {
                    {
                        content="";
                        console.log(result);
                        for(var profile of result){
                            var address=formatAddress(profile);
                            var checked=(profile['default']==1)?'checked':' ';
                            content+='<li class="list-group-item ">'+
                                        '<label class="radio">';
                                        if(profile['default']==1){
                                            content+='<input type="radio" name="default_profile" checked value="'+profile['id']+'" >';
                                        }else{
                                            content+='<input type="radio" name="default_profile" value="'+profile['id']+'" >';
                                        }
                                        content+='<span class="d-flex">'+
                                            '<h5 class="font-weight-bold m-r-10">'+
                                                 profile['name']+", "+profile['phone']+
                                            '</h5>'+
                                            '<h5>'+
                                                address+
                                            '</h5>'+    
                                        '</span>'+
                                        '</label>'+
                                    '</li>';
                        }
                        content+='<li class="list-group-item d-flex justify-content-start">'+
                           '<button  onclick="getDefaultProfile()" type="button" class="btn btn-danger m-r-20" data-dismiss="modal"><i class="fas fa-undo"></i> &ensp;H?y</button>'+
                            '<button onclick="updateDefaultProfile('+profile['user_id']+')" type="button" class="btn btn-primary"><i class="fas fa-save"></i> &ensp;C?p nh?t</button>'+
                        '</li>';

                        $(".list-profiles").html(content);
                    }
                }
            });
        }
        function storeProfile(){
        var name=$("#name").val();
        var phone=$("#phone").val();
        var address=$("#address").val();
        var province=$("#province-select option:selected").val()==''?'':$("#province-select option:selected").val()+","+$("#province-select option:selected").text();
        var district=$("#district-select option:selected").val()==''?'':$("#district-select option:selected").val()+","+$("#district-select option:selected").text();
        var ward=$("#ward-select option:selected").val()==''?'':$("#ward-select option:selected").val()+","+$("#ward-select option:selected").text();
        var isDefault =$("#default_profile").is(":checked")?1:0;
        var type =$("input[name=type_profiles]").val();
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: '{{route("user.profile.store")}}',
            data: {
                name:name,
                phone:phone,
                province:province,
                district:district,
                ward:ward,
                address:address,
                isDefault:isDefault,
                type:type,
            },
            success: function(result) {
                {
                    toastr.success('Cập nhật thành công');
                    $("#modalUpdateProfile").modal('hide');
                    getDefaultProfile();
                }
            },
            error: function(response) {
              var errors = response.responseJSON.errors;
                    showError(errors);
            }
        });
    }
   
    function updateDefaultProfile(user_id){
        var profile_id=$("input[name=default_profile]:checked").val();
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: '{{route("user.profile.updateDefault")}}',
            data: {
                profile_id:profile_id,
                user_id:user_id,
              
            },
            success: function(result) {
                {
                    toastr.success('Cập nhật thành công');
                    getDefaultProfile();

                }
            },
            error: function(response) {
              var errors = response.responseJSON.errors;
                    showError(errors);
            }
        });
    }
    function cartPrice(cart){
                $("#sub_price").text(convertNumber(cart['sub_price'])+" vnd");
                $("#discount").text(convertNumber(cart['discount'])+" vnd");
                $("#total_price").text(convertNumber(cart['total_price'])+" vnd");
                $("#fee_ship").text(convertNumber(cart['fee_ship'])+" vnd");
                $("#nameMoney").text(convertVnd(cart['total_price']));
            }
            function checkout(){
            window.location.href="{{route('checkout.index')}}";

        }
    </script>
    @stack('scripts')


