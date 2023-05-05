<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/html/vertical-dark-menu/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Apr 2023 01:02:06 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> {{isset($title) && !empty($title) ? $title : 'Dashboard'}} </title>
    
    <link rel="icon" type="image/x-icon" href="https://designreset.com/cork/html/src/assets/img/favicon.ico"/>
    
    <script src="{{asset('admin/assets/js/loader.js')}}"></script>
    
    @yield('style')
    @include('admin.layouts._style')

</head>
<body class=" layout-boxed">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    @include('admin.layouts._header')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container " id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('admin.layouts._sidebar')
        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            @yield('content')
            <!--  BEGIN FOOTER  -->
            @include('admin.layouts._footer')
            <!--  END CONTENT AREA  -->
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    @include('admin.layouts._script')
    @yield('scripts')

</body>

<!-- Mirrored from designreset.com/cork/html/vertical-dark-menu/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Apr 2023 01:02:13 GMT -->
</html>