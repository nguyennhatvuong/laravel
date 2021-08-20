

@section('title', 'Tài khoản')
@extends('layouts.admin.master')
@section('main-content')
<!-- DataTales Example -->
<div class="card shadow mb-4">

<!-- Button trigger modal -->
<!-- Modal -->
<div class="card-body">
<div class="table-responsive">
   <div class="row">
      <div class="col">
         <div class="collapse panel-collapse show collapse-stock" id="CNPC">
            <div class="card">
               <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h4 class="m-0 font-weight-bold text-primary float-left">Tài khoản</h4>
                         <div class="text-center">
                            <button onclick="showModalCreateUser()" class=" mr-2 btn btn-success btn-sm float-right " data-toggle="tooltip" data-placement="bottom" title="Thêm cơ sở"><i class="fas fa-plus"></i> Thêm tài khoản</button>
                         </div>
                         
                   </div>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <input class="auto-numeric" type="hidden">
                     <table style="color: #333" class="table table-bordered display" id="table"  width="100%" cellspacing="0">
                        <thead>
                           <tr>
                            <th  class="text-center align-middle w-5">STT</th>
                             <th class="text-center align-middle">Mã</th>
                             <th class="text-center align-middle w-20">Tên</th>
                             <th class="text-center align-middle">Số điện thoại</th>
                             <th class="text-center align-middle">Email</th>
                             <th class="text-center align-middle">Vị trí</th>
                             <th class="text-center align-middle"></th>
                           </tr>
                           
                         </thead>
                          
                     </table>
                  </div>
                  <div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="modalCreateUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Thêm tài khoản</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <div class="modal-body " id="body-create-user">
             <div class="form-group" id="form-create-role-select">
                <label for="regular1" class="control-label">Nhóm <span class="color-red" >*</span></label>
                <input type="hidden" value="" id="input-isPersonel">
             </div>
             
            
             <div class="form-group d-none" id="form-create-category-select">
                <label for="regular1" class="control-label">Hình thức <span class="color-red" >*</span></label>
             </div>
             <div class="form-group d-none" id="">
                <label for="regular1" class="control-label">Chi nhánh <span class="color-red" >*</span></label>
             </div>
             <div class="form-group">
                <label for="regular1" class="control-label">Họ và tên <span class="color-red" >*</span></label>
                <input type="text" id="name-create" required autofocus placeholder="Họ và tên" value="" name="name"   class="input-create-user form-control" />
             </div>
             
             <div class="form-group">
                <label for="regular1" class="control-label">Email <span class="color-red">*</span></label>
                <input type="email" id="email-create" required  placeholder="Email" value="" name="email" id="title"  class="input-create-user form-control" />
             </div>
             
             <div class="form-group">
                <label for="regular1" class="control-label">Số điện thoại <span class="color-red">*</span></label>
                <input type="text"  id="phone-create"required placeholder="Số điện thoại" value="" name="phone" id="title"  class="input-create-user form-control" />
             </div>
            
             <div class="form-group">
                <label for="regular1" class="control-label">Mật khẩu<span class="color-red">*</span></label>
                <input type="password"  id="password-create" required placeholder="Số điện thoại" value="" name="password" id="password"  class="input-create-user form-control" />
             </div>
            
             <div class="form-group">
                <label for="inputAddress">Tỉnh - Thành phố</label>
                <select name="" required data-live-search="true" data-size="5" title="Vui lòng chọn tỉnh-thành phố" class="selectpicker province input-create-user form-control" id="province-create" data-type="create" >
                </select>
             </div>
           
             <div class="form-group dis-none form-district-create" >
                <label for="inputAddress">Quận - Huyện</label>
                <select name="" required data-live-search="true" data-size="5" title="Vui lòng chọn quận-huyện" class="selectpicker district input-create-user form-control" id="district-create" data-type="create" >
                </select>
             </div>
            
             <div class="form-group dis-none form-ward-create">
                <label for="inputAddress">Xã, phường</label>
                <select name="" required data-live-search="true" data-size="5" title="Vui lòng chọn xã-phường" class="selectpicker ward ward-create input-create-user form-control" id="ward-create" data-type="create">
                </select>
             </div>
             
             <div class="form-group">
                <label for="inputAddress">Địa chỉ</label>
                <input type="text"  name="address" required  class="input-create-user form-control" id="address-create" placeholder="Số nhà, khu, thôn">
             </div>
             
             <div class="form-group d-none" id="form-create-category-work-select">
                <label for="regular1" class="control-label">Hình thức công việc<span class="color-red" >*</span></label>
             </div>
             <div class="form-group d-none" id="form-create-start-date">
                <label for="regular1" class="control-label">Ngày bắt đầu làm việc<span class="color-red" >*</span></label>
                <input type="text" required placeholder="" value="{{ old('date') }}" name="date" id="datetime" class="form-control" />
             </div>
             <div class="form-group d-none" id="form-create-type-salary-select">
                <label for="regular1" class="control-label">Hình thức lương<span class="color-red" >*</span></label>
             </div>
             <div class="form-group d-none" id="form-create-salary">
                <label for="regular1" class="control-label">Tiền lương<span class="color-red" >*</span></label>
                <input type="text"  name="salary" required  class="input-create-salary form-control" id="create-salary" placeholder="Tiền lương">
             </div>
             
          </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-danger mr-auto" data-dismiss="modal">Thoát</button>
             <button type="button" class="btn btn-primary" onclick="storeUser(this)">Lưu</button>
          </div>
       </div>
    </div>
 </div>
 
