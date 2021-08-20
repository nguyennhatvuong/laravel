

@section('title', 'Tài khoản')
@extends('layouts.admin.master')
@section('main-content')
    <div class="card shadow mb-4 ">
        <div class="card-body">
            <div class="wrapper">
                <nav id="sidebar">
                    <div class="card">
                        <div class="card-header">
                        <i class="fas fa-list "></i> Bảng giá
                        <button class="btn btn-primary btn-sm float-right" onclick="showModalCreatePriceList()" ><i class="fas fa-plus"></i></button>
                        </div>
                        <div class="list-group" id="price-list">
                        </div>
                    </div>
                </nav>
                <div class="content"style="width:100%">
                    <div class="card" >
                        <div class="card-header ">
                        <div class="row">
                            <div class="col-1">
                                <button type="button" id="sidebarCollapse" class="btn btn-sm btn-primary float-left" > <i class="fa fa-filter"></i> </button>
                            </div>
                            <div class="col-11">
                                <h5  id="table-name" style="padding-left: 20px; margin-top: 4px" class=" font-weight-bold">
                                </h5>
                                <input type="hidden" id="price-list-id">
                            </div>
                        </div>
                        </div>
                        <div class="card-body">
                        <table style="color: #333" cellspacing="0" class="table table-bordered" id="table-default"  width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle w-5"></th>
                                    <th class="text-center align-middle w-15">Mã sản phẩm</th>
                                    <th class="text-center align-middle w-35">Tên sản phẩm</th>
                                    <th class="text-center align-middle w-15">Giá vốn </th>
                                    <th class="text-center align-middle w-15">Giá website</th>
                                    <th class="text-center align-middle w-15">Giá cửa hàng</th>
                                </tr>
                            </thead>
                        </table>
                        <table style="color: #333" cellspacing="0" class="d-none table table-bordered" id="table-promotion"  width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle w-5"></th>
                                    <th class="text-center align-middle w-10">Mã SP</th>
                                    <th class="text-center align-middle w-20">Tên SP</th>
                                    <th class="text-center align-middle w-12" >Giá vốn </th>
                                    <th class="text-center align-middle w-12">Giá NY website</th>
                                    <th class="text-center align-middle w-12">Giá NY cửa hàng</th>
                                    <th class="text-center align-middle w-12">Giá website</th>
                                    <th class="text-center align-middle w-12">Giá cửa hàng</th>
                                    <th class="text-center align-middle w-5"></th>
                                </tr>
                            </thead>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="modalCreatePriceList" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width:60% !important" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thêm bảng giá</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="tab-container">
                        <input type="radio" name="tab" data-id="1" id="tab1" checked="checked">
                        <label class="tab-label" for="tab1">Thông tin</label>
                        <input type="radio" data-id="2" name="tab" id="tab2">
                        <label class="tab-label" for="tab2">Công thức</label>
                        <div class="tab-content-wrapper">
                            <div id="tab-content-1" class="tab-content card">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="regular1" class="col-md-3 col-form-label">Tên bảng giá:<span class="color-red"> *</span></label>
                                        <div class="col-md-9">
                                        <input type="text"  id="title-create"  autocomplete="off"required placeholder="Tên bảng giá" value="" name="phone" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="inputEmail4">Hiệu lực từ: <span class="color-red"> *</span></label>
                                        <div class="col-md-4">
                                        <input type="text" required placeholder="" value="{{ old('date') }}" name="date" id="start-date-create" class="datetime form-control" />
                                        </div>
                                        <label class="col-md-1 col-form-label" for="inputEmail4">đến</label>
                                        <div class="col-md-4">
                                        <input type="text" required placeholder="" value="{{ old('date') }}" name="date" id="end-date-create" class="datetime form-control" />
                                        </div>
                                    </div>
                            
                                </div>
                            </div>
                            <div id="tab-content-2" class="tab-content card">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <button class="btn btn-primary">Giá bán =</button>
                                        </div>
                                        <div class="form-group col-md-4" id="form-parent-price-format-select-create" >
                                        </div>
                                        <div class="form-group col-md-2 " id="form-calculation-format-select-create">
                                        </div>
                                        <div class="form-group col-md-2" >
                                        <input type="text" onkeydown="convertNumber(this)" class="form-control " value="0" id="value-format-create">
                                        </div>
                                        <div class="form-group col-md-2 " id="form-type-format-select-create">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> &ensp;Hủy</button>
                    <button onclick="storePriceList()" type="button" class="btn btn-primary"><i class="fas fa-save"></i> &ensp;Lưu</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="modalUpdatePriceList" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width:60% !important" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="title-modal-update">Cập nhật bảng giá</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="tab-container">
                        <input type="radio" name="tab" data-id="3" id="tab3" checked="checked">
                        <label class="tab-label" for="tab3">Thông tin</label>
                        <input type="radio" data-id="4" name="tab" id="tab4">
                        <label class="tab-label" for="tab4">Công thức</label>
                        <div class="tab-content-wrapper">
                            <div id="tab-content-3" class="tab-content card">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="regular1" class="col-md-3 col-form-label">Tên bảng giá:<span class="color-red"> *</span></label>
                                        <div class="col-md-9">
                                            <input type="text"  id="title-update"  autocomplete="off"required placeholder="Tên bảng giá" value="" name="phone" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="inputEmail4">Hiệu lực từ: </label>
                                        <div class="col-md-4">
                                            <input type="text" required placeholder="" value="{{ old('date') }}" name="date" id="start-date-update" class="datetime form-control" />
                                        </div>
                                        <label class="col-md-1 col-form-label" for="inputEmail4">đến</label>
                                        <div class="col-md-4">
                                            <input type="text" required placeholder="" value="{{ old('date') }}" name="date" id="end-date-update" class="datetime form-control" />
                                        </div>
                                    </div>
                                 
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <label for="inputEmail4">Áp dụng:</label>
                                    </div>
                                    <div class="col-md-3" id="form-apply-update">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputEmail4">Hoàn thành:</label>
                                    </div>
                                    <div class="col-md-3" id="form-status-update">
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div id="tab-content-4" class="tab-content card">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <button class="btn btn-primary">Giá bán =</button>
                                        </div>
                                        <div class="form-group col-md-4 " id="form-parent-price-format-select-update">
                                        </div>
                                        <div class="form-group col-md-2 " id="form-calculation-format-select-update">
                                        </div>
                                        <div class="form-group col-md-2" >
                                        <input type="text" onkeydown="number(this)" class="form-control " value="0" id="value-format-update">
                                        </div>
                                        <div class="form-group col-md-2 " id="form-type-format-select-update">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> &ensp;Hủy</button>
                    <button onclick="updatePriceList()" type="button" class="btn btn-primary"><i class="fas fa-save"></i> &ensp;Lưu</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="modalCreatePriceListCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 60% !important;" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thêm theo nhóm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-5" id="form-price-list-category-select">
                        </div>
                        <div class="form-group col-md-5" id="form-price-list-child-category-select">
                        </div>
                        <div class="form-group col-md-2">
                            <button class="btn btn-primary" data-type="category" onclick="returnPriceListDetail(this)"><i class="fas fa-undo"></i>&ensp; Quay lại</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <table style="color: #333" cellspacing="0" class="table-product table table-bordered"  width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle w-10">Stt</th>
                                    <th class="text-center align-middle w-25">Mã Sản phẩm</th>
                                    <th class="text-center align-middle">Tên Sản phẩm</th>
                                    <th class="text-center align-middle w-10">
                                        <button onclick="deleteAllProduct()" class="btn btn-danger"><i class="fas fa-trash"></i> &ensp;Xóa tất cả</button>
                                    </th>
                                </tr>
                            <tbody>
                            </tbody>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> &ensp;Hủy</button>
                    <button onclick="updateProductPriceListDetail()" type="button" class="btn btn-primary"><i class="fas fa-save"></i> &ensp;Lưu</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="modalCreateProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width:60% !important" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thêm sản phẩm</h5>
                    <input type="hidden" id="modalCreateProductapply" value="0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-10" id="form-product-select">
                        </div>
                        <div class="form-group col-md-2">
                            <button class="btn btn-primary" data-type="product" onclick="returnPriceListDetail(this)"><i class="fas fa-undo"></i>&ensp; Quay lại</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <table style="color: #333" cellspacing="0" class="table-product table table-bordered"  width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle w-10">Stt</th>
                                    <th class="text-center align-middle w-25">Mã Sản phẩm</th>
                                    <th class="text-center align-middle">Tên Sản phẩm</th>
                                    <th class="text-center align-middle w-10">
                                        <button onclick='deleteAllProduct()' class="btn btn-danger"><i class="fas fa-trash"></i> &ensp;Xóa tất cả</button>
                                    </th>
                                </tr>
                            <tbody>
                            </tbody>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> &ensp;Xóa</button>
                    <button onclick="updateProductPriceListDetail()" type="button" class="btn btn-primary"><i class="fas fa-save"></i> &ensp;Lưu</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('styles')
    <link href="{{asset('css/switch.css')}}" rel="stylesheet">
    <style>
        span :hover{
            cursor: pointer;
        }
    </style>
