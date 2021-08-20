

@section('title', 'Tài khoản')
@extends('layouts.admin.master')
@section('main-content')
<div class="card shadow mb-4 ">
    <div class="card-body">
        <div class="wrapper">
            
            
            <nav class="sidebar-child">
                <div class="accordion" id="accordionExample">
                    {{Helper::getRegion()}}
                </div>
            </nav>
            <div class="content"style="width:100%">
                <div class="card" >
                    <div class="card-header ">
                        
                        <div class="row">
                            <div class="col-1">
                                <button style="height: 31px; !important" type="button" onclick="toggleFilter()" class="  btn btn-sm btn-primary float-left" > <i class="fa fa-filter"></i> </button>
                            </div>
                            <div class="col-11">
                                <h5  id="table-name" style="padding-left: 20px; margin-top: 4px" class=" font-weight-bold">
                                    Tỉnh, Thành phố
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
                                 <th class="text-center align-middle">Mã tỉnh, thành </th>
                                 <th class="text-center align-middle">Tên tỉnh, thành </th>
                                 <th class="text-center align-middle">Khu vực</th>
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

@push('styles')
    <style>
    

    </style>
    <link rel="stylesheet" href="{{asset('css/gallery.css')}}">
    <link href="{{asset('css/switch.css')}}" rel="stylesheet">
    <link href="{{asset('css/tooltip.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css">
@endpush


    @push('scripts')
    
    <script>
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
            $('.btn-image').filemanager('image');

        });
        table();
        function table(region_id) {
            console.log(region_id);
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
                    type: 'get',
                    data:{
                        region_id:region_id
                    },
                    url: '{{  route("admin.region.index")}}',
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

                        data: 'id',
                        name: 'data.id'
                    },
                    {

                        data: 'name',
                        name: 'data.name',
                        render: function(data) {
                            return name=(data=="Hồ Chí Minh")?'Tp Hồ Chí Minh':data;
                            // return '<img class="img-responsive" src="'+photos[0]+'" style="width: 80px;cursor: pointer;">';
                        }
                    },
                    {
                        render: function(data,type,row) {
                            return row.region.name;
                        }
                    },
                    
                    
                ],
            });



            table.on('order.dt search.dt', function() {
                table.column(1, {
                    search: 'applied',
                    order: 'applied'
                }).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1;
                });
            }).draw();
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
            }   
        } );
        function detailRow ( data ) {
            content='<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
                        '<tr>'+
                            '<td class="font-weight-bold w-12" colspan=2>Nội thành:</td>'+
                            '<td colspan=4>';
                            for(var item of data.urban){
                                content+='<button class="btn btn-outline-dark margin-5">'+item['name']+'</button>';
                            }
                            '</td>'+
                            
                        '</tr>'+
                        
              '</table>';
                return content;
            }
            
    </script>
@endpush
