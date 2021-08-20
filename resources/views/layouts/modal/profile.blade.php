<div class="modal fade" id="modalUpdateProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <div class="form-group">
              {{-- <div class="radio-card-2"> --}}
                
                <div class="toggle-radio-2">
                                  {{Helper::getTypeProfile()}}
                </div>
              {{-- </div> --}}
            </div>
            <div class="form-group">
              <input class="inp-cbx" id="default_profile" type="checkbox" style="display: none"/>
              <label class="cbx" for="default_profile"><span>
                  <svg width="12px" height="10px" viewbox="0 0 12 10">
                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                  </svg></span><span>Đặt làm mặc định</span></label>
            </div>
        </div>
        <div class="modal-footer d-flex justify-content-between">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> &ensp;Hủy</button>
          <button onclick="storeProfile()" type="button" class="btn btn-primary"><i class="fas fa-save"></i> &ensp;Lưu</button>
      </div>
      </div>
    </div>
  </div>