@endpush
@push('scripts')
    <script src="{{asset('js/toggle-menu.js')}}"></script>
    <script src="{{asset('js/formatNumber.js')}}"></script>
    <script>
        
        $('#start-date-create').datetimepicker(optionsDateTimePicker);
        $('#end-date-create').datetimepicker(optionsDateTimePicker);
        $('#start-date-update').datetimepicker(optionsDateTimePicker);
        $('#end-date-update').datetimepicker(optionsDateTimePicker);
        var arrId=[];
        var listProduct = [];
        $('[data-toggle="offcanvas"]').click(function() {
            $('#wrapper').toggleClass('toggled');
        });
        getPriceList();
        function getPriceList() {
            $.ajax({
                type: 'get',
                dataType: 'json',
                url: "{{route('admin.priceList.getPriceList')}}",
                success: function(result) {
                    content = '';
                    for (var item of result) {
                        if (item.default == 1) {
                            content += '<a href="#" onclick="showPriceList(' + item.id + ');return false;" id="price-list-' + item.id + '" class="list-group-item  active">' + item.title + '</a>'
                        } else {
                            content += '<a href="#" onclick="showPriceList(' + item.id + ');return false;" id="price-list-' + item.id + '" class="list-group-item">' + item.title + '</a>';
                        }
                    }
                    $("#price-list").html(content);
                    for (var item of result) {
                        if(item.apply==1){
                            $("#price-list-"+item.id).append('<i class ="m-l-5 fas fa-check-circle"></i>');
                        }
                    }
                    
                },
                error: function(response) {
                    var errors = response.responseJSON.errors;
                    showError(errors);
                },
            });
        }
        showPriceList(1);
        function showPriceList(id) {
            $.ajax({
                type: 'post',
                dataType: 'json',
                data: {
                    id: id
                },
                url: "{{route('admin.priceList.show')}}",
                success: function(result) {
                    $(".list-group-item").removeClass('active');
                    $("#price-list-" + result['id']).addClass('active');
                    $("#table-name").text(result['title']);
                    $("#price-list-id").val(result['id']);
                    if (result['default'] == 1) {
                        getPriceListDefault();
                    } else {
                        getPriceListPromotion(result['id']);
                    }
                },
                error: function(response) {
                    var errors = response.responseJSON.errors;
                    showError(errors);
                },
            });
        }
        function getPriceListDefault() {
            $("#table-default").removeClass('d-none');
            $('#table-promotion').DataTable().destroy();

            $("#table-promotion").addClass('d-none');
            var table = $('#table-default').DataTable();
            table.destroy();
            var table = $('#table-default').DataTable({
                scrollY: "500px",
                scrollCollapse: true,
                responsive: true,
                processing: true,
                "columnDefs": [
                    { "orderable": false, "targets": [0] },
                ],
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
                    data:{
                        id:1
                    },
                    url: '{{  route("admin.priceList.detail")}}',

                },

                columns: [{

                        data: null,
                        defaultContent: '',
                        "orderable": "false"
                    },


                    {

                        render: function(data, type, row) {
                            return row['product']['code'];
                        }
                    },

                    {

                        render: function(data, type, row) {
                            return row['product']['title'];

                        }
                    },
                    {
                        data:'cost_price',
                        render: function(data, type, row) {
                            // console.log(data);
                            return "<i id='icon-cost-price-"+row.id+"' class='fas fa-edit m-r-5'></i><span ondblclick='changeToInput(this)' data-id='"+row.id+"' data-type='cost-price' id='cost-price-"+row.id+"'>"+convertNumber(data)+"</span>";
                        }
                    },
                    {

                        data:'on_price',
                        render: function(data, type, row) {
                            return "<i id='icon-on-price-"+row.id+"' class='fas fa-edit m-r-5'></i><span ondblclick='changeToInput(this)' data-id='"+row.id+"' data-type='on-price' id='on-price-"+row.id+"'>"+convertNumber(data);+"</span>";
                        }
                    },
                    {

                        data:'off_price',
                        render: function(data, type, row) {
                            return "<i id='icon-off-price-"+row.id+"' class='fas fa-edit m-r-5'><span ondblclick='changeToInput(this)' data-id='"+row.id+"' data-type='off-price' id='off-price-"+row.id+"'></i>"+convertNumber(data);+"</span>";
                        }
                    },

                ],
            });
            table.on('order.dt search.dt', function() {
                table.column(0, {
                    search: 'applied',
                    order: 'applied'
                }).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1;
                });
            }).draw();
        }
        function getPriceListPromotion(id) {
            $("#table-default").addClass('d-none');
            $('#table-default').DataTable().destroy();
            $("#table-promotion").removeClass('d-none');
            var table = $('#table-promotion').DataTable();
            table.destroy();
            var table = $('#table-promotion').DataTable({
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

                    "columnDefs": [
                    { "orderable": false, "targets": [0,8] },
                ],
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
                    data:{
                        id:id

                    },
                    url: '{{  route("admin.priceList.detail")}}',
                },

                columns: [{

                        data: null,
                        defaultContent: '',
                    },


                    {

                        render: function(data, type, row) {
                            return row['product']['code'];

                        }
                    },

                    {

                        render: function(data, type, row) {
                            return row['product']['title'];

                        }
                    },
                    {
                        data:'cost_price',
                        render: function(data, type, row) {
                            return convertNumber(data);
                        }
                    },
                    {

                        data:'on_price',
                        render: function(data, type, row) {
                            return convertNumber(data);
                        }
                    },
                    {

                        data:'off_price',
                        render: function(data, type, row) {
                            return convertNumber(data);
                        }
                    },
                    {

                        data:'promotion_on_price',
                        render: function(data, type, row) {
                            return "<i id='icon-promotion-on-price-"+row.id+"' class='fas fa-edit m-r-5'></i><span  ondblclick='changeToInput(this)' data-id='"+row.id+"' data-type='promotion-on-price' id='promotion-on-price"+row.id+"'>"+convertNumber(data);+"</span>";
                        }
                    },
                    {

                        data:'promotion_off_price',
                        render: function(data, type, row) {
                            return "<i id='icon-promotion-off-price-"+row.id+"' class='fas fa-edit m-r-5'></i><span ondblclick='changeToInput(this)' data-id='"+row.id+"' data-type='promotion-off-price' id='promotion-off-price-"+row.id+"'>"+convertNumber(data);+"</span>";
                        }
                    },
                    {

                        render: function(data, type, row) {
                            return '<button class="btn btn-danger btn-sm" data-id='+row['id']+' data-name='+row['product']['title']+' onclick="deleteProduct(this)"><i class="fas fa-trash"></i></button>';
                        }
                    }


                ],
            });
            table.on('order.dt search.dt', function() {
                table.column(0, {
                    search: 'applied',
                    order: 'applied'
                }).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1;
                });
            }).draw();
            tableMenuPromotion(id);
        }
        function tableMenuPromotion(id) {
            content = '<a onclick="toggleMenuTable(this); return false;"   class="toggle-menu " href="#" id="toggle-menu-table"><span></span></a>' +
                '<div  class="toggle-menu-list" class="menu-table" style="top:50%">' +
                '<ul>' +
                '<li><a  href="#" onclick="showModalCreatePriceListCategory('+id+'); return false;"  ><i class="fas fa-layer-group"></i>&emsp;Cập nhật nhóm</a></li>' +
                '<li><a  href="#" onclick="showModalCreateProduct('+id+'); return false;"><i class="fab fa-black-tie"></i>&emsp;Cập nhật sản phẩm</a></li>' +
                '<li><a href="#" onclick="showModalUpdatePriceList('+id+'); return false;" ><i class="fas fa-pen-alt"></i>&emsp;Cập nhật</a></li>' +
                '<li><a href="#" onclick="deletePriceList('+id+') ; return false;" ><i class="fas fa-trash-alt"></i>&emsp;Xóa bảng giá</a></li>' +
                // {{--  '<li><a href="#" onclick="showTableTrashed()"><i class="fas fa-trash-alt"></i>&emsp;Thùng rác</a></li>' +  --}}
                '</ul>' +
                '</div>';
            $(".content-table-menu").html(content);
        }
        function showModalCreatePriceList(){
            type='create';
            $.ajax({
                type: 'get',
                dataType: 'json',
                url: '{{ route("admin.priceList.create") }}',
                success: function(result) {
                    if(result['price_list']['end_date']==null){
                        var start_date_create=end_date_create=now;
                    }
                    else{
                        var start_date_create=end_date_create=moment(result['price_list']['end_date']).format("HH:MM DD-MM-YYYY");
                    }
                    $("#start-date-create").val(start_date_create);
                    $("#end-date-create").val(end_date_create);
                 
                    getCalculationFormat(result,type);
                    getTypeFormat(result,type);
                    getParentPriceFormat(result,type);
                    $("#modalCreatePriceList").modal('show');

                },
                error: function(response) {
                    var errors = response.responseJSON.errors;
                    showError(errors);
               }
            });
        }
        function showModalCreatePriceListCategory(id){
            $('.table-product tbody').empty();

            $.ajax({
                type: 'post',
                dataType: 'json',
                url: '{{ route("admin.priceList.getCategory") }}',
                data:{
                    id:id
                },
                success: function(result) {
                    if(result['details'].length>0){
                        deleteAllProduct();
                        $("#modalCreateProductStatus").val(1);
                        for(var item of result['details']){
                            var object = {
                                id: item['product']['id'],
                                code:item['product']['code'],
                                title: item['product']['title'],
                            };
                            arrId.push(item['product']['id'].toString());
                            listProduct.push(object);
                        }
                        tableProduct(listProduct);
                    }
                    content='<select id="price-list-category-select"  onChange="selectPriceListCategory(this)" class="selectpicker form-control" title="Chọn danh mục" data-live-search="true" data-width="100%" placeholder="Chọn nhà cung cấp" data-size="5" data-actions-box="true">';
                        for(var item of result['categories']){
                            content+='<option  value="'+item['id']+'">'+item['title']+'</option>';
                        }
                    content+='</select>';

                    $("#form-price-list-category-select").html(content);
                    $("#price-list-category-select").selectpicker('refresh');
                    $("#modalCreatePriceListCategory").modal('show');

                },
                error: function(response) {
                    var errors = response.responseJSON.errors;
                    showError(errors);
               }
            });
        }
        function showModalCreateProduct(id){
            $('.table-product tbody').empty();

            arrId.length=0;
            listProduct.length=0;
            $.ajax({
                type: 'post',
                dataType: 'json',

                url: '{{ route("admin.priceList.getProduct") }}',
                data: {
                    id:id
                },
                success: function(result) {
                    if(result['details'].length>0){
                        deleteAllProduct();
                        $("#modalCreateProductStatus").val(1);
                        for(var item of result['details']){
                            var object = {
                                id: item['product']['id'],
                                code:item['product']['code'],
                                title: item['product']['title'],
                            };
                            arrId.push(item['product']['id'].toString());
                            listProduct.push(object);
                        }
                        tableProduct(listProduct);
                    }
                    content='<select id="product-select" onChange="selectProduct(this)" class="show-tick  form-control" title="Chọn sản phấm" data-size="5" data-actions-box="true"  data-live-search="true">';
                        for(var item of result['products']){
                                content+='<option data-code=' +item['code'] + ' data-title=' +item['title'] + '  value="'+item['id']+'">' +item['code'] + ' - '+item['title'] +'</option>';
                        }
                        content+='</select>';
                    $("#form-product-select").html(content);
                    $("#product-select").selectpicker('refresh');
                    $("#modalCreateProduct").modal('show');

                },
                error: function(response) {
                    var errors = response.responseJSON.errors;
                    showError(errors);

                }
            });
        }
        function selectProduct(e){
            id = $(e).val();
            if(!arrId.includes(id)){
                $.ajax({
                    type: "post",
                    dataType: "json",
                    url: "{{ route('admin.product.show') }}",
                    data:{
                        id:id,
                    },
                    success: function(result) {
                        var object = {
                            id: result['id'],
                            code: result['code'],
                            title: result['title'],
                        };
                        arrId.push(id);
                        listProduct.push(object);
                        tableProduct(listProduct);
                    },
                });
            }
        }
        function returnPriceListDetail(e){
            if($("#modalCreateProductStatus").val()==0){
                deleteAllProduct();
            }
            else{
                console.log();
                if($(e).attr('data-type')=="category"){
                    showModalCreatePriceListCategory($("#price-list-id").val());
                }
                else{
                    showModalCreateProduct($("#price-list-id").val());
                }
            }
        }
        function tableProduct(listProduct){
            content = "";
            var stt=1;
            for (var item of listProduct) {
                content +=
                    '<tr id="tr_' +item.id +'">' +
                    '<td>'+stt+'</td>'+
                    "<td >" +item.code +'</td>'+
                    "<td >" +item.title +'</td>'+
                    '<td><button class="btn btn-danger btn-sm "  onclick=removeProduct(' +item.id +') data-id= style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button></td>' +
                    "</tr>";
                    stt++;
            }
            $(".table-product tbody").html(content);
        }
        function removeProduct(id) {
            $("#tr_" + id).remove();
            $.each(listProduct, function(i, el) {
                if (this.id == id) {
                    listProduct.splice(i, 1);
                }
            });
            arrId = arrId.filter(function(item) {
                return item != id
            })
            tableProduct(listProduct);
        }
        function selectPriceListCategory(e){
            id = $(e).val();
            type='parent';
            getProductCategory(id,type);
        }
        function selectPriceListCategoryChild(e){
            id = $(e).val();
            type='child';
            getProductCategory(id,type);
        }
        function getProductCategory(id,type){
            deleteAllProduct();
            $.ajax({
                type: 'post',
                dataType: 'json',
                url: '{{ route("admin.category.getProduct") }}',
                data:{
                    id:id,
                    type:type
                },
                success: function(result) {
                    if(result['products'].length==0){
                        content='<td colspan="4" class="text-center font-weight-bold" > Dữ liệu trống </td>';
                        $(".table-product tbody").html(content);

                    }
                    else{
                        
                        for (var item of result['products']) {
                            var object = {
                                id: item['id'],
                                code: item['code'],
                                title: item['title'],
                            };
                            arrId.push(item['id']);
                            listProduct.push(object);
                        }
                        tableProduct(listProduct);

                    }
                    if(type=='parent'){
                        content='<select id="price-list-child-category-select" onchange="selectPriceListCategoryChild(this)"  class="selectpicker form-control" title="Chọn danh mục phụ" data-live-search="true" data-width="100%" placeholder="Chọn nhà cung cấp" data-size="5" data-actions-box="true">';
                        for(var item of result['childs']){
                            content+='<option  value="'+item['id']+'">'+item['title']+'</option>';
                        }
                        content+='</select>';
                        $("#form-price-list-child-category-select").html(content);
                        $("#price-list-child-category-select").selectpicker('refresh');
                    }
                 
                   
                },
                error: function(response) {
                    var errors = response.responseJSON.errors;
                    showError(errors);
               }
            }); 
        }
        function deleteAllProduct(){
            $('.table-product tbody').empty();
            arrId.length=0;
            listProduct.length=0;
        }
        function updateProductPriceListDetail() {
            if(arrId.length==0){
                toastr.error('Vui lòng chọn sản phẩm');
            }
            $.ajax({
                type: 'post',
                dataType: 'json',
                url: '{{ route("admin.priceList.updateDetail") }}',
                data: {
                    id:$("#price-list-id").val(),
                    arr:arrId,
                },
                success: function(result) {
                    toastr.success('Cập nhật thành công');
                    $("#modalCreateProduct").modal('hide');
                    getPriceListPromotion(result);
                },
                error: function(response) {
                    var errors = response.responseJSON.errors;
                    showError(errors);
                }
            }); 
        }
        function getParentPriceFormat(result,type){
            content='<select id="parent-price-format-select-'+type+'" class="selectpicker form-control"  data-width="100%" data-actions-box="true">';
                for(var item of result['parent_prices']){
                    var name;
                    switch(item) {
                        case 'cost_price':
                            name="Giá vốn";
                          // code block
                          break;
                        default:
                            name="Giá niêm yết";
                      }
                    content+='<option  value="'+item+'">'+name+'</option>';
                }
            content+='</select>';
            $("#form-parent-price-format-select-"+type).html(content);
            $("#parent-price-format-select-"+type).selectpicker('refresh');
            if(type=='update'){
                $("#parent-price-format-select-"+type).selectpicker('val',result['formats']['parent_price']);
            }
        }
        function getCalculationFormat(result,type){
            content='<select id="calculation-format-select-'+type+'"  class="selectpicker form-control"  data-width="100%" data-actions-box="true">';
                for(var item of result['calculations']){
                    var name;
                    switch(item) {
                        case 'add':
                            name="+";
                          break;
                        case 'sub':
                            name="-";
                          break;
                        default:
                            name="*";
                      }
                    content+='<option style="color:red;" value="'+item+'">'+name+'</option>';
                }
            content+='</select>';
            $("#form-calculation-format-select-"+type).html(content);
            $("#calculation-format-select-"+type).selectpicker('refresh');
            if(type=='update'){
                $("#calculation-format-select-"+type).selectpicker('val',result['formats']['calculation']);
            }
        }
        function getTypeFormat(result,type){
            content='<select id="type-format-select-'+type+'" class="selectpicker form-control"  data-width="100%" data-actions-box="true">';
                for(var item of result['types']){
                    var name;
                    switch(item) {
                        case 'person':
                            name="%";
                          // code block
                          break;
                        default:
                            name="giá trị";
                      }
                    content+='<option  value="'+item+'">'+name+'</option>';
                }
            content+='</select>';
            $("#form-type-format-select-"+type).html(content);
            $("#type-format-select-"+type).selectpicker('refresh');
            if(type=='update'){
                $("#type-format-select-"+type).selectpicker('val',result['formats']['type']);
            }
        }
        function storeFormat() {

            $.ajax({
                type: 'post',
                dataType: 'json',
                url: '{{ route("admin.priceList.store") }}',
                data: {
                    category_price: $("#category-price-select").find("option:selected").val(),
                    start_date: $("#start-date").val(),
                    end_date: $("#end-date").val(),
                    title: $("#title-create").val(),
                },
                success: function(result) {
                    toastr.success('Cập nhật thành công');
                    getPriceList();
                    $("#modalCreatePriceList").modal('hide');
                },
                error: function(response) {
                    var errors = response.responseJSON.errors;
                    showError(errors);
                }
            });
        }
        function updateFormat() {
            $.ajax({
                type: 'post',
                dataType: 'json',
                url: '{{ route("admin.priceList.updateFormat") }}',
                data: {
                    id: $("#price-list-format-id").val(),
                    value: $("#value-format").val(),
                    type:  $("#type-format-select").find("option:selected").val(),
                    parent_price:  $("#parent-price-format-select").find("option:selected").val(),
                    calculation:  $("#calculation-format-select").find("option:selected").val(),
                },
                success: function(result) {
                    toastr.success('Cập nhật thành công');
                    $("#modalCreateFormat").modal('hide');
                    var id=$("#price-list-id").val();
                            getPriceListPromotion(id);
                },
                error: function(response) {
                    var errors = response.responseJSON.errors;
                    showError(errors);
                }
            });
        }
        function createPriceListCategory () {
            var category = $('#price-list-category-select').find("option:selected").val();
            var child = $('#price-list-child-category-select').find("option:selected").val();
            if(!category){
                toastr.error('Vui lòng chọn danh mục');
                return;
            }
            $.ajax({
                type: 'post',
                dataType: 'json',
                url: '{{ route("admin.priceList.updateDetail") }}',
                data: {
                    type:'category',
                    id:$("#price-list-id").val(),
                    category:category,
                    child:child,
                },
                success: function(result) {
                    if(result['type']=='error'){
                        toastr.error(result['error']);
                    }
                    else{
                        toastr.success('Cập nhật thành công');
                        $("#modalCreatePriceListCategory").modal('hide');
                        getPriceListPromotion(result);
                    }

                },
                error: function(response) {
                    var errors = response.responseJSON.errors;
                    showError(errors);
                }
            });
        }
        function deleteProduct(e){
            id=$(e).attr('data-id');
            Swal.fire({
                text: "Bạn có chắc chắn muốn xóa sản phẩm",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Xác nhận',
                cancelButtonText: 'Thoát',
                reverseButtons: true
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'post',
                        dataType: 'json',
                        url: '{{ route("admin.priceList.deleteProduct") }}',
                        data: {
                            id:id,
                        },
                        success: function(result) {
                            toastr.success('Cập nhật thành công');
                            var id=$("#price-list-id").val();
                            getPriceListPromotion(id);
                        },
                        error: function(response) {
                            var errors = response.responseJSON.errors;
                            showError(errors);
                        }
                    });
                }
                })
        }
        function deletePriceList(id){
            Swal.fire({
                text: "Bạn có chắc chắn muốn xóa bảng giá",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Xác nhận',
                cancelButtonText: 'Thoát',
                reverseButtons: true
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'post',
                        dataType: 'json',
                        url: '{{ route("admin.priceList.destroy") }}',
                        data: {
                            id:id,
                        },
                        success: function(result) {
                            toastr.success('Cập nhật thành công');
                            getPriceList();
                            showPriceList(1);

                        },
                        error: function(response) {
                            var errors = response.responseJSON.errors;
                            showError(errors);
                        }
                    });
                }
                })
        }
        function showModalUpdatePriceList(id){
            type='update';
            $.ajax({
                type: 'post',
                dataType: 'json',
                url: '{{ route("admin.priceList.edit") }}',
                data: {
                    id:id,
                },
                success: function(result) {
                    $("#modalUpdatePriceList").modal('show');
                    $("#title-update").val(result['price_list']['title']);
                    $("#title-modal-update").text('Cập nhật '+result['price_list']['title']);
                    $("#start-date-update").val(moment(result['price_list']['start_date']).format("HH:MM DD-MM-YYYY"));
                    $("#end-date-update").val(moment(result['price_list']['end_date']).format("HH:MM DD-MM-YYYY"));

                   content= '<label class="switch" id="status-update">';
                        if (result['price_list']['status'] == 1) {
                            content += '<input type="checkbox" checked>';
                        } else {
                            content += '<input type="checkbox">';
                        }

                        content+='<span class="slider round"></span>'+
                      '</label>';
                    $("#form-status-update").html(content);
                   content= '<label class="switch" id="apply-update">';
                        if (result['price_list']['apply'] == 1) {
                            content += '<input type="checkbox" checked>';
                        } else {
                            content += '<input type="checkbox">';
                        }

                        content+='<span class="slider round"></span>'+
                      '</label>';
                    $("#form-apply-update").html(content);
                    getCalculationFormat(result,type);
                    getTypeFormat(result,type);
                    getParentPriceFormat(result,type);
                    $("#value-format-update").val(result['formats']['value']);
                   
                    
                },
                error: function(response) {
                    var errors = response.responseJSON.errors;
                    showError(errors);
                }
            });
        }
        function changeToInput(e){

            id=$(e).attr('data-id');
            type=$(e).attr('data-type');
            $("#icon-"+type+"-"+id).addClass('d-none');

            console.log("icon-"+type+"-"+id);
            var input = $('<input />', {
                'id':'input-'+type+'-'+id,
                'data-id':id,
                'data-type':type,
                'onkeydown':'updatePrice(event)',
                'class':'form-control',
                'value': $(e).html()
            });
            $(e).parent().append(input);
            $(e).remove();
            input.focus();
        }
        function storePriceList() {
            var str='-create';
            var value=$("#value-format-create").val();
            if(value==''){
                value=0;
            }
            $.ajax({
                type: 'post',
                dataType: 'json',
                url: '{{ route("admin.priceList.store") }}',
                data: {
                    start_date: $("#start-date-create").val(),
                    end_date: $("#end-date-create").val(),
                    title: $("#title-create").val(),
                    value: value,
                    type:  $("#type-format-select-create").find("option:selected").val(),
                    parent_price:  $("#parent-price-format-select-create").find("option:selected").val(),
                    calculation:  $("#calculation-format-select-create").find("option:selected").val(),

                },
                success: function(result) {
                    if(result['type']=='error'){
                        showError(result,str);
                    }
                    else{
                        toastr.success('Cập nhật thành công');
                        getPriceList();
                        $("#modalCreatePriceList").modal('hide');
                    }
                    // console.log(result);
                    
                },
                error: function(response) {
                    var errors = response.responseJSON.errors;
                    showError(errors,str);
                }
            });
        }
        function updatePrice(e){
            if(e.keyCode==13){
                var value=converValueNumber(e.target);
                var id=$(e.target).attr('data-id');
                var type=$(e.target).attr('data-type');
                $.ajax({
                    type: 'post',
                    dataType: 'json',
                    url: '{{ route("admin.priceList.updatePrice") }}',
                    data: {
                        id:id,
                        value:value,
                        type:type,
                    },
                    success: function(result) {
                        toastr.success('Cập nhật thành công');
                        var span="<span class='color-red' ondblclick='changeToInput(this)' data-id='"+id+"' data-type='"+type+"'>"+convertNumber(value)+"</span> ";
                        $(e.target).parent().append(span);
                        $(e.target).addClass('color-red');
                        $(e.target).remove();
                        $("#icon-"+type+"-"+id).removeClass('d-none');

                    },
                    error: function(response) {
                        var errors = response.responseJSON.errors;
                        showError(errors);
                    }
                });


            }
            else{
                $(e.target).number(true);
            }
        }
        function updatePriceList(){
            var id=$("#price-list-id").val();
            const status = ($("#status-update input").is(':checked')) ? 1 : 0;
            const apply = ($("#apply-update input").is(':checked')) ? 1 : 0;
            $.ajax({
                type: 'put',
                dataType: 'json',
                url:"{{ route('admin.priceList.update',"+id+") }}",
                data: {
                    id:id,
                    start_date: $("#start-date-update").val(),
                    end_date: $("#end-date-update").val(),
                    title: $("#title-update").val(),
                    status: status,
                    apply: apply,
                    value: $("#value-format-update").val(),
                    type:  $("#type-format-select-update").find("option:selected").val(),
                    parent_price:  $("#parent-price-format-select-update").find("option:selected").val(),
                    calculation:  $("#calculation-format-select-update").find("option:selected").val(),

                },
                success: function(result) {
                    if(result['type']=='error'){
                        toastr.error(result.error[0]);
                        $("#status-update input").prop('checked', false);
                        $("#apply-update input").prop('checked', false);
                    }
                    else{
                        toastr.success('Cập nhật thành công');
                        $("#modalUpdatePriceList").modal('hide');
                        getPriceListPromotion(result);
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
