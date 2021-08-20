

@section('title', 'Tài khoản')
@extends('layouts.admin.master')
@section('main-content')
<div class="card shadow mb-4 ">
    <div class="card-body">
        <div class="wrapper">
            
            
            <div class="content"style="width:100%">
                <div class="card" >
                    <div class="card-header ">
                        
                    <div class="row">
                        
                            <h5  id="table-name" style="padding-left: 20px; margin-top: 4px" class=" font-weight-bold">
                               Bảng cước phí gửi hàng từ Hà Nội - Đà Nẵng - Tp Hồ Chí Minh
                            </h5>
                    </div>
                    </div>
                        {{Helper::getTableRoute($specials,'table1')}}

                    
                </div>
                <div class="card" >
                    <div class="card-header ">
                        
                        <div class="row">
                            
                                <h5  id="table-name" style="padding-left: 20px; margin-top: 4px" class=" font-weight-bold">
                                Bảng cước phí gửi hàng từ 60 tỉnh thành còn lại
                                </h5>
                        </div>
                    </div>
                    {{Helper::getTableRoute($normals,'table2')}}

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
$(document).ready(function() {
       var span = 1;
       var prevTD = "";
       var prevTDVal = "";
       rowspanTable('table1');
       rowspanTable('table2');
       function rowspanTable(table) {
        $("#"+table+" tr td:nth-child(1)").each(function() { //for each first td in every tr
          var $this = $(this);
        //   console.log($this.text());
          if ($this.text() == prevTDVal) { // check value of previous td text
             span++;
             if (prevTD != "") {
                prevTD.attr("rowspan", span); // add attribute to previous td
                $this.remove(); // remove current td
             }
          } else {
             prevTD     = $this; // store current td 
             prevTDVal  = $this.text();
             span       = 1;
          }
       });
       }
    //    console.log($("#myTable > tbody > tr:first > td").length);

       
     
      
    });
    </script>
@endpush
