<!doctype html>
<html lang="{{ app()->getLocale() }}">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="{{ asset('Assets-Admin/img/favicon.html') }}">

    <title>Dashboard - Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('Assets-Admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Assets-Admin/css/bootstrap-reset.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('Assets-Admin/assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('Assets-Admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('Assets-Admin/css/owl.carousel.css') }}" type="text/css">
    <link href="{{ asset('Assets-Admin/css/slidebars.css') }}" rel="stylesheet">
    <link href="{{ asset('Assets-Admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('Assets-Admin/css/style-responsive.css') }}" rel="stylesheet" />
</head>
    <body>
        {{-- index --}}
        <div id="app"></div>
    </body>
    
    <!-- js placed at the end of the document so the pages load fasterr -->
    <script src="{{ asset('Assets-Admin/js/jquery.js') }}"></script>
    <script src="{{ asset('Assets-Admin/js/bootstrap.min.js') }}"></script>
    <script class="include" type="text/javascript" src="{{ asset('Assets-Admin/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('Assets-Admin/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('Assets-Admin/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('Assets-Admin/js/jquery.sparkline.js') }}" type="text/javascript"></script>
    <script src="{{ asset('Assets-Admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
    <script src="{{ asset('Assets-Admin/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('Assets-Admin/js/jquery.customSelect.min.js') }}"></script>
    <script src="{{ asset('Assets-Admin/js/respond.min.js') }}"></script>
    <script src="{{ asset('Assets-Admin/js/slidebars.min.js') }}"></script>
    <script src="{{ asset('Assets-Admin/js/common-scripts.js') }}"></script>
    <script src="{{ asset('Assets-Admin/js/sparkline-chart.js') }}"></script>
    <script src="{{ asset('Assets-Admin/js/easy-pie-chart.js') }}"></script>
    <script src="{{ asset('Assets-Admin/js/count.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</html>
