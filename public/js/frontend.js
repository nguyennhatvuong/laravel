/*  ---------------------------------------------------
    Template Name: Male Fashion
    Description: Male Fashion - ecommerce teplate
    Author: Colorib
    Author URI: https://www.colorib.com/
    Version: 1.0
    Created: Colorib
---------------------------------------------------------  */

'use strict';

(function ($) {

    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");

        /*------------------
            Gallery filter
        --------------------*/
        $('.filter__controls li').on('click', function () {
            $('.filter__controls li').removeClass('active');
            $(this).addClass('active');
        });
        if ($('.product__filter').length > 0) {
            var containerEl = document.querySelector('.product__filter');
            var mixer = mixitup(containerEl);
        }
    });

    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    //Search Switch
    $('.search-switch').on('click', function () {
        $('.search-model').fadeIn(400);
    });

    $('.search-close-switch').on('click', function () {
        $('.search-model').fadeOut(400, function () {
            $('#search-input').val('');
        });
    });

    /*------------------
		Navigation
	--------------------*/
    $(".mobile-menu").slicknav({
        prependTo: '#mobile-menu-wrap',
        allowParentLinks: true
    });

    /*------------------
        Accordin Active
    --------------------*/
    $('.collapse').on('shown.bs.collapse', function () {
        $(this).prev().addClass('active');
    });

    $('.collapse').on('hidden.bs.collapse', function () {
        $(this).prev().removeClass('active');
    });

    //Canvas Menu
    $(".canvas__open").on('click', function () {
        $(".offcanvas-menu-wrapper").addClass("active");
        $(".offcanvas-menu-overlay").addClass("active");
    });

    $(".offcanvas-menu-overlay").on('click', function () {
        $(".offcanvas-menu-wrapper").removeClass("active");
        $(".offcanvas-menu-overlay").removeClass("active");
    });

    /*-----------------------
        Hero Slider
    ------------------------*/
    $(".hero__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        dots: true,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        // navText: ["<i class='as fa-chevron-left'></i>", "<i class='fas fa-chevron-left'></i>"],
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: false
    });
    $("#carousel-login").owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        dots: true,
        nav: true,
        navText: ["<i class='as fa-chevron-left'></i>", "<i class='fas fa-chevron-left'></i>"],
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true
    });
    $(document).ready(function(){
        $('#carousel').flexslider({
animation: "slide",
controlNav: false,
animationLoop: false,
slideshow: false,
itemWidth: 210,
itemMargin: 5,
asNavFor: '#slider'
});

$('#slider').flexslider({
animation: "slide",
controlNav: false,
animationLoop: false,
slideshow: false,
sync: "#carousel"
});

  
    });
    $("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
        event.preventDefault();
        event.stopPropagation();

        $(this).siblings().toggleClass("show");


        if (!$(this).next().hasClass('show')) {
        $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
        $('.dropdown-submenu .show').removeClass("show");
        });

    });
    
    /*--------------------------
        Select
    ----------------------------*/
    $("select").niceSelect();

    /*-------------------
		Radio Btn
	--------------------- */
    
    $(".product__color__select label, .shop__sidebar__size label, .product__details__option__size label").on('click', function () {
        $(".product__color__select label, .shop__sidebar__size label, .product__details__option__size label").removeClass('active');
        $(this).addClass('active');
    });
    // $(".shop__sidebar__color").onclick(function () {
    //     $(".shop__sidebar__color").removeClass('.active');
    //     $(this).addClass('active');

    // })
    /*-------------------
		Scroll
	--------------------- */
    $(".nice-scroll").niceScroll({
        cursorcolor: "#0d0d0d",
        cursorwidth: "5px",
        background: "#e5e5e5",
        cursorborder: "",
        autohidemode: true,
        horizrailenabled: false
    });

    /*------------------
        CountDown
    --------------------*/
    // For demo preview start
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    if(mm == 12) {
        mm = '01';
        yyyy = yyyy + 1;
    } else {
        mm = parseInt(mm) + 1;
        mm = String(mm).padStart(2, '0');
    }
    var timerdate = mm + '/' + dd + '/' + yyyy;
    // For demo preview end


    // Uncomment below and use your date //

    /* var timerdate = "2020/12/30" */

    $("#countdown").countdown(timerdate, function (event) {
        $(this).html(event.strftime("<div class='cd-item'><span>%D</span> <p>Days</p> </div>" + "<div class='cd-item'><span>%H</span> <p>Hours</p> </div>" + "<div class='cd-item'><span>%M</span> <p>Minutes</p> </div>" + "<div class='cd-item'><span>%S</span> <p>Seconds</p> </div>"));
    });

    /*------------------
		Magnific
	--------------------*/
    $('.video-popup').magnificPopup({
        type: 'iframe'
    });

    /*-------------------
		Quantity change
	--------------------- */
    var proQty = $('.pro-qty');
    proQty.prepend('<span class="fa fa-angle-up dec qtybtn"></span>');
    proQty.append('<span class="fa fa-angle-down inc qtybtn"></span>');
    // proQty.on('click', '.qtybtn', function () {
    //     var $button = $(this);
    //     var oldValue = $button.parent().find('input').val();
    //     if ($button.hasClass('inc')) {
    //         var newVal = parseFloat(oldValue) + 1;
    //     } else {
    //         // Don't allow decrementing below zero
    //         if (oldValue > 1) {
    //             var newVal = parseFloat(oldValue) - 1;
    //         } else {
    //             newVal = 1;
    //         }
    //     }
    //     $button.parent().find('input').val(newVal);
    // });

    // var proQty = $('.pro-qty-2');
    // proQty.prepend('<span class="fa fa-angle-left dec qtybtn"></span>');
    // proQty.append('<span class="fa fa-angle-right inc qtybtn"></span>');
    // proQty.on('click', '.qtybtn', function () {
    //     var $button = $(this);
    //     var oldValue = $button.parent().find('input').val();
    //     if ($button.hasClass('inc')) {
    //         var newVal = parseFloat(oldValue) + 1;
    //     } else {
    //         // Don't allow decrementing below zero
    //         if (oldValue > 0) {
    //             var newVal = parseFloat(oldValue) - 1;
    //         } else {
    //             newVal = 0;
    //         }
    //     }
    //     $button.parent().find('input').val(newVal);
    // });

    /*------------------
        Achieve Counter
    --------------------*/
    $('.cn_num').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

      
      $(document).ready(function() {
        // grab the initial top offset of the navigation 
           var stickyNavTop = $('.header_main').offset().top;
           
           // our function that decides weather the navigation bar should have "fixed" css position or not.
           var stickyNav = function(){
            var scrollTop = $(window).scrollTop(); // our current vertical position from the top
            // if we've scrolled more than the navigation, change its position to fixed to stick to top,
            // otherwise change it back to relative
            if (scrollTop > 10) { 
                $('.header_main').addClass('sticky');
            } else {
                $('.header_main').removeClass('sticky'); 
            }
        };
  
        stickyNav();
        // and run it again every time you scroll
        $(window).scroll(function() {
          stickyNav();
        });
      });
      document.querySelectorAll('.btn-addToCart').forEach(button => button.addEventListener('click', e => {
        if(!button.classList.contains('loading')) {
    
            button.classList.add('loading');
    
            setTimeout(() => button.classList.remove('loading'), 3700);
    
        }
        e.preventDefault();
    }));
    
    function shopNow(){
        window.location.href="{{route('productGrids')}}";
    }
    
    
           
