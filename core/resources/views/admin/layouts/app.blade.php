@extends('admin.layouts.master')

@section('content')
    <!-- page-wrapper start -->
    <div class="page-wrapper default-version">
        @include('admin.partials.sidenav')
        @include('admin.partials.topnav')


<style>
    @media(min-width:800px){
    .content-body {
    
    padding-left: 2rem;
    padding-right: 2rem;
}
}
</style>
        <div class="content-body"style="min-height: 788px;">
            

                @include('admin.partials.breadcrumb')

                @yield('panel')


            
        </div><!-- body-wrapper end -->
    </div>



@endsection
