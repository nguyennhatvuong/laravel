@section('title', 'Tài khoản')
@extends('layouts.admin.master')
@section('main-content')
<!-- DataTales Example -->
<div class="row">
  <div class="col">
    <div class="card">
       <div class="card-header">
            <div class="d-flex justify-content-between">
                <h5 class="m-0 font-weight-bold  float-left">Thêm sản phẩm </h5>
                <div class="text-center">
                    <a onclick="store(); return false;" href="#"  id="btn-save" class="  mr-2 btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Lưu"><i class="fas fa-save"></i>&ensp;Lưu</a>
                    <a  href="{{route('admin.product.index')}}"   class=" mr-2 btn btn-success btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Quay lại "><i class="fas fa-undo"></i>&ensp;Quay lại</a>
                 </div>
            </div>
           
       </div>
       <div class="card-body">
          <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="regular1" class="control-label font-weight-bold">Tên sản phẩm<span class="color-red"> *</span></label>
                            <input type="text" onkeyup="ChangeToSlug();" id="title" name="title" value="{{ old('title') }}" autofocus required placeholder="Tên sản phẩm"  class="form-control" />
                            <input type="text"  id="slug" name="slug"  value="{{ old('slug') }}" required placeholder="Tên sản phẩm" value="" name="slug" class="form-control" />
                         </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                              <label class="font-weight-bold" for="inputEmail4">Giá vốn<span class="color-red"> *</span></label>
                              <input type="text" onkeydown="formatNumber(this)" class="form-control text-align-right" id="cost_price" placeholder="Giá vốn">
                            </div>
                            <div class="form-group col-md-4">
                              <label class="font-weight-bold" for="inputPassword4">Giá website<span class="color-red"> *</span></label>
                              <input type="text" onkeydown="formatNumber(this)" class="form-control text-align-right" id="on_price" placeholder="Giá website">
                            </div>
                            <div class="form-group col-md-4">
                              <label class="font-weight-bold" for="inputPassword4">Giá cửa hàng<span class="color-red"> *</span></label>
                              <input type="text" onkeydown="formatNumber(this)" class="form-control text-align-right" id="off_price" placeholder="Giá cửa hàng">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <label class="font-weight-bold" for="inputEmail4">Loại sản phẩm</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input cursor-poiter" onclick="checkNone('type')" type="checkbox" value="" id="type-none">
                                        <label class="form-check-label cursor-poiter" for="type-none">
                                          Trống
                                        </label>
                                      </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" id="form-type-select">
                                       
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group col-md-6">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <label class="font-weight-bold" for="inputEmail4">Kích cỡ<span class="color-red"> *</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input cursor-poiter" onclick="checkNone('size')" type="checkbox" value="" id="size-none">
                                        <label class="form-check-label cursor-poiter" for="size-none">
                                          Trống
                                        </label>
                                      </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-12" id="form-size-select">
                                       
                                    </div>
                                 </div>
                              </div>
                            
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold" for="inputEmail4">Thương hiệu</label>
                                <div class="row">
                                    <div class="col-12" id="form-brand-select">
                                       
                                    </div>
                                    
                                 </div>
                              </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold" for="inputEmail4">Tình trạng</label>
                                <div class="row">
                                    <div class="col-12" id="form-condition-select">
                                        
                                    </div>
                                   
                                 </div>
                              </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold" for="inputEmail4">Danh mục sản phẩm<span class="color-red"> *</span>
                                </label>
                                <div class="row">
                                    <div class="col-12" id="form-category-select">
                                       
                                    </div>
                                   
                                 </div>
                              </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold" for="inputEmail4">Danh mục phụ</label>
                                <div class="row">
                                    <div class="col-12" id="form-child-category-select">
                                       
                                    </div>
                                    
                                 </div>
                              </div>
                          </div>
                    </div>
                </div>
                
               
            </div>
            <div class="col-6">
                   
              <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button type="button" class="btn " data-toggle="collapse" data-target="#collapseOne"><i class="fa fa-angle-right"></i> Hình ảnh</button>									
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                          <div class="form-group">
                              <button type="button" class="btn btn-primary btn-sm" id="btn-image" data-input="thumbnail" data-preview="holder"><i class="fas fa-upload"></i>&ensp;Chọn file</button>
                          </div>
                          <div class="form-group d-flex" id="gallery-create">
                          </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button type="button" class="btn  collapsed" data-toggle="collapse" data-target="#collapseTwo"><i class="fa fa-angle-right"></i>Tóm lược</button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <textarea id="summary" name="summary" class="form-control">{!! old('summary') !!}</textarea>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button type="button" class="btn  collapsed" data-toggle="collapse" data-target="#collapseThree"><i class="fa fa-angle-right"></i> Mô tả</button>                     
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <textarea id="description" name="description" class="form-control">{!! old('description') !!}</textarea>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button type="button" class="btn  collapsed" data-toggle="collapse" data-target="#collapseFour"><i class="fa fa-angle-right"></i> Định mức tồn kho</button>                     
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="collapseFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputEmail4">Định mức tồn nhỏ nhất</label>
                                  <input onkeydown="formatNumber(this)" value="1"  type="text" class="form-control text-align-right" id="min">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputPassword4">Định mức tồn lớn nhất</label>
                                  <input onkeydown="formatNumber(this)" value="999" type="text" class="form-control text-align-right" id="max" >
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
          </div>
       </div>
    </div>
