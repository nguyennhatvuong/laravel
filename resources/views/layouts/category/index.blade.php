<div class="modal" id="modalUpdateCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width:50% !important">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cập nhật danh mục</h5>
        <input type="hidden" id="type-modal-category">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <label for="regular1" class="col-md-3 col-form-label">Tên danh mục:<span class="color-red"> *</span></label>
          <div class="col-md-9">
              <input type="text"  id="title-category"  autofocus required placeholder="Tên danh mục" name="title" class="form-control" />
          </div>
      </div>
      <div class="form-group row">
        <div class="col-md-3">
            <label for="inputEmail4">Danh mục cha:</label>
        </div>
        <div class="col-md-2">
          <div class="cbx">
              <input id="cbx" class="is-parent" checked="true" onchange="isParent(this)" type="checkbox"/>
              <label for="cbx"></label>
              <svg width="15" height="14" viewbox="0 0 15 14" fill="none">
                <path d="M2 8.36364L6.23077 12L13 2"></path>
              </svg>
            </div>
        </div>
        <div class="col-md-7 d-none" id='form-category-create' >
        </div>
    </div>
    <div class="form-group row">
      <div class="col-md-3">
        <label for="regular1" class="col-form-label">Trạng thái:</label>
      </div>
      <div class="col-md-9">
        <select name="status" id="status-select" class="selectpicker form-control">
          <option value="1">Hoạt động</option>
          <option value="0">Không hoạt động</option>
      </select>
      </div>
    </div>
        <div class="form-group row">
          <div class="col-md-3">
            <label for="regular1" class="col-form-label">Hình ảnh:</label>


          </div>
          <div class="col-md-3">
            <button type="button" class="btn btn-primary btn-sm btn-image"data-input="thumbnail" data-preview="holder"><i class="fas fa-upload"></i>&ensp;Chọn file</button>

          </div>
          <div class="col-md-6" id="gallery-create">

          </div>
        </div>
        
      </div>
      <div class="modal-footer d-flex justify-content-between">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> &ensp;Hủy</button>

          <button onclick="storeCategory()" type="button" class="btn btn-primary"><i class="fas fa-save"></i> &ensp;Lưu</button>
      </div>
    </div>
  </div>
</div>
  <script>
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
    
   
function getCategory(data){
        $.ajax({
            type: 'get',
            dataType: 'json',
            url: '{{ route("admin.category.index") }}',
            success: function(result) {
                content='<select id="category-select"  onChange="selectCategory(this)" class="selectpicker show-tick form-control" title="Chọn danh mục" data-live-search="true" data-width="100%" placeholder="Chọn nhà cung cấp" data-size="5" data-actions-box="true">';
                    for(var item of result){
                        content+='<option  value="'+item['id']+'">'+item['title']+'</option>';
                    }
                content+='</select>';

                if(data=='create'){
                    $("#form-category-create").html(content);
                    $("#form-category-create").removeClass('d-none');
                    $("#category-select").selectpicker('refresh');

                }
                else if(data['cat_id']){
                  $("#form-category-select").html(content);

                  $("#category-select").selectpicker('val',data['cat_id']);
                  selectCategory('',data);
                 

                }
                else{
                  $("#form-category-select").html(content);
                  $("#category-select").selectpicker('refresh');
                  
                }

                // $("#category-select").selectpicker('refresh');
                // if(data){
                
                // }
            },
            error: function(response) {
                var errors = response.responseJSON.errors;
                showError(errors);
           }
        });
    }




    function isParent(e) {
        if(!$(e).is(":checked")){
          getCategory('create');
          $("#form-category-create").removeClass("d-none");
        }
        else{
          $("#form-category-create").addClass("d-none");
        }
    }
    function selectCategory(e,data){
      var id=(data)?data['cat_id']:$(e).val();
      $.ajax({
            type: 'get',
            dataType: 'json',
            url: '{{ route("admin.category.child") }}',
            data:{
                id:id
            },
            success: function(result) {
                content='<select id="child-category-select"  class="selectpicker show-tick form-control" title="Chọn danh mục phụ" data-live-search="true" data-width="100%" placeholder="Chọn nhà cung cấp" data-size="5" data-actions-box="true">';
                    for(var item of result){
                        content+='<option  value="'+item['id']+'">'+item['title']+'</option>';
                    }
                content+='</select>';
                $("#form-child-category-select").html(content);
                $("#child-category-select").selectpicker('refresh');
                if(data){
                  $("#child-category-select").selectpicker('val',data['child_cat_id']);

                }
            },
            error: function(response) {
                var errors = response.responseJSON.errors;
                showError(errors);
           }
        });
    }

   
    function storeCategory(){

var type_modal=$("#type-modal-category").val();
var parent_id=$("#is-parent").is(":checked")?'null':$("#category-select").val();
console.log(parent_id);
var is_parent=$("#is-parent").is(":checked")?1:0;
if(type_modal=="create"){
    type="POST";
          url='{{ route("admin.category.store") }}';
      }
      else{
          type="PUT";
          url="{{ route('admin.category.update') }}";
      }
  $.ajax({
          dataType: 'json',
          type: type,
          url: url,
      data: {
          title:  $("#title-category").val(),
          slug:  changeToSlug( $("#title-category").val()),
          parent_id:parent_id,
          is_parent:is_parent,
          photo:arr_gallery.toString(),
          status:$("#status-select").val()

      },
      success: function(result) {
          toastr.success('Cập nhật thành công');
          $("#modalUpdateCategory").modal('hide');
          location.reload();

      },
      error: function(response) {
          var errors = response.responseJSON.errors;
          showError(errors);
     }
  });
}

  </script>