//               $(document).ready(function() {
//                 var formheight = $("#form-wrapper").height();
//                 var formleftheight = $("#form-left-wrapper").height();
//                 var currentformpage = "shipping";
//                 var paymentbody = $("#payment-body");
//                 var confirmationbody = $("#confirmation-body");
//                 var shippingbody = $("#shipping-body");
//                 var currentformpagediv;
                
//                 // Variable decleration to check whether information has been submitted on each page. //
//                 var shippingstatus = false;
//                 var paymentstatus = false;
//                 var confirmationstatus = false;
            
//                 function shippingPageInit() {
//                     paymentbody.hide();
//                     confirmationbody.hide();
//                     shippingbody.fadeIn(700);
//                 }
//                 function paymentPageInit() {
//                     confirmationbody.hide();
//                     shippingbody.hide();
//                     paymentbody.fadeIn(700);
//                 }
//                 function confirmationPageInit() {
//                     shippingbody.hide();
//                     paymentbody.hide();
//                     confirmationbody.fadeIn(700);
//                 }
//                 // Getting the prices and adding them together to get the total //
//                 var cartprice = $(".cart-price");
//                 var cartitemcount = cartprice.length - 1;
//                 var cartitempricelist = [];
//                 function getSum(total, num) {
//                     return total + num;
//                 }
//                 cartprice.each(function() {
//                     cartitempricelist.push($(this).html());
//                 });
//                 var converttofloat = cartitempricelist.join(" ").split(" ").map(Number);
//                 $(".cart-price-total").html(converttofloat.reduce(getSum));
//                 // Changing form screen when user clicks on the form tabs //
//                 $(".tab-menu-item").click(function() {
//                     $("#form-left-wrapper").css({ "min-height": "278px" });
//                     $(".tab-menu-item").removeClass("current");
//                     if ($(this).hasClass("current")) {
//                         return false;
//                     } else {
//                         $(this).toggleClass("current");
//                         var currenttab = $(this).html();
//                         if (currenttab == "Shipping") {
//                             currentformpage = "shipping";
//                             shippingPageInit();
//                             currentformpagediv = "#" + currentformpage + "-body";
//                         } else if (currenttab == "Payment") {
//                             currentformpage = "payment";
//                             paymentPageInit();
//                             currentformpagediv = "#" + currentformpage + "-body";
//                         } else if (currenttab == "Confirmation") {
//                             currentformpage = "confirmation";
//                             confirmationPageInit();
//                             currentformpagediv = "#" + currentformpage + "-body";
//                         }
//                     }
//                 });
//                 $(".form-input-checkbox, #shipping-checkbox").click(function() {
//                     var checkbox = document.getElementById("shipping-checkbox");
//                     if (checkbox.checked == true) {
//                         checkbox.checked = false;
//                     } else {
//                         checkbox.checked = true;
//                     }
//                 });
//                 function nextPageForm() {
//                     $(".tab-menu-item").removeClass("current");
//                     if (currentformpage == "shipping") {
//                         $(".payment-tab").addClass("current");
//                         $("#shipping-body").hide();
//                         $("#confirmation-body").hide();
//                         $("#payment-body").fadeIn(700);
//                         currentformpage = "payment";
//                     } else if (currentformpage == "payment") {
//                         $(".confirmation-tab").addClass("current");
//                         $("#shipping-body").hide();
//                         $("#payment-body").hide();
//                         $("#confirmation-body").fadeIn(700);
//                         currentformpage = "confirmation";
//                     } else {
//                         $(".confirmation-tab").addClass("current");
//                     }
//                 }
            
