<div class="modal fade" id="modalProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width:90% !important">
       <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Cập nhật sản phẩm</h5>
             <input type="hidden" name="" id="type-modal">
             <input type="hidden" name="" id="slug-modal">
             <input type="hidden" name="" id="id-modal">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="regular1" class="control-label font-weight-bold">Tên sản phẩm<span class="color-red"> *</span></label>
                                <input type="text"  id="title-product" name="title"autofocus required placeholder="Tên sản phẩm"  class="form-control" />
                                {{--  <input type="text"  id="slug" name="slug"  required placeholder="Tên sản phẩm" value="" name="slug" class="form-control" />  --}}
                             </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                  <label class="font-weight-bold" for="inputEmail4">Giá vốn<span class="color-red"> *</span></label>
                                  <input type="text" onkeydown="formatNumber(this)" class="form-control " id="cost_price" value="0" placeholder="Giá vốn">
                                </div>
                                <div class="form-group col-md-4">
                                  <label class="font-weight-bold" for="inputPassword4">Giá website<span class="color-red"> *</span></label>
                                  <input type="text" onkeydown="formatNumber(this)" class="form-control " id="on_price" placeholder="Giá website">
                                </div>
                                <div class="form-group col-md-4">
                                  <label class="font-weight-bold" for="inputPassword4">Giá cửa hàng<span class="color-red"> *</span></label>
                                  <input type="text" onkeydown="formatNumber(this)" class="form-control " id="off_price" placeholder="Giá cửa hàng">
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
                                            <input class="form-check-input cursor-poiter"  onclick="checkNone('size')" type="checkbox" value="" id="size-none">
                                            <label class="form-check-label cursor-poiter" for="size-none">
                                              Trống
                                            </label>
                                          </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-12 " id="form-size-select">
                                           
                                        </div>
                                     </div>
                                  </div>
                                
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold" for="inputEmail4">Thương hiệu</label>
                                    <div class="row">
                                        <div class="col-12" id="form-brand-select">
                                            <select multiple class="form-control" id="brand-select">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                              </select>
                                        </div>
                                        
                                     </div>
                                  </div>
                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold" for="inputEmail4">Tình trạng</label>
                                    <div class="row">
                                        <div class="col-12" id="form-condition-select">
                                                
                                              </select>
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
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <label class="font-weight-bold" for="inputEmail4">Màu sắc<span class="color-red"> *</span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input cursor-poiter"  onclick="checkColorNone(this)" type="checkbox" value="" id="color-none">
                                            <label class="form-check-label cursor-poiter" for="color-none">
                                              Trống
                                            </label>
                                          </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12" id="pickr-container" >
                                           
                                        </div>
                                     </div>
                                  </div>
                                  {{--  <div class="form-group col-md-6">

                                  </div>  --}}
                                  <div class="form-group col-md-3">
                                    <label class="font-weight-bold" for="inputEmail4">Kinh doanh</label>

                                  </div>
                                  <div class="form-group col-md-3" >
                                    <label class="switch" id="switch-status">
                                        <input onchange="toggleStatus(this)" type="checkbox">
                                        <span class="slider round"></span>
                                  </label>
                                  </div>
                                
                              </div>
                        </div>
                    </div>
                    
                   
                </div>
                <div class="col-6">
                       
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button type="button" class="btn " data-toggle="collapse" data-target="#collapseThree"><i class="fa fa-angle-right"></i> Hình ảnh</button>									
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary btn-sm btn-image" data-input="thumbnail" data-preview="holder"><i class="fas fa-upload"></i>&ensp;Chọn file</button>
                                </div>
                                <div class="form-group d-flex" id="gallery-product-create">
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading">
                                <h2 class="mb-0">
                                    <button type="button" class="btn  collapsed" data-toggle="collapse" data-target="#collapseFour"><i class="fa fa-angle-right"></i>Chi tiết</button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <textarea id="detail" name="detail" class="form-control">{!! old('detail') !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button type="button" class="btn  collapsed" data-toggle="collapse" data-target="#collapseFive"><i class="fa fa-angle-right"></i> Mô tả</button>                     
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <div class="card-body">
                                    <textarea id="description" name="description" class="form-control">{!! old('description') !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h2 class="mb-0">
                                    <button type="button" class="btn  collapsed" data-toggle="collapse" data-target="#collapseSix"><i class="fa fa-angle-right"></i> Định mức tồn kho</button>                     
                                </h2>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="collapseSix" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label for="inputEmail4">Định mức tồn nhỏ nhất</label>
                                        <input onkeydown="formatNumber(this)" value="1"  type="text" class="form-control " id="min">
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label for="inputPassword4">Định mức tồn lớn nhất</label>
                                        <input onkeydown="formatNumber(this)" value="999" type="text" class="form-control " id="max" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
             
                </div>
              </div>
          </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-danger mr-auto" data-dismiss="modal"><i class="fas fa-times"></i> Đóng</button>
             <button type="button" id="btn-create-supplier" onclick="storeProduct()" class="btn btn-primary "><i class="fas fa-save"></i> Lưu</button>
          </div>
       </div>
    </div>
 </div>