</div>
{{-- @extends('layouts.unit.index') --}}




@endsection
@push('styles')
    <link rel="stylesheet" href="{{asset('css/gallery.css')}}">
@endpush
@push('scripts')

    <script src="{{ asset('js/gallery.js') }}"></script>
    <script src="{{ asset('js/slug.js') }}"></script>
    {{--  <script src="/vendor/laravel-filemanager/js/lfm.js"></script>  --}}
    <script>
         $("figure").mouseleave(function () {
                $(this).removeClass("hover");
            }
        );

        CKEDITOR.replace('summary', optionsCkeditor);
        CKEDITOR.replace('description', optionsCkeditor);
        // $('textarea#summary').ckeditor(optionsCkeditor);
        $(document).ready(function(){
            // Add down arrow icon for collapse element which is open by default
            $(".collapse.show").each(function(){
                $(this).prev(".card-header").find(".fa").addClass("fa-angle-down").removeClass("fa-angle-right");
            });
            
            // Toggle right and down arrow icon on show hide of collapse element
            $(".collapse").on('show.bs.collapse', function(){
                $(this).prev(".card-header").find(".fa").removeClass("fa-angle-right").addClass("fa-angle-down");
            }).on('hide.bs.collapse', function(){
                $(this).prev(".card-header").find(".fa").removeClass("fa-angle-down").addClass("fa-angle-right");
            });
            $('#btn-image').filemanager('image');

        });
        var arr_gallery=[];
        function gallery(file_path){
            arr_gallery.push(file_path);
            getGallery(arr_gallery);
          
        }
        function getGallery(arr_gallery){
            var content="";
            for(var item of arr_gallery){
                content+='<figure class="snip0025">'+
                    '<img src="'+item+'" alt="sample32"/>'+
                    '<div>'+
                        '<a data-item='+item+' class="cursor-poiter"  onclick="removeImage(this);return false;"><i class="ion-ios-trash-outline"></i></a>'+
                        '<div class="curl"></div>'+

                    '</div>'+	
                '</figure>';
              
            };
            $("#gallery-create").html(content);
        }
        function removeImage(e){
            var item=$(e).attr('data-item');
            arr_gallery = arr_gallery.filter(function(k) {
                return k != item
            });
            getGallery(arr_gallery);
            // console.log(arr_gallery);
        }
        getProperties();
        getBrand();
        getCategory();
        function getProperties(){
            $.ajax({
                type: 'post',
                dataType: 'json',
                url: '{{ route("admin.product.getProperties") }}',
                success: function(result) {
                    getTypeProduct(result);
                    getCondition(result);
                    getSize(result);
                    
                },
                error: function(response) {
                    var errors = response.responseJSON.errors;
                    showError(errors);
                }
            });
        
        }
        function getTypeProduct(result){
            content="";
            content+='<select id="type-select" class="selectpicker form-control" title="Chọn loại sản phẩm" data-live-search="true" data-width="100%" placeholder="Chọn loại sản phẩm" data-size="5" data-actions-box="true">';
            for(var item of result['types']){
                content+='<option  value="'+item['id']+'">'+item['title']+'</option>';
            }
            content+='</select>';
            $("#form-type-select").html(content);
        }
        function getSize(result){
            content="";
            content+='<select id="size-select" data-actions-box="true" multiple  class="selectpicker    form-control" title="Chọn kích cỡ" data-live-search="true" data-width="100%" placeholder="Chọn loại sản phẩm" data-size="5" >';
            for(var item of result['sizes']){
                
                content+='<option  value="'+item+'">'+item+'</option>';
            }
            content+='</select>';
            $("#form-size-select").html(content);

                    // $("#size-select").selectpicker('refresh');
        }

        function getCondition(result){
            content="";
            content+='<select id="condition-select" data-style="btn btn-light"  class="selectpicker form-control" title="Chọn tình trạng" data-live-search="true" data-width="100%" placeholder="Chọn loại sản phẩm" data-size="5" data-actions-box="true">';
            for(var item of result['conditions']){
                var name;
                switch(item) {
                    case 'default':
                        name="Mặc định";
                        break;
                    case 'hot':
                        name="Hot";
                        break;
                    case 'new':
                        name="New";
                        break;
                    default:
                        name="Sale";
                }
                content+='<option  value="'+item+'">'+name+'</option>';
            }
            content+='</select>';
            $("#form-condition-select").html(content);
            $("#condition-select").selectpicker('val','0');
        }
        checkNone('size');
        checkNone('type');
        function checkNone(item){
            if($("#"+item+"-none").is(':checked')){
                $("#form-"+item+"-select").addClass("d-none");
                $("#"+item+"-select").selectpicker('refresh');
                
            }
            else{
                $("#form-"+item+"-select").removeClass("d-none");
                if(item=="type" ){
                    var type="";
                }
                else{
                    var size="";

                }
            }
        }
        
        function store(){
            var type =$("#type-none").is(':checked') ? 'null' :$("#type-select").val();
            var size =$("#size-none").is(':checked') ? 'null' :$("#size-select").val().toString();
            var child_category =(!$("#child-category-select").val()) ? 'null' :$("#child-category-select").val();
            $.ajax({
                type: 'post',
                dataType: 'json',
                url: '{{ route("admin.product.store") }}',
                data:{
                    slug:$("#slug").val(),
                    title:$("#title").val(),
                    cost_price:converValueNumber("#cost_price"),
                    on_price:converValueNumber("#on_price"),
                    off_price:converValueNumber("#off_price"),
                    category:$("#category-select").val(),
                    child_category:child_category,
                    type:type,
                    size:size,
                    brand:$("#brand-select").val(),
                    condition:$("#condition-select").val(),
                    photo:arr_gallery.toString(),
                    summary:CKEDITOR.instances['summary'].getData(),
                    description:CKEDITOR.instances['description'].getData(),
                    min:converValueNumber("#min"),
                    max:converValueNumber("#max"),
                },
                success: function(result) {
                    toastr.success('Cập nhật thành công');
                    window.location.href = "{{ route('admin.product.index')}}";


                },
                error: function(response) {
                    var errors = response.responseJSON.errors;
                    showError(errors);
                }
            });
        }
      
    </script>
   
@endpush