//                 function checkValidation(i) {
//                     nextPageForm();
//                 }
            
//                 $("#form-wrapper").submit(function(event) {
//                     event.preventDefault();
//                     checkValidation(currentformpage);
//                 });
//             });
        
// $(function() {
//     $("#form-total").steps({
//         headerTag: "h2",
//         bodyTag: "section",
//         transitionEffect: "fade",
//         enableAllSteps: true,
//         autoFocus: true,
//         transitionEffectSpeed: 500,
//         titleTemplate: '<div class="title">#title#</div>',
//         labels: {
//             previous: 'Trở lại',
//             next: 'Tiếp tục',
//             finish: 'Hoàn tất',
//             current: ''
//         },
//         onStepChanged: function(event, currentIndex, priorIndex) {
//             switch (currentIndex) {
//                 case 1:
//                     routeShip(InfoCheckout);
//                     return true;
//                 case 2:
//                     checked_shipping();
//                 default:
//                     break;
//             }
//         },
//         onFinished: function(event, currentIndex) {
//             submitOrder();
//         }
//     });
//     $("#date").datepicker({
//         dateFormat: "MM - DD - yy",
//         showOn: "both",
//         buttonText: '<i class="zmdi zmdi-chevron-down"></i>',
//     });
// });
// var InfoCheckout = {
//     ProvinceID: '',
//     ProvinceName: '',
//     ToDistrictID: '',
//     ToWardCode: '',
//     ToRegion:'',
//     ToUrban:'',
// };
// address();
// function address(){
//     var id=$('input[name=address]:checked').data('id');
//     InfoUserCheckout(id);
// }
// function changeAddress(){
//     var id=$('input[name=address]:checked').data('id');
//     InfoUserCheckout(id);
// }
// function InfoUserCheckout(id) {
//     var name = $("#name_receiver_"+id).val();
//     var phone = $("#phone_receiver_"+id).val();
//     var urban = $("#urban_receiver_"+id).val();
//     var region = $("#region_receiver_"+id).val();
//     var address = $("#address_receiver_"+id).val() ;
//     InfoCheckout = {
//         ProvinceID: $("#province_receiver_"+id).val(),
//         ProvinceName: $("#province_receiver_"+id).data('name'),
//         ToDistrictID: $("#district_receiver_"+id).val(),
//         ToWardCode: $("#ward_receiver_"+id).val(),
//         ToUrban: $("#urban_receiver_"+id).val(),
//         ToRegion: $("#region_receiver_"+id).val(),
//     };
//     $("#name_final").text(name + ' | ' + phone);
//     $("#address_final").text(address);
//     ObjectInfoUser={
//         name:name,
//         address:address,
//         phone:phone,
//     }   
// }
// function getRouteShip(){
//         var province_to=InfoCheckout['ProvinceName'];
//         var province_from=InfoShop['ProvinceName'];
//         var region_to=InfoCheckout['ToRegion'];
//         var region_from=InfoShop['Region'];
//         arr_special=[
//           {
//             province:'Hà Nội',
//             region:'1',
//           },
//           {
//             province:'Đà Nẵng',
//             region:'2',
//           },
//           {
//             province:'Hồ Chí Minh',
//             region:'3',
//           }
//         ];
        
