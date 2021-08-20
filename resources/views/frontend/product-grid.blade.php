
    <!-- Breadcrumb Section End -->
    @extends('layouts.frontend.master')
    @section('title','True Blues')
    @section('main-content')
    <!-- Shop Section Begin -->
    <section class="shop spad" style="padding-top: 160px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="#">
                                <input type="text" id="search" class="input w-100" onkeyup="searchProduct()" placeholder="Tìm kiếm...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading" id="headingOne">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseOne">Loại sản phẩm</a>
                                    </div>
                                    <div id="collapseOne" class="collapse transition-collapse show" aria-labelledby="headinOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__option">
                                                {{Helper::getTypeProduct()}}
                                            </div>
                                            <div class="shop__sidebar__cancel" id="cancel-type">
                                                <button onclick="cancelOption('type')" class="btn btn-primary"  id="btn-cancel-color">Bỏ chọn</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading" id="headingTwo">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo">Giá</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse transition-collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__option">
                                                {{Helper::getPriceRange()}}
                                            </div>
                                            <div class="shop__sidebar__cancel" id="cancel-price-range">
                                                <button onclick="cancelOption('price-range')" class="btn btn-primary"  id="btn-cancel-color">Bỏ chọn</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading" id="headinThree">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseThree">Màu sắc</a>
                                    </div>
                                    <div id="collapseThree" class="collapse transition-collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__color">
                                                {{Helper::getColor()}}
                                            </div>
                                            <div class="shop__sidebar__cancel" id="cancel-color">
                                                <button onclick="cancelOption('color')" class="btn btn-primary"  id="btn-cancel-color">Bỏ chọn</button>

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
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    {{-- <p>Showing 1–12 of 126 results</p> --}}
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                    <p>Sắp xếp theo:</p>
                                    <select class="price_sort" onchange="chossePriceSort(this)">
                                        <option value="desc">Giá cao đến thấp</option>
                                        <option value="asc">Giá thấp đến cao</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="product-grid" >
                        @isset($cat)
                            <input type="button" id="isCategory" value="1">
                            <input type="button" id="cat_id" value="{{$cat->id}}">
                        @endisset
                        
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    @endsection
@push('scripts')
    <script>
        var arrFilter=[
            // {'type':'frontend'},
            { "value": "none","type": 'type'},
            { "value": "none","type": 'color'},
            { "value": "none","type": 'search'},
            { "value": "none","type": 'category'},
            { "value": "none","type": 'price-sort'},
            { "value": "none","type": 'price-range'},
        ]
        if($("#isCategory").val()==1){
            value=$("#cat_id").val();
            type="category";
            replace(type,value);
        }
        searchProduct();
        chossePriceSort();
        function searchProduct() {
            var value=$("#search").val()==""?'none':$("#search").val();
            type="search";
            replace(type,value);
        }
        function  chossePriceSort() {
            var value=$('.price_sort :selected').val();
            type="price-sort";
            replace(type,value);
        }
        function chooseOption(e) {
            var value=$(e).attr('data-id');
            var type=$(e).attr('data-type');
            if(type=='color'){
                $(".shop__sidebar__color label").removeClass('active');
            }
            else{
                $(".shop__sidebar__option label").removeClass('active');
            }
            console.log(type);
            $('#cancel-'+type).addClass('active-opacity');
            $(e).addClass('active');
            
            replace(type,value);
        }
        function cancelOption(type){
            $('#cancel-'+type).removeClass('active-opacity');
            if(type=='color'){
                $(".shop__sidebar__color label").removeClass('active');
            }
            else{
                $(".shop__sidebar__option label").removeClass('active');
            }
            value="none";
            replace(type,value);
        }
        function replace(type,value) {
            arrFilter.forEach((element, index) => {
                if(element.type === type) {
                    element.value = value;
                }
            });
            filterProduct(arrFilter);
        }
        function filterProduct(arrFilter) {
            $.ajax({
                dataType: 'json',
                type: 'post',   
                dataType: "json",
                data: {'arrFilter': arrFilter},
                url: '{{route("product.filter")}}',
                success: function(result) {
                    gridProduct(result);
                },

                error: function(response) {
                    var errors = response.responseJSON.errors;
                    showError(errors);
                }
            });
        }
        function gridProduct(products){
            
            if(products.length==0){
                content='<h3>Không tìm thấy sản phẩm</h3>';
            }
            else{
                content="";
                for(var product of products){
                    var photo=product['photo'].split(',');
                    content+=`<div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg"  style="background-image:url(`+photo[0]+`)">
                                <span class="label label-condition">`+product['condition']+`</span>
                            
                            </div>
                        <div class="product__item__text">
                            <h6>`+product["title"]+`</h6>
                            <a href="#" onclick="detail(this); return false;" data-slug=`+product['slug']+` class="add-cart">Chi tiết</a>`;
                                    if(product['rate']!=null){
                                        content+=`<div class="star-wrapper">`;
                                        for(var i=1; i<=5; i++){
                                            if(i<=product['rate']){
                                                content+=`<i id="star-`+i+`" class="cursor-poiter fas fa-star fa-star-active"></i>`;
                                            }
                                            else{
                                                content+=`<i id="star-`+i+`" class="cursor-poiter far fa-star "></i>`;
                                            }
                                        }
                                        content+=`</div>`;
                                    }
                                    content+=`<div class="d-inline-flex">`;
                                        content+=`<h5 class="m-r-30">`+convertNumber(product['price'])+`</h5>`;
                                        if(product['old_price']!=undefined){
                                            content+=`<h6 class="text-line-through">`+convertNumber(product['old_price'])+`</h6>`;
                                        }
                                        
                                   
                                    content+=`</div>
                                </div>
                            </div>
                        </div>`;
                    }
                }
                $("#product-grid").html(content);
            }
    </script>
@endpush    