$.ajaxSetup({
    headers: {
        "token": "c43d29e2-4407-11eb-b7e7-eeaa791b204b",
    }
});

function getProvince() {
    $.ajax({
        type: 'get',
        dataType: 'json',
        url: "https://online-gateway.ghn.vn/shiip/public-api/master-data/province",
        success: function(result) {
            {
              console.log(result);
                if (result.code == 200) {
                    var provinces = result.data;
                    
                    var content = "";
                    content = '<select id="province-select"  onChange="provinceSelect(this)" class="selectpicker form-control" title="Tỉnh/Thành phố" data-live-search="true" data-width="100%" data-size="5" data-actions-box="true">';
                    for (const item of provinces) {
                        var name=(item.ProvinceName=="Hồ Chí Minh")?"Tp Hồ Chí Minh":item.ProvinceName;
                        content += '<option value="' + item.ProvinceID + '">' + name + '</option>';
                    }
                    content += '</select>';
                    $("#province-form").html(content);
                    $("#province-select").selectpicker('refresh');

                }
            }
        }
    });
}

function getDistrict(province_id) {
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: 'https://online-gateway.ghn.vn/shiip/public-api/master-data/district',
        data: {
            "ProvinceID": province_id,
        },
        success: function(result) {
            {
              console.log(result);
                if (result.code == 200) {
                    var districts = result.data;
                    var content = "";
                    content = '<select id="district-select"  onChange="districtSelect(this)" class="selectpicker form-control" title="Quận/Huyện" data-live-search="true" data-width="100%" data-size="5" data-actions-box="true">';
                    for (const item of districts) {
                        if (province_id == item.ProvinceID) {
                            content += '<option value="' + item.DistrictID + '">' + item.DistrictName + '</option>';
                        }
                    }
                    content += '</select>';
                    $("#district-form").html(content);
                    $("#district-select").selectpicker('refresh');

                }
            }
        }
    });
}

function getWard(district_id) {
    $.ajax({
        type: 'get',
        dataType: 'json',
        url: 'https://online-gateway.ghn.vn/shiip/public-api/master-data/ward',
        data: {
            "district_id": district_id
        },
        success: function(result) {
            {
                // onChange="wardSelect(this)"
                if (result.code == 200) {
                    var wards = result.data;
                    var content = "";
                    content = '<select id="ward-select"   class="selectpicker form-control" title="Phường/Xã" data-live-search="true" data-width="100%" data-size="5" data-actions-box="true">';
                    for (const item of wards) {
                        content += '<option value="' + item.WardCode + '">' + item.WardName + '</option>';
                    }
                    content += '</select>';
                    $("#ward-form").html(content);
                    $("#ward-select").selectpicker('refresh');

                }
            }
        }
    });
}

function provinceSelect(e) {
    var id = $(e).find(":selected").val();
    var province=$(e).find(":selected").text();
    $("#ward-select").attr('disabled',true);
    getDistrict(id);
}

function districtSelect(e) {
    var id = $(e).find(":selected").val();
    getWard(id);
}
function formatAddress(profile){
    var province=profile['province'].split(',');
    var district=profile['district'].split(',');
    var ward=profile['ward'].split(',');
    var address=profile['address']+", "+ward[1]+", "+district[1]+", "+province[1]+".";
    return address;
}
// function getRegion(province){
//     var province=province[1];
//     region_1=['Bắc Ninh', 'Hà Nam', 'Hà Nội', 'Hải Dương', 'Hưng Yên', 'Hải Phòng', 'Nam Định', 'Ninh Bình', 'Thái Bình', 'Vĩnh Phúc','Hà Giang', 'Cao Bằng', 'Bắc Kạn', 'Lạng Sơn', 'Tuyên Quang', 'Thái Nguyên', 'Phú Thọ', 'Bắc Giang', 'Quảng Ninh'];
//     region_2=['Thanh Hoá', 'Nghệ An', 'Hà Tĩnh', 'Quảng Bình', 'Quảng Trị','Thừa Thiên-Huế','Đà Nẵng', 'Quảng Nam','Quảng Ngãi', 'Bình Định', 'Phú Yên', 'Khánh Hòa', 'Ninh Thuận','Bình Thuận'];
//     region_3=['Bình Phước', 'Bình Dương', 'Đồng Nai', 'Tây Ninh', 'Bà Rịa-Vũng Tàu', 'Hồ Chí Minh','Long An', 'Đồng Tháp', 'Tiền Giang', 'An Giang. Bến Tre', 'Vĩnh Long', 'Trà Vinh', 'Hậu Giang', 'Kiên Giang. Sóc Trăng', 'Bạc Liêu', 'Cà Mau', 'Cần Thơ'];
//     var region;
//     for(var i of region_1){
//       if(province==i){
//         return region=1;
//       }
//     }
//     for(var i of region_2){
//       if(province==i){
//         return region=2;
//       }
//     }
//     for(var i of region_3){
//       if(province==i){
//         return region=3;
//       }
//     }
// }
// function getUrban(province,district){
//     switch(province) {
//         case 'Hà Nội':
//             arr=['Quận Ba Đình','Quận Hoàn Kiếm','Quận Đống Đa','Quận Thanh Xuân','Quận Cầu Giấy','Quận Hoàng Mai','Quận Hai Bà Trưng','Quận Tây Hồ'];
//             for(var item of arr){
//             if(item==district){
//                 return 1;
//             }
//             else{
//                 return 0;
//             }
//         }
        
