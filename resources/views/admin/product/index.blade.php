

@section('title', 'Tài khoản')
@extends('layouts.admin.master')
@section('main-content')
<div class="card shadow mb-4 ">
    <div class="card-body">
        <div class="wrapper">
            
            
            <nav id="sidebar-child">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button type="button" class="btn" data-toggle="collapse" data-target="#collapseFilterOne"><i class="fa fa-angle-right"></i>
                                    Lọc theo nhóm 
                                    <button class="btn btn-sm btn-primary" data-type="create" onclick="showModalUpdateCategory()"><i class="fas fa-plus"></i></button>
                                </button>									
                            </h5>
                        </div>
                        <div id="collapseFilterOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="accordion" id="accordionExample1">
                                
                                <aside class="sidebar-card">
                                    <div id="leftside-navigation" class="nano">
                                      <ul class="nano-content" id="sidebar-category">
                                            {{Helper::getSidebarCategory()}}

                                      </ul>
                                    </div>
                                  </aside>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button type="button" class="btn  collapsed" data-toggle="collapse" data-target="#collapseFilterTwo"><i class="fa fa-angle-right"></i>Lọc theo tồn kho</button>
                            </h2>
                        </div>
                        <div id="collapseFilterTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <ul class="list-group list-group-flush ">
                                {{Helper::getQuantityStatus()}}
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </nav>
            <div class="content"style="width:100%">
                <div class="card" >
                    <div class="card-header ">
                        
                    <div class="row">
                        <div class="col-1">
                            <button style="height: 31px; !important" type="button" onclick="toggleFilter()" class="btn btn-sm btn-primary float-left" > <i class="fa fa-filter"></i> </button>
                        </div>
                        <div class="col-11">
                            <h5  id="table-name" style="padding-left: 20px; margin-top: 4px" class=" font-weight-bold">
                                Sản phẩm
                            </h5>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">
                        <table style="color: #333" cellspacing="0" class="table table-bordered" id="table"  width="100%" cellspacing="0">
                            <thead>
                               <tr>
                                <th class="text-center align-middle w-5"></th>
                                <th class="text-center align-middle w-5">STT</th>
                                 <th class="text-center align-middle">Mã sản phẩm</th>
                                 <th class="text-center align-middle">Tên sản phẩm</th>
                                 <th class="text-center align-middle">Hình ảnh</th>

                                 <th class="text-center align-middle">Giá vốn</th>
                                 <th class="text-center align-middle">Giá website</th>
                                 <th class="text-center align-middle">Giá cửa hàng</th>
                                 <th class="text-center align-middle">Tồn kho</th>
                               </tr>
                             </thead>
                              
                         </table>
                  
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

 
  
@endsection
@extends('layouts.brand.index')
@extends('admin.product.modal')
@extends('layouts.category.index')
@push('styles')
    <style>
    

    </style>
    <link rel="stylesheet" href="{{asset('css/gallery.css')}}">
    <link href="{{asset('css/switch.css')}}" rel="stylesheet">
    <link href="{{asset('css/tooltip.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css">
@endpush


    @push('scripts')
    <script src="{{asset('js/gallery.js') }}"></script>
    <script src="{{asset('js/slug.js') }}"></script>
    <script src="{{asset('js/type_product.js') }}"></script>
    <script src="{{asset('js/condition_product.js') }}"></script>
    <script src="{{asset('js/modal-image.js')}}"></script>
    <script src="{{asset('js/toggle-menu.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@1.6.12/dist/js/lightgallery.min.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-pager.js/master/dist/lg-pager.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-autoplay.js/master/dist/lg-autoplay.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-share.js/master/dist/lg-share.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-hash.js/master/dist/lg-hash.js"></script>
    <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
    <script>
