<!doctype html>
<!--[if lte IE 9]>     <html lang="{{ app()->getLocale() }}" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="{{ app()->getLocale() }}" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>Moropass</title>

    <meta name="description" content="site des service online">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="moropass">
    <meta property="og:site_name" content="moropass">
    <meta property="og:description" content="moropass">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{asset('assets/img/favicons/favico.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/img/favicons/favicon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/favicons/apple-touch-icon-180x180.png')}}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Codebase framework -->
    <link rel="stylesheet" id="css-main" href="{{asset('assets/css/codebase.min.css')}}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

       
        <link rel="stylesheet" href="{{asset('assets/js/plugins/dropzonejs/min/dropzone.min.css')}}">
    </head>
    <body>
    <!-- Page Container sidebar-o-->
    
    <div id="page-container" class="sidebar-inverse side-scroll page-header-fixed side-trans-enabled sidebar-o">

            @include('layouts.profile')
                @if( Auth::user()->is_admin )
                    @include('layouts.header_admin')
                @else
                    @include('layouts.header')
                @endif
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">

                    @yield('content')
                </div>
            </main>

            <!-- END Main Container -->
           <!-- Footer -->
    <footer id="page-footer" class="opacity-0">
        <div class="content py-20 font-size-xs clearfix">
            <div class="float-center">
                <a class="font-w600" href="https://goo.gl/po9Usv" target="_blank">Moropass 1.0</a> &copy; <span class="js-year-copy">2019</span>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
        </div>

        <!-- Codebase Core JS -->
        <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/core/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('assets/js/core/jquery.scrollLock.min.js')}}"></script>
        <script src="{{asset('assets/js/core/jquery.appear.min.js')}}"></script>
        <script src="{{asset('assets/js/core/jquery.countTo.min.js')}}"></script>
        <script src="{{asset('assets/js/core/js.cookie.min.js')}}"></script>
        <script src="{{asset('assets/js/codebase.js')}}"></script>
        <!-- Page JS Plugins -->
        <script src="{{asset('assets/js/plugins/chartjs/Chart.bundle.min.js')}}"></script>
        <!-- Page JS Code -->
        <script src="{{asset('assets/js/pages/be_pages_dashboard.js')}}"></script>
        <script src="{{asset('assets/js/pages/profile_validation.js')}}"></script>
    @yield('page_script')
    </body>
</html>