<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $general->siteName($pageTitle ?? '') }}</title>
    <link rel="shortcut icon" type="image/png" href="{{getImage(getFilePath('logoIcon') .'/favicon.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/global/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/vendor/bootstrap-toggle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/global/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/global/css/line-awesome.min.css')}}">

    @stack('style-lib')

    <link rel="stylesheet" href="{{asset('assets/admin/css/vendor/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/vendor/datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/app.css')}}">


    <link href="{{asset('assets/global/dash/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/global/dash/vendor/nouislider/nouislider.min.css')}}">
    <!-- Style css -->
    <link href="{{asset('assets/global/dash/css/style.css')}}" rel="stylesheet">

    @stack('style')
</head>
<body>
     <!--*******************
        Preloader start
    ********************-->
   <!--  <div id="preloader">
        <div class="waviy">
           <span style="--i:1">L</span>
           <span style="--i:2">o</span>
           <span style="--i:3">a</span>
           <span style="--i:4">d</span>
           <span style="--i:5">i</span>
           <span style="--i:6">n</span>
           <span style="--i:7">g</span>
           <span style="--i:8">.</span>
           <span style="--i:9">.</span>
           <span style="--i:10">.</span>
        </div>
    </div> -->
    <!--*******************
        Preloader end
    ********************-->
@yield('content')



<script src="{{asset('assets/global/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/global/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/admin/js/vendor/bootstrap-toggle.min.js')}}"></script>
<script src="{{asset('assets/admin/js/vendor/jquery.slimscroll.min.js')}}"></script>


@include('partials.notify')
@stack('script-lib')

<script src="{{ asset('assets/admin/js/nicEdit.js') }}"></script>
<script src="{{asset('assets/admin/js/vendor/prism.js')}}"></script>
<script src="{{asset('assets/admin/js/vendor/select2.min.js')}}"></script>
<script src="{{asset('assets/admin/js/app.js')}}"></script>
<script>
    "use strict";
    bkLib.onDomLoaded(function() {
        $( ".nicEdit" ).each(function( index ) {
            $(this).attr("id","nicEditor"+index);
            new nicEditor({fullPanel : true}).panelInstance('nicEditor'+index,{hasPanel : true});
        });
    });
    (function($){
        $( document ).on('mouseover ', '.nicEdit-main,.nicEdit-panelContain',function(){
            $('.nicEdit-main').focus();
        });
    })(jQuery);
</script>


  <script src="{{asset('assets/global/dash/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('assets/global/dash/vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('assets/global/dash/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Apex Chart -->
    <script src="{{asset('assets/global/dash/vendor/apexchart/apexchart.js')}}"></script>
    <script src="{{asset('assets/global/dash/vendor/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('assets/global/dash/vendor/wnumb/wNumb.js')}}"></script>
    
    <!-- Dashboard 1 -->
   

    <script src="{{asset('assets/global/dash/js/custom.min.js')}}"></script>
    <script src="{{asset('assets/global/dash/js/dlabnav-init.js')}}"></script>
    <script src="{{asset('assets/global/dash/js/demo.js')}}"></script>


@stack('script')


</body>
</html>