//         $(window).ready( function () {
//     $('.desktopCB').attr('disabled', '');
//     $('.phoneD').attr('disabled', '');
//     $('.tabletD').attr('disabled', '');
// });
$("#leftside-navigation .sub-menu > a").click(function(e) {
  $("#leftside-navigation ul ul").slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(),
  e.stopPropagation()
})
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

        });
            $('.btn-image').filemanager('image');

        function showModalUpdateCategory(id){
            $("#is-parent").attr('checked',true);
            if(id){
                $("#type-modal-category").val('update');
                $("#id-modal-category").val('update');
                $.ajax({
                    type: "POST",
                    url: '{{route("admin.category.edit")}}',
                            data: {
                                id: id
                            },
                            success: function(result) {
                                $("#title").val(result['title']);
                                $("#slug").val(result['slug']);
                                if(result['is_parent']==1){
                                    $("#is-parent").attr('checked',true);
                                }
                                else{
                                    $("#is-parent").attr('checked',false);

                                }
                                for(var item of result['photo'].split(',')){
                                    arr_gallery.push(item);
                                }
                                getGallery(arr_gallery);
                                
                            },
                            error: function(response) {
                                
                            },
                        });
            }
            else{
                $("#type-modal-category").val('create');
                // getCategory('create');
            }
            $("#modalUpdateCategory").modal("show");
        }
        // table();
        $('#lfm').filemanager('image');
        $('#lfm-update').filemanager('image');
        var arrFilter=[ 
                {"type": 'category', "value": "none"}, 
                {"type": 'child_category', "value": "none"}, 
                {"type": 'quantity', "value": "none"}, 
            ];
            // table(arrFilter);
        filterQuantity();
        function filterQuantity(){
            var value=($("input[name='filterQuantity']:checked").val()==undefined)?'all':$("input[name='filterQuantity']:checked").val();
            filterTable(value,'quantity'); 

        }
        function  filterTable(value,type) {
            $.each(arrFilter, function(index,item) {
                if(item['type']==type){
                    item['value']=value;
                }
            });
            table(arrFilter);
        }
        function table(arrFilter) {
            var table = $('#table').DataTable();
            table.destroy();
            var table = $('#table').DataTable({
                scrollY: "500px",
                scrollCollapse: true,
                responsive: true,
                processing: true,
                dom: "<'d-flex justify-content-between'<l><'content-table-menu'><f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                language: {
                    processing: '<svg class="spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">' +
                        '<circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>' +
                        '</svg>',

                    paginate: {
                        first: "Đầu tiên",
                        previous: "Trước",
                        next: "Tiếp theo",
                        last: "Cuối cùng"
                    },

                    'select': {
                        'style': 'multi'
                    },
                    emptyTable: "Dữ liệu trống",
                    search: "Tìm kiếm",
                    lengthMenu: "Hiển thị  _MENU_ dòng",
                    info: "Đang hiển thị _START_ đến _END_ của _TOTAL_ dòng",
                    infoEmpty: "Đang hiển thị 0 đến 0 của 0 dòng",
                    infoFiltered: "(được chọn lọc từ _MAX_ dòng )",
                    infoPostFix: "",
                    loadingRecords: "Chargement en cours.banner.banner.",
                    zeroRecords: "Aucun &eacute;l&eacute;ment &agrave; afficher",
                    aria: {
                        sortAscending: ": Message khi đang sắp xếp theo column",
                        sortDescending: ": Message khi đang sắp xếp theo column",
                    }
                },
                info: false,

                buttons: [

                    'copy',
                    'csv',
                    'excel',
                    'pdf',
                    {
                        extend: 'print',
                        text: 'Print all ',
                        exportOptions: {
                            modifier: {
                                selected: null
                            }
                        }
                    }
                ],
                initComplete: function() {
                    var btns = $('.dt-button');
                    btns.addClass('btn btn-primary');
                    btns.removeClass('dt-button');

                },

                ajax: {
                    dataType: 'json',
                    type: 'post',
                    data:{'arrFilter':arrFilter},
                    url: '{{  route("admin.product.filter")}}',
                },

                columns: [
                    {
                        "className":      'details-control',
                        "orderable":      false,
                        "data":           null,
                        "defaultContent": ''
                    },
                    {

                        data: null,
                        defaultContent: '',
                    },

                    {

                        data: 'code',
                        name: 'data.code'
                    },
                    {

                        data: 'title',
                        name: 'data.title'
                    },
                    {

                        data: 'photo',
                        name: 'data.photo',
                        render: function(data, type, row) {
                            var photos=data.split(',');
                            return '<img class="img-responsive" src="'+photos[0]+'" style="width: 80px;cursor: pointer;">';
                        }
                    },  
                    {

                        data: 'cost_price',
                        name: 'data.cost_price',
                        render: $.fn.dataTable.render.number(',', '.')
                    },{

                        data: 'on_price',
                        name: 'data.on_price',
                        render: $.fn.dataTable.render.number(',', '.')
                    },
                    {

                        data: 'off_price',
                        name: 'data.off_price',
                        render: $.fn.dataTable.render.number(',', '.')
                    },
                    {

                        data: 'quantity',
                        name: 'data.quantity',
                        render: $.fn.dataTable.render.number(',', '.')
                    },
                    
                ],
            });

            tableMenu();

            table.on('order.dt search.dt', function() {
                table.column(1, {
                    search: 'applied',
                    order: 'applied'
                }).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1;
                });
            }).draw();
        }
        function detailRow ( data ) {
            var detail = $("<div/>").html(data.detail).text();
            var description = $("<div/>").html(data.description).text();
            var photos=data.photo.split(',');
            var child_category=(data.child_category!=null)?data.child_category.title:"";
            var type=(data.type!=null)?getNameTypeProduct(data.type):"";
            var size=(data.size!=null)?data.size:"";
            content='<div class="tab-container">'+
                '<input type="radio" name="tab" data-id="1" id="tab1" checked="checked">'+
                '<label class="tab-label" for="tab1">Chi tiết</label>'+
                '<input type="radio" data-id="2" name="tab" id="tab2">'+
                '<label class="tab-label" for="tab2">Thẻ kho</label>'+
                
                '<div class="tab-content-wrapper">'+
                  '<div id="tab-content-1" class="tab-content card" >'+
                    '<div class="card-header">'+
                        '<a href="#" data-type="update" onclick="showModalProduct(this); return false;" data-slug='+data.slug+' class="btn btn-primary float-right m-r-10"> <i class="fas fa-pen"></i> Cập nhật</a>'+
                    '</div>'+

           
                    '<div  class="card-body">'+
                    '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
                        '<tr>'+
                            '<td class="font-weight-bold w-12">Mã sản phẩm:</td>'+
                            '<td class="w-21">'+data.code+'</td>'+
                            '<td class="font-weight-bold w-12">Tên sản phẩm:</td>'+
                            '<td class="w-21">'+data.title+'</td>'+
                            '<td class="font-weight-bold w-12">Slug:</td>'+
                            '<td class="w-21">'+data.slug+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td class="font-weight-bold w-12">Giá vốn:</td>'+
                            '<td id="detail-cost-price" class="w-21">'+convertNumber(data.cost_price)+'</td>'+
                            '<td class="font-weight-bold w-12" >Giá online:</td>'+
                            '<td id="detail-on-price" class="w-21">'+convertNumber(data.on_price)+'</td>'+
                            '<td class="font-weight-bold w-12">Giá cửa hàng:</td>'+
                            '<td id="detail-off-price" class="w-21">'+convertNumber(data.off_price)+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td class="font-weight-bold w-12">Danh mục:</td>'+
                            '<td id="detail-cost-price" class="w-21">'+ data.category.title+' - '+child_category+'</td>'+
                            '<td class="font-weight-bold w-12" >Màu sắc</td>'+
                            '<td id="detail-on-price" class="w-21">'+
                                '<label class="label-color" style="background:'+data.color+'"></label>'+
                                
                            '</td>'+
                            '<td class="font-weight-bold w-12">Thương hiệu:</td>'+
                            '<td id="detail-off-price" class="w-21">'+data.brand.name+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td class="font-weight-bold w-12">Loại:</td>'+
                            '<td id="detail-cost-price" class="w-21">'+ type+'</td>'+
                            '<td class="font-weight-bold w-12" >Kích cỡ:</td>'+
                            '<td id="detail-on-price" class="w-21">'+size+'</td>'+
                            '<td class="font-weight-bold w-12">Tình trạng:</td>'+
                            '<td id="detail-off-price" class="w-21">'+getNameConditionProduct(data.condition)+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td class="font-weight-bold w-12">Kinh doanh</td>'+
                            '<td id="detail-cost-price" class="w-21">';
                                if (data.status == 1) {
                                    content+='<button class="btn btn-primary">Đang kinh doanh</button>';
                                } else {
                                    content+='<button class="btn btn-danger">Ngừng kinh doanh</button>';
                                }  
                            content+='</td>'+
                            '<td class="font-weight-bold w-12" >ĐMT nhỏ nhất:</td>'+
                            '<td id="detail-on-price" class="w-21">'+data.min+'</td>'+
                            '<td class="font-weight-bold w-12">ĐMT lớn nhất</td>'+
                            '<td id="detail-off-price" class="w-21">'+data.max+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td class="font-weight-bold w-12">Hình ảnh:</td>'+
                            '<td class="w-25" colspan="5" >'+
                                '<div class="gallery">'+
                                    '<ul id="lightgallery-'+data.id+'" class="lightgallery">';
                                        for(var item of photos){
                                            content+='<li data-src="'+item+'">'+
                                                '<a href="'+item+'">'+
                                                    '<img class="img-responsive" src="'+item+'">'+
                                                    '<div class="gallery-poster">'+
                                                    '</div>'+
                                                '</a>'+
                                            '</li>';    
                                        }
                                    content+='</ul>'+
                                '</div>'+
                            '</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td class="font-weight-bold w-12">Chi tiết:</td>'+
                            '<td colspan=5>'+detail+'</td>'+
                            
                        '</tr>'+
                        '<tr>'+
                            '<td class="font-weight-bold w-12" >Mô tả:</td>'+
                            '<td colspan=5 class="more">'+description+'</td>'+
                        '</tr>'+
                        
                    '</table>'+
                    '</div>'+

                  '</div>'+
                  '<div id="tab-content-2" class="tab-content">'+
                    '<table class="w-100">'+
                        '<thead>'+
                            '<tr>'+
                                '<th class="text-center align-middle w-5">STT</th>'+
                                '<th class="text-center align-middle">Chi nhánh</th>'+
                                '<th class="text-center align-middle">Cảnh báo '+
                                    '<span class="tooltip-content" data-tooltip="Số lượng nhỏ hơn mức tồn nhỏ nhất.">'+
                                        '<i class="fas fa-info-circle"></i>'+
                                    '</span>'+
                                '</th>'+
                                '<th class="text-center align-middle">Số lượng</th>'+

                            '</tr>'+
                        '</thead>'+
                        '<tbody id="detail-stock-'+data.id+'">'+
                        '</tbody>'+

                    '</table>'+
                  '</div>'+
                  '<div id="tab-content-3" class="tab-content">'+
                    
                    '<p>tag3 Donec sollicitudin metus quis magna faucibus, vitae ultrices libero ultrices. Sed ut dui vitae velit laoreet commodo. Nam suscipit purus a ultricies auctor. </p>'+
                  '</div>'+
                  '<div id="tab-content-4" class="tab-content">'+
                    
                    '<p>tag4 </p>'+
                  '</div>'+
                '</div>'+
              '</div>';
              
                return content;
                               
    }
    
        function tableMenu() {
            content = '<a onclick="toggleMenuTable(this); return false;"   class="toggle-menu " href="#" id="toggle-menu-table"><span></span></a>' +
                '<div  class="toggle-menu-list" class="menu-table" style="top:50%">' +
                '<ul>' +
                '<li><a  href="#" data-type="create" onclick="showModalProduct(this); return false;"><i class="fas fa-plus"></i>&emsp;Thêm sản phẩm</a></li>' +
                '</ul>' +
                '</div>';
            $(".content-table-menu").html(content);
        }
      
        $('#table tbody').on('click', 'td.details-control', function () {
            var table = $('#table').DataTable();

            var tr = $(this).closest('tr');
            var row = table.row( tr );
             var id=row.data()['id']; 
            $('#table tbody tr').removeClass('shown');
            if ( row.child.isShown() ) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            }
            else {
                row.child( detailRow(row.data()) ).show();
                lightGallery(document.getElementById('lightgallery-'+id));
            }
        } );

        $("figure").mouseleave(function () {
                $(this).removeClass("hover");
            }
        );
        CKEDITOR.replace('detail', optionsCkeditor);
        CKEDITOR.replace('description', optionsCkeditor);
        // $('textarea#detail').ckeditor(optionsCkeditor);
        
        
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
            $("#gallery-product-create").html(content);
        }
        function removeImage(e){
            var item=$(e).attr('data-item');
            arr_gallery = arr_gallery.filter(function(k) {
                return k != item
            });
            getGallery(arr_gallery);
        }
        
        function getProperties(data){
            $.ajax({
                type: 'post',
                dataType: 'json',
                url: '{{ route("admin.product.getProperties") }}',
                success: function(result) {
                    getTypeProduct(result,data);
                    getCondition(result,data);
                    getSize(result,data);
                    
                },
                error: function(response) {
                    var errors = response.responseJSON.errors;
                    showError(errors);
                }
            });
        
        }
        function getTypeProduct(result,data){
            console.log(result);
            content="";
            content+='<select id="type-select" class="selectpicker show-tick form-control" title="Chọn loại sản phẩm" data-live-search="true" data-width="100%" placeholder="Chọn loại sản phẩm" data-size="5" data-actions-box="true">';
            for(var item of result['types']){
                var name=getNameTypeProduct(item);
                content+='<option  value="'+item+'">'+name+'</option>';
            }
            content+='</select>';
            $("#form-type-select").html(content);
            $("#type-select").selectpicker('refresh');
            $("#type-select").selectpicker('val',1);

            if(data){
                if(data['type']!=null){
                    $("#type-none").removeAttr('checked');
                    $("#form-type-select").removeClass('d-none');
                }
                $("#type-select").selectpicker('val', data['type']);
            }


        }
        function getSize(result,data){
            content="";
            content+='<select id="size-select" multiple data-size="5" title="Chọn kích thước" data-actions-box="true"  class="selectpicker show-tick form-control">';
            for(var item of result['sizes']){
                
                content+='<option  value="'+item+'">'+item+'</option>';
            }
            content+='</select>';
            $("#form-size-select").html(content);
            
            $("#size-select").selectpicker('refresh');
            if(data){
                $('#size-select').selectpicker('val',data['size'].split(',') );
            }
        }

        function getCondition(result,data){
            content="";
            content+='<select id="condition-select" class="show-tick selectpicker form-control" data-size="5" >';
            for(var item of result['conditions']){
                var name=getNameConditionProduct(item);
                content+='<option  value="'+item+'">'+name+'</option>';
            }
            content+='</select>';
            $("#form-condition-select").html(content);
            $("#condition-select").selectpicker('refresh');
            if(data){
                $('#condition-select').selectpicker('val',data['condition']);

            }

                            // $("#brand-select").selectpicker('val','1');

        }
        
        checkNone('size');
        var swatches;
        function checkColorNone(e){
            if($(e).is(':checked')){
                $("#pickr-container").addClass('d-none');
            }
            else{
                $("#pickr-container").removeClass('d-none');
                getPickr();
            }
        }
        function getPickr(color){
            $.ajax({
                    type: "get",
                    url: '{{route("admin.color.index")}}',
                    success: function(result) {
                        swatches=result;
                        default_color=color!=undefined?color:swatches[0];
                        content="";
                        content=`<div id="color-picker" ></div>`;
                        $("#pickr-container").html(content);
                        Pickr.create({
                            el: '#color-picker',
                            swatches,
                            components,
                            default:default_color
                        });
                    },
                });
           
        }
        checkNone('size');
        function checkNone(item){
            if($("#"+item+"-none").is(':checked')){
                $("#form-"+item+"-select").addClass("d-none");
                $("#"+item+"-select").selectpicker('refresh');
                
            }
            else{
                $("#form-"+item+"-select").removeClass("d-none");
                if(item=="size" ){
                    var size="";
                }
                else{
                    var size="";

                }
            }
        }
       
 

        
        function showModalProduct(e){
            $("#id-modal").val(null);

            if($(e).attr('data-type')=="create"){
                $("#type-modal").val('create');
                $("#modalProduct").modal('show');
                getProperties();
                getBrand();
                getCategory('');
                getPickr();
            }
            else{
                slug=$(e).attr('data-slug');
                $("#type-modal").val('update');
                $("#slug-modal").val(slug);
                $.ajax({
                    type: "POST",
                    url: '{{route("admin.product.edit")}}',
                            data: {
                                slug: slug
                            },
                            success: function(result) {
                                $("#modalProduct").modal('show');
                                $("#id-modal").val(result['id']);

                                $("#title-product").val(result['title']);
                                $("#cost_price").val(convertNumber(result['cost_price']));
                                $("#on_price").val(convertNumber(result['on_price']));
                                $("#off_price").val(convertNumber(result['off_price']));
                                $("#min").val(convertNumber(result['min']));
                                $("#max").val(convertNumber(result['max']));
                                if(result['status']==1){
                                    $("#switch-status input").attr('checked',true);
                                }
                                else{
                                    $("#switch-status input").attr('checked',false);

                                }
                                if(result['size']!=null){
                                    $("#size-none").removeAttr('checked');
                                    $("#form-size-select").removeClass('d-none');
                                }
                                else{
                                    $("#size-none").attr('checked',true);
                                    $("#form-size-select").addClass('d-none');
                                }
                                if(result['type']!=null){
                                    $("#type-none").removeAttr('checked');
                                    $("#form-type-select").removeClass('d-none');
                                }
                                else{
                                    $("#type-none").attr('checked',true);
                                    $("#form-type-select").addClass('d-none');
                                }
                                if(result['color']!=null){
                                    $("#color-none").removeAttr('checked');
                                    $("#pickr-container").removeClass('d-none');
                                }
                                else{
                                    $("#color-none").attr('checked',true);
                                    $("#pickr-container").addClass('d-none');
                                }
                                CKEDITOR.instances['description'].setData(result['description']);
                                CKEDITOR.instances['detail'].setData(result['detail']);
                                for(var item of result['photo'].split(',')){
                                    arr_gallery.push(item);
                                }
                                getGallery(arr_gallery);
                                getProperties(result);
                                getBrand(result);
                                getCategory(result);
                                
                            },
                            error: function(response) {
                                
                            },
                        });
            }
           
        }
        function toggleStatus(e){
            if(!$(e).is(':checked')){
                Swal.fire({
                title: 'Bạn muốn ngừng kinh doanh sản phẩm này',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Vâng, tiếp tục',
                cancelButtonText: 'Hủy',
                }).then((result) => {
                    if (!result.isConfirmed) {
                        $(e).attr('checked',true);
                    }
                    
                });
            }
        }
        function storeProduct(){
            var type_modal=$("#type-modal").val();
            var id=$("#id-modal").val();
            var color =$("#color-none").is(':checked') ? 'null' :$(".pcr-result").val();
            var type_product =$("#type-none").is(':checked') ? 'null' :$("#type-select").val();
            var size =$("#size-none").is(':checked') ? 'null' :$("#size-select").val().toString();
            var child_category =(!$("#child-category-select").val()) ? 'null' :$("#child-category-select").val();
            var status=$("#switch-status input").is(':checked')?1:0;
            if(type_modal=="create"){
                type="POST";
                url='{{ route("admin.product.store") }}';
            }
            else{
                type="PUT";
                url="{{ route('admin.product.update') }}";
            }
            $.ajax({
                dataType: 'json',
                type: type,
                url: url,
                data:{
                    id:id,
                    color:$(".pcr-result").val(),

                    slug:changeToSlug($("#title-product").val()),
                    title:$("#title-product").val(),
                    cost_price:converValueNumber("#cost_price"),
                    on_price:converValueNumber("#on_price"),
                    off_price:converValueNumber("#off_price"),
                    category:$("#category-select").val(),
                    child_category:child_category,
                    type:type_product,
                    size:size,
                    color:color,
                    brand:$("#brand-select").val(),
                    condition:$("#condition-select").val(),
                    photo:arr_gallery.toString(),
                    detail:CKEDITOR.instances['detail'].getData(),
                    description:CKEDITOR.instances['description'].getData(),
                    min:converValueNumber("#min"),
                    max:converValueNumber("#max"),
                    status:status
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