//         if(province_from==province_to && region_to==region_from){
//         //   $("#result").val('NỘI TỈNH');
//           return "Nội tỉnh";
//         }
//         else if(province_to!=province_from && region_to==region_from){
//           var k=0;
//           for(var i of arr_special){
//             if(province_from==i['province']){
//               k++;
//             }
//             if(province_to==i['province']){
//               k++;
//             }
//           }
//           switch(k) {
//             case 0:
//             //   $("#result").val('NỘI VÙNG TỈNH');
//               return "Nội vùng tỉnh";
//               break;
//             case 1:
//             //   $("#result").val('NỘI VÙNG ');
//               return "Nội vùng";

//               break;
            
//             default:
//           }
          
//         }
//         else{
//           var k=0;
//           for(var i of arr_special){
//             if(province_from==i['province']){
//               k++;
//             }
//             if(province_to==i['province']){
//               k++;
//             }
//           }
//           switch(k) {
//             case 0:
//             //   $("#result").val('LIÊN VÙNG TỈNH');
//               return "Liên vùng tỉnh";

//               break;
//             case 1:
//             //   $("#result").val('LIÊN VÙNG ');
//               return "Liên vùng";

//               break;
//             case 2:
//             // $("#result").val('LIÊN VÙNG ĐẶC BIỆT');
//             return "Liên vùng đặc biệt";

//               break;
//             default:
//           }
          
