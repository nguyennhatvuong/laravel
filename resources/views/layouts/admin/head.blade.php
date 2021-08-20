
{{-- <head> --}}
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    {{-- <link rel="shortcut icon" href="http://sstatic.net/stackoverflow/img/favicon.ico"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.2/css/select.dataTables.min.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css"/> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.1.7/lightgallery.umd.min.js" integrity="sha512-UuENQK/FXF6FU077fpLTIP/KxiKe3JleH6GPtWskurBjrY4Dma6mBfn6LSZJjAEvgUC9CeEDKfDhzoaYDBq1yw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    {{--  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css"/> <!-- 'classic' theme -->  --}}

    {{--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />  --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> 
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/modal-image.css') }}"  />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/toggle-menu.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sb-admin-2.css')}}"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tab.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pickr-classic.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}">
    <link href="https://cdn.jsdelivr.net/gh/StephanWagner/jBox@v1.3.2/dist/jBox.all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/toastr.css')}}" type="text/css"> 

    @stack('styles')

{{-- </head> --}}
