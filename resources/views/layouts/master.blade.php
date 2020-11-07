<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
        <title>@yield('title')</title>
    
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.png')}}">
    
        <!-- plugins css -->
        <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap/dist/css/bootstrap.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/vendors/PACE/themes/blue/pace-theme-minimal.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/vendors/perfect-scrollbar/css/perfect-scrollbar.min.css')}}" />
    
        <!-- page plugins css -->
        <link rel="stylesheet" href="{{asset('assets/vendors/bower-jvectormap/jquery-jvectormap-1.2.2.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/vendors/nvd3/build/nv.d3.min.css')}}" />
    
        <!-- core css -->
        <link href="{{asset('assets/css/ei-icon.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/themify-icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/app.css')}}" rel="stylesheet">
    </head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Side Nav START -->
           @include('includes.sidenav') 
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                <!-- Header START -->
                @include('includes.header')
                <!-- Header END -->

                <!-- Side Panel START -->
                @include('includes.sidepanel')
                <!-- Side Panel END -->

             @yield('content')

                <!-- Footer START -->
                @include('includes.footer')
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->

        </div>
    </div>

    <script src="{{asset('assets/js/vendor.js')}}"></script>

    <!-- page plugins js -->
    <script src="{{asset('assets/vendors/bower-jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('assets/js/maps/jquery-jvectormap-us-aea.js')}}"></script>
    <script src="{{asset('assets/vendors/d3/d3.min.js')}}"></script>
    <script src="{{asset('assets/vendors/nvd3/build/nv.d3.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery.sparkline/index.js')}}"></script>
    <script src="{{asset('assets/vendors/chart.js/dist/Chart.min.js')}}"></script>

    <script src="{{asset('assets/js/app.min.js')}}"></script>

    <!-- page js -->
    <script src="{{asset('assets/js/dashboard/dashboard.js')}}"></script>

</body>

</html>