//         }
// }
// function routeShip(InfoCheckout) {
//     var route=getRouteShip(InfoCheckout,InfoShop);
//     arr_service = [];
//     $.ajax({
//         type: 'post',
//         dataType: 'json',
//         url: 'route-ship',
//         data: {
//             route: route,
//         },
//         success: function(route_id) {
//             serviceShip(route_id);
            
//         },
//         error: function(json) {
//             if (json.status === 404) {
//                 var errors = json.responseJSON;
//             }
//         }
//     });
//     // $.ajax({
//     //     type: 'post',
//     //     dataType: 'json',
//     //     url: 'https://online-gateway.ghn.vn/shiip/public-api/v2/shipping-order/available-services',

//     //     data: {
//     //         "ShopID": InfoShop['ShopID'],
//     //         "FromDistrictID": InfoShop['DistrictID'],
//     //         "ToDistrictID": InfoCheckout['ToDistrictID']
//     //     },
//     //     success: function(data) {
//     //         if (data.code == 200) {
//     //             var data = data.data;
//     //             for (var item of data) {
//     //                 if (item['short_name'] == "Đi bộ") {
//     //                     var object = {
//     //                         'service_name': 'Đường bộ',
//     //                         'id': item['id'],
//     //                         'fee': '',
//     //                         'time': ''
//     //                     }
//     //                 } else {
//     //                     var object = {
//     //                         'service_name': 'Hàng không',
//     //                         'id': item['id'],
//     //                         'fee': '',
//     //                         'time': ''
//     //                     }
//     //                 }

//     //                 FeeShip(object, InfoCheckout);
//     //             }

//     //         }
//     //     },
//     //     error: function(errors) {
//     //         console.log(errors);
//     //     }
//     // });
// }
// function serviceShip(route_id){
//     $.ajax({
//         type: 'post',
//         dataType: 'json',
//         url: 'service-ship',
//         data: {
//             route_id: route_id,
//         },
//         success: function(result) {
//             var weight=parseInt($("#weight").val());
//             var fee=0;
//             for(var item of result){
//                 var time=moment().add(item['time'], 'd').locale("vi").format('llll');
//                 time=time.slice(0,17);
//                 switch(InfoCheckout['ToUrban']) {
//                     case 0:
//                       fee=item['suburban'];
//                       break;
//                     default:
//                         fee=item['urban'];
//                   } 
//                 if(weight>item['weight']){
//                     var weight_more=weight-item['weight'];
//                     fee+=Math.ceil(weight_more / 500)*item['more_weight'];
//                 }
//                 var object={
//                     'service_id':item['id'],
//                     'method':item['method'],
//                     'fee':fee,
//                     'time':time
//                 };
//                 arr_service.push(object);
//             }
//             cardShip(arr_service);

//         },
//         error: function(json) {
//             if (json.status === 404) {
//                 var errors = json.responseJSON;
//             }
//         }
//     });
// }


// function cardShip(arr_service) {
//     content = '';
//     minFee = Math.min.apply(null, arr_service.map(function(item) {
//             return item.fee;
//         }));
//     for (item of arr_service) {
//         if (item['fee'] == minFee) {
//             content += '<div>' +
//                 '<input type="radio" class="checked_shipping" data-service-name="' + item['method'] + '" data-id="' + item['service_id'] + '" data-time="' + item['time'] + '" checked="checked" id="service_' + item['service_id'] + '" name="select" value="' + item['fee'] + '">';
//             var fee = formatNumber(item['fee']);
//             content += '<label for="service_' + item['service_id'] + '">' +
//                 '<ul class="list-group list-group-flush">' +
//                 '<li class="list-group-item">Hình thức: ' + item['method'] + '</li>' +
//                 '<li class="list-group-item">Giá vận chuyển: ' + fee + ' vnđ</li>' +
//                 '<li class="list-group-item">Thời gian dự kiến: ' + item['time'] + '</li>' +
//                 '</ul>' +
//                 '</label>' +
//                 '</div>';
//         } else {

