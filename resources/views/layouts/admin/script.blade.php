<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.1.7/lightgallery.es5.min.js" integrity="sha512-IitPSSUbedH1yvu8pKI/bYYJ6Q0u5+rFIuIDc/Eow7tEb3tErqI9NIVEefU3iCBKLnQpFIBguIoa/qQm/ma5fw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
<script src="{{asset('js/sb-admin-2.min.js')}}"></script>
<script src="{{asset('js/datatables.min.js')}}"></script>
<script src="{{asset('js/selectpicker.js')}}"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script> 
<script src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.2/js/dataTables.select.min.js "></script>
{{--  <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.es5.min.js"></script>  --}}

{{-- <script src="https://cdn.jsdelivr.net/gh/garand/sticky@1.0.4/jquery.sticky.js"></script> --}}
<script src="{{ asset('js/toastr.js') }}"></script> 
<script src="{{ asset('js/gijgo.js') }}"></script> 
<script src="{{ asset('js/pickr.js') }}"></script> 
<script src="{{ asset('js/vnd.js') }}"></script> 
<script src="{{ asset('js/formatNumber.js') }}"></script> 
<script src='{{ asset("ckeditor/ckeditor.js") }}'></script>
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="//js.pusher.com/3.1/pusher.min.js"></script>

{{-- <script src="https://cdn.jsdelivr.net/gh/StephanWagner/jBox@v1.3.2/dist/jBox.all.min.js"></script> --}}
{{--  <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    
        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>
    
        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>
    
        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>  --}}
<script>
  
  (function($) {
  "use strict"; // Start of use strict

  // Toggle the side navigation
  // $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
  //   $("body").toggleClass("sidebar-toggled");
  //   $(".sidebar").toggleClass("toggled");
  //   if ($(".sidebar").hasClass("toggled")) {
  //     $('.sidebar .collapse').collapse('hide');
  //   };
  // });

  // Close any open menu accordions when window is resized below 768px
  $(window).resize(function() {
    if ($(window).width() < 768) {
      $('.sidebar .collapse').collapse('hide');
    };
    
    // Toggle the side navigation when window is resized below 480px
    if ($(window).width() < 480 && !$(".sidebar").hasClass("toggled")) {
      $("body").addClass("sidebar-toggled");
      $(".sidebar").addClass("toggled");
      $('.sidebar .collapse').collapse('hide');
    };
  });

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
    if ($(window).width() > 768) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();
    }
  });

  // Scroll to top button appear
  $(document).on('scroll', function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    e.preventDefault();
  });

})(jQuery); // End of use strict
new jBox('Tooltip', {
  attach: '.tooltip'
});
  function showError(errors, str) {
    // console.log(!str);
        $.each(errors, function (field_name, error) {
            if (field_name == Object.keys(errors)[0]) {
                toastr.error(error);
                // str2 = "_";
                // field_name = field_name.replace("_", "-");

                // console.log(field_name);

                if(str){
                    field_name+=str;
                }
                  $("#" + field_name).addClass("border-error");
                setTimeout(function () {
                    $("#" + field_name ).removeClass("border-error");
                }, 5000);
            }
    });
  }
    $.ajaxSetup({
          headers: {
              "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
          },
      });
      function toggleFilter(){
        $('.sidebar-child').toggleClass('active');
      }
    
      
        var optionsCkeditor = {
            skin: 'office2013',
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
        
        function converValueNumber(e){
          return $(e).val().replace(/\,/g, '');
        }
        function converTextNumber(e){
          return $(e).text().replace(/\,/g, '');
        }
        
        var optionsDateTimePicker={
          uiLibrary: 'bootstrap4',
            iconsLibrary: 'fontawesome',
            modal: true,
            footer: true,
            format: 'HH:MM dd-mm-yyyy',
        }
        var d = new Date($.now());
        now=('0'+d.getHours()).substr(-2)+":"+('0'+d.getMinutes()).substr(-2)+ " "+d.getDate().toString().padStart(2, "0")+"-"+(d.getMonth() + 1).toString().padStart(2, "0")+"-"+d.getFullYear();
 var optionsNowDateTimePicker={
          uiLibrary: 'bootstrap4',
            iconsLibrary: 'fontawesome',
            modal: true,
            footer: true,
            format: 'HH:MM dd-mm-yyyy',
            value:now,
        } 
        const swal = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: false
    });  
</script>
  @stack('scripts')