//             break;
//         case 'Hồ Chí Minh':
//           // code block
//           arr=['Quận 1', 'Quận 2', 'Quận 3', 'Quận 4' ,'Quận 5' ,'Quận 6' ,'Quận 7' ,'Quận 8' ,'Quận 10', 'Quận 11', 'Quận Bình Thạnh', 'Quận Gò Vấp', 'Quận Phú Nhuận', 'Quận Tân Bình', 'Quận Tân Phú'];
//           for(var item of arr){
//             if(item==district){ 
//                 return 1;
//             }
//             else{
//                 return 0;
//             }
//         }

//           break;
//         case 'Đà Nẵng':
//             arr=[ 'Quận Hải Châu', 'Quận Thanh Khê', 'Quận Liên Chiểu', 'Quận Cẩm Lệ'];
//             for(var item of arr){
//                 if(item==district){
//                     return 1;
//                 }
//                 else{
//                     return 0;
//                 }
//             }

//         break;
//         default:
//             var arr=district.split(' ');
//             var prefix=arr[0];
//             switch(prefix) {
//                 case 'Huyện':
//                   return 0;
//                   break;
//                 default:
//                     return 1;
//               }
//       }
// }
function getRouteShip(){
    var province_to=InfoCheckout['ProvinceName'];
    var province_from=InfoShop['ProvinceName'];
    var region_to=InfoCheckout['ToRegion'];
    var region_from=InfoShop['Region'];
    arr_special=[
      {
        province:'Hà Nội',
        region:'1',
      },
      {
        province:'Đà Nẵng',
        region:'2',
      },
      {
        province:'Hồ Chí Minh',
        region:'3',
      }
    ];
    
    if(province_from==province_to && region_to==region_from){
    //   $("#result").val('NỘI TỈNH');
      return "Nội tỉnh";
    }
    else if(province_to!=province_from && region_to==region_from){
      var k=0;
      for(var i of arr_special){
        if(province_from==i['province']){
          k++;
        }
        if(province_to==i['province']){
          k++;
        }
      }
      switch(k) {
        case 0:
        //   $("#result").val('NỘI VÙNG TỈNH');
          return "Nội vùng tỉnh";
          break;
        case 1:
        //   $("#result").val('NỘI VÙNG ');
          return "Nội vùng";

          break;
        
        default:
      }
      
    }
    else{
      var k=0;
      for(var i of arr_special){
        if(province_from==i['province']){
          k++;
        }
        if(province_to==i['province']){
          k++;
        }
      }
      switch(k) {
        case 0:
        //   $("#result").val('LIÊN VÙNG TỈNH');
          return "Liên vùng tỉnh";

          break;
        case 1:
        //   $("#result").val('LIÊN VÙNG ');
          return "Liên vùng";

          break;
        case 2:
        // $("#result").val('LIÊN VÙNG ĐẶC BIỆT');
        return "Liên vùng đặc biệt";

          break;
        default:
      }
      
    }
    function storeProfile(){
        var name=$("#name").val();
        var phone=$("#phone").val();
        var address=$("#address").val();
        var province=[$("#province-select option:selected").val(),$("#province-select option:selected").text()];
        var district=[$("#district-select option:selected").val(),$("#district-select option:selected").text()];
        var ward=[$("#ward-select option:selected").val(),$("#ward-select option:selected").text()];
        var region=getRegion(province);
        var urban=getUrban(province[1],district[1]);
        console.log(region);
        console.log(urban);
        // $.ajax({
        //     type: 'post',
        //     dataType: 'json',
        //     url: '/user/address',
        //     data: {
        //         name:name,
        //         phone:phone,
        //         province:province,
        //         district:district,
        //         ward:ward,
        //         address:address,
        //         urban:urban,
        //         region:region,
    
        //     },
        //     success: function(result) {
        //         {
        //             alertify.set('notifier', 'position', 'bottom-right');
        //             alertify.success('Thay đổi thành công');
        //               location.reload(); 
        //         }
        //     },
        //     error: function(errors) {
        //         if( errors.status === 422 ) {
        //           var errors = $.parseJSON(errors.responseText).errors;
        //           console.log(errors);
        //           $.each(errors, function (key, val) {
        //               $("#" + key+"-create").addClass('input-validation-error');
        //               $("#" + "error-create-"+key).removeClass('dis-none');
        //               $("#" + "error-create-"+key).text(val[0]);
        //           });
        //         }
        //       }
        // });
    }
}