//             content += '<div>' +
//                 '<input type="radio" class="checked_shipping" data-id="' + item['service_id'] + '"  data-service-name="' + item['method'] + '" data-time="' + item['time'] + '" id="service_' + item['service_id'] + '" name="select" value="' + item['fee'] + '">';
//             var fee = formatNumber(item['fee']);
//             content += '<label for="service_' + item['service_id'] + '">' +
//                 '<ul class="list-group list-group-flush">' +
//                 '<li class="list-group-item">Hình thức: ' + item['method'] + '</li>' +
//                 '<li class="list-group-item">Giá vận chuyển: ' + fee + ' vnđ</li>' +
//                 '<li class="list-group-item">Thời gian dự kiến: ' + item['time'] + '</li>' +
//                 '</ul>' +
//                 '</label>' +
//                 '</div>';
//         }

//     }

//     $("#card-shipping").html(content);

// }
// $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });
// getTotal();
// function getTotal(){
//     var money=$("#total_price").val();
//     convertVnd(money);
// }
// function checked_shipping() {
//     var shipping = $("input[type='radio'].checked_shipping:checked");
//     var fee = shipping.val();
//     objectServiceShip = {
//         'service_name': shipping.data('service-name'),
//         'fee': fee,
//         'time': shipping.data('time')
//     }
    
//     $.ajax({
//         type: 'post',
//         dataType: 'json',
//         url: 'add-shipping',
//         data: {
//             fee: fee,
//         },
//         success: function(result) {
//             $("#cart_fee_ship").text(formatNumber(result.fee_ship) + " vnđ");
//             $("#cart_total_price").text(formatNumber(result.total_price) + " vnđ");
//             convertVnd(result.total_price);

//             var products = result.products;
//             Cart={
//                 sub_price:result.sub_price,
//                 coupon:result.coupon,
//                 fee_ship:result.fee_ship,
//                 total_price:result.total_price,
//                 quantity:result.quantity,
//             }
//             for (var item in products) {

//                 var product = products[item];
//                 object = {
//                     'name': product['productInfo']['name'],
//                     'code': product['productInfo']['code'],
//                     'quantity': product['quantity'],
//                 };
//                 itemCart.push(object);
//             }
//         },
//         error: function(json) {
//             if (json.status === 404) {
//                 var errors = json.responseJSON;
//             }
//         }
//     });

// }
// var objectServiceShip = {
//     'service_name': '',
//     'id': '',
//     'fee': '',
//     'time': ''
// }
// // font stuff
// $(function() {

//     $('input[name=plan]').on('change', function() {
//         let $this = $(this);
//         let $label = $this.parent('label');

//         if (!($label.hasClass('label-checked'))) {
//             $('label').removeClass('label-checked');
//             $('label').find('.radio-check').hide();
//             $label.addClass('label-checked');
//             $label.find('.radio-check').show();
//         }

//     });

// });

// function formatNumber(nStr) {
//     nStr += '';
//     x = nStr.split('.');
//     x1 = x[0];
//     x2 = x.length > 1 ? '.' + x[1] : '';
//     var rgx = /(\d+)(\d{3})/;
//     while (rgx.test(x1)) {
//         x1 = x1.replace(rgx, '$1' + ',' + '$2');
//     }
//     return x1 + x2;
// }

// function submitOrder(){
//     console.log(objectServiceShip);
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     $.ajax({
//         type: 'post',
//         dataType: 'json',
//         url: '/cart/order',
//         data: {
//             giveFriend:$("#giveFriend").prop('checked'),
//             payments:$(".payment:checked").val(),
//             profile:$(".checkbox_address:checked").val(),
//             objectServiceShip:objectServiceShip,
//         },
//         success: function(response) {
//             if (response == true) {
//                 document.location.href = '/';
//                 alertify.set('notifier', 'delay', 10);
//                 alertify.set('notifier', 'position', 'bottom-right');
//                 alertify.success('Đặt hàng thành công');
//             }
//         },
//         error: function(errors) {
//         }
//     });
// }    
  
})(jQuery);