@endsection
@push('styles')
{{-- <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" /> --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" /> --}}
    <style>
        tbody{
            overflow-y: scroll ;
                scrollbar-width: none;

            height: 500px;
        }
        #body-create-user{
            overflow-y: scroll ;
            scrollbar-width: none;

            height: 500px;
        }
    </style>
    <link href="{{asset('css/checkbox.css')}}" rel="stylesheet">

@endpush
@push('scripts')
    <script src="{{ asset('js/address.js') }}"></script>


    <script>
        
        var roles=<?php echo $roles  ?>;
        getData();
        function getData() {
            var role=$('#role-select').val();
            var numberFormat = $.fn.dataTable.render.number( '\,', '.', 0 ).display;
            var table = $('#table').DataTable();
            table.destroy();
            var table = $('#table').DataTable({
                scrollY: "500px",
                scrollCollapse: true,
                responsive: true,
                {{--  dom: "<'d-flex justify-content-between'<l><'table_filter'<'filter-role'><'refresh'>><'text-center'B><f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-5'i><'col-sm-7'p>>",  --}}
                processing: true,
                language: {
                    processing:'<svg class="spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">'+
                        '<circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>'+
                     '</svg>',
                      
                    paginate: {
                        first: "Đầu tiên",
                        previous: "Trước",
                        next: "Tiếp theo",
                        last: "Cuối cùng"
                    },
                    emptyTable: "Dữ liệu trống",
                    search: "Tìm kiếm",
                    lengthMenu: "Hiển thị  _MENU_ dòng",
                    info: "Đang hiển thị _START_ đến _END_ của _TOTAL_ dòng",
                    infoEmpty: "Đang hiển thị 0 đến 0 của 0 dòng",
                    infoFiltered: "(được chọn lọc từ _MAX_ dòng )",
                    infoPostFix: "",
                    loadingRecords: "Chargement en cours...",
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
                initComplete: function () {
                    var btns = $('.dt-button');
                btns.addClass('btn btn-primary');
                    btns.removeClass('dt-button');
        
                },
                select: true,
                
                ajax: {
                    dataType: 'json',
                    type: 'get',

                    url: '{{  route("admin.user.index")}}',
                    data: {
                        role:role,
                    }
                },
        
                columns: [
                    {
                        data: null, 
                        defaultContent: '',
                    },
                    {
                        
                        render: function(data,type,row) {
                            var code=row.code;
                            var content='<a href="" onclick="showUser('+code+')">'+code+'<a>';
                            return content;
                        }
                    },
                    {
                        data:'name',
                        name:'data.name'
                    },
                    {
                        data:'phone',
                        name:'data.phone',                    

                    },
                    {
                        data:'email',
                        name:'data.email',                    

                    },
                    {
                        data:'role',
                        name:'data.role',
                        render: function(data,type,row) {
                            var roles=row.roles;
                            var content='';
                            for(var role of roles){
                                content+=role['name'];
                            }
                            return content;

                        }
                    },
                    
                    {
                        render: function(data,type,row) {
                            var code=row.code;
                            return '<div class="btn-group" role="group" aria-label="First group">'+
                                        '<button class="btn btn-sm btn-success marg-1-right" data-code='+code+' onclick="showUser(this)"><i class="fas fa-eye"></i></button>'+
                                        '<button class="btn btn-sm btn-warning marg-1-right" onclick="showModalEdit('+code+')"><i class="fas fa-pen"></i></button>'+
                                        '<button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>'+
                                    '</div>';
                        }
                    }
                ],  
            });
            btnRefresh();
            filterRole(roles,role);


            table.on('order.dt search.dt', function() {
                table.column(0, {
                    search: 'applied',
                    order: 'applied'
                }).nodes().each(function(cell, i)   {
                    cell.innerHTML = i + 1;
                });
            }).draw();

        }
        
        function btnRefresh(){
            content='<button class="btn btn-success" onclick="refresh()" data-toggle="tooltip" data-placement="bottom" title="Làm mới"><i class="fas fa-undo"></i></button>';
            $(".refresh").html(content);

        }
        function refresh(){
            $('#role-select').val('default').selectpicker("refresh");
            getData();
        }
        

       function filterRole(roles,val){
        content='<select id="role-select"  class="selectpicker form-control" title="Chọn nhóm" data-live-search="true" data-size="5" data-actions-box="true" onchange="changeRole()">';
            content+='<option  value="all">Tất cả</option>';

            for(item of roles){
                content+='<option  value="'+item['name']+'">'+item['name']+'</option>';
            }
        content+='</select>';
        $('.filter-role').html(content);   
        $('.filter-role').addClass('m-r-10');   
        $('#role-select').selectpicker('refresh');
        if(val!=undefined){
            $('#role-select').selectpicker('val', val);
        }
        else{
            $('#role-select').selectpicker('refresh');
        }
       }
      
        
        function changeRole(){
            var role=$('#role-select').val();
            getData();
        }
    
        function showModalCreateUser(){
            $('#create-role-select').prop('disabled', false);
            $.ajax({
                type: 'get',
                dataType: 'json',
                url: '{{ route("admin.user.create") }}',
               
                success: function(response) {
                    content='<select id="create-role-select" title="Vui lòng chọn nhóm"  class="selectpicker form-control" data-live-search="true" data-size="5" data-actions-box="true" onchange="changeRoleCreateUser()">';
                        for(item of response){
                            content+='<option data-isPersonel="'+item['isPersonel']+'" value="'+item['name']+'">'+item['name']+'</option>';
                        }
                    content+='</select>';
                    $("#form-create-role-select").append(content);
                    $('#create-role-select').selectpicker('refresh');

                    $("#modalCreateUser").modal('show');
                    {{--  changeRoleCreateUser();  --}}
                },
                error: function(json) {
                    if (json.status === 404) {
                        var errors = json.responseJSON;
                    }
                }
            }); 
        }
        function changeRoleCreateUser(){
            $("#form-create-salary").addClass('d-none');
            $("#form-create-type-salary-select").addClass('d-none');
            $("#form-create-start-date").addClass('d-none');
            $("#form-create-category-work-select").addClass('d-none');

            var role=$('#create-role-select').val();
            for(item of roles){
                if(item['name']==role){
                    var isPersonel=item['isPersonel'];
                }
            }
            $("#input-isPersonel").val(isPersonel);
            if(isPersonel==1){
                
                content_type_salary='<select id="create-type-salary-select" title="Vui lòng chọn hình thức lương" class="selectpicker form-control" data-live-search="true" data-size="5" data-actions-box="true" onchange="changeTypeSalaryCreateUser()">';
                    for(item of type_salaries){
                        content_type_salary+='<option  value="'+item+'">'+item+'</option>';
                    }
                    content_type_salary+='</select>';
                $("#form-create-type-salary-select").append(content_type_salary);
                $("#form-create-type-salary-select").removeClass('d-none');
                $('#create-type-salary-select').selectpicker('refresh');
                content_category_work='<select id="create-category-work-select" title="Vui lòng chọn hình công việc" class="selectpicker form-control" data-live-search="true" data-size="5" data-actions-box="true" onchange="changeCategoryWorkCreateUser()">';
                    for(item of category_works){
                        content_category_work+='<option  value="'+item['id']+'">'+item['name']+'</option>';
                    }
                    content_category_work+='</select>';
                $("#form-create-category-work-select").append(content_category_work);
                $("#form-create-category-work-select").removeClass('d-none');
                $('#create-category-work-select').selectpicker('refresh');
                $("#form-create-start-date").removeClass('d-none');



            }
            
        }
        function changeTypeSalaryCreateUser(){
            $("#create-salary").val('');
            var value =$("#create-type-salary-select").val();
            var str=''
            if(value=="Lương theo tháng"){
                str='/tháng';
            }
            else{
                str='/giờ';
            }
            $("#form-create-salary").removeClass('d-none');
            new AutoNumeric("#create-salary", { decimalPlaces: '0',suffixText: str });
        }
        function storeUser(e){
            var role=$('#create-role-select').val();
            if(role==''){
                toastr.error('Vui lòng chọn nhóm');
            }
            else{
                var isPersonel=$('#input-isPersonel').val();
                var start_date=$('#datetime').val();
                var type_salary=$('#create-type-salary-select').val();
                var category_work=$('#create-category-work-select').val();
                var salary = $('#create-salary').val().match(/\d/g).join("");
               
                var name=$("#name-create").val();
                var phone=$("#phone-create").val();
                var password=$("#password-create").val();
                var email=$("#email-create").val();
                var address=$("#address-create").val();
                var province=[$("#province-create option:selected").val(),$("#province-create option:selected").text()];
                var district=[$("#district-create option:selected").val(),$("#district-create option:selected").text()];
                var ward=[$("#ward-create option:selected").val(),$("#ward-create option:selected").text()];
                
                
                var pre_province=prefixProvince(province[1]);
                var region=getRegion(pre_province);
                var urban=getUrban(region,district[1]);
                if(province[1]!=''){
                    province=province.toString();
                }
                else{
                    province='';
                }
                if(district[0]!=''){
                    district=district.toString();
                }
                else{
                    district='';
                }
                if(ward[0]!=''){
                    ward=ward.toString();
                }
                else{
                    ward='';
                }
                $.ajax({
                    type: 'delete', 
                    dataType: 'json',
                    url: '{{route("admin.user.store")}}',
                   
                    success: function(result) {
                        
                        $("#modalCreateUser .close").click();
                        toastr.success('Cập nhật thành công');  
    
                        getData();
                    },
                    error: function(response) {
                        var errors = response.responseJSON.errors;
                        $.each(errors,function(field_name,error){
                            if(field_name==Object.keys(errors)[0]){
                                toastr.error(error);
                            }
                        });
                    },
                }); 
            }
            
        }
        
        </script>
@endpush

