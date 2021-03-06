<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Uears Panel</title>

    <!-- Bootstrap -->
    <link href="{{ url('adminpanel') }}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ url('adminpanel') }}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ url('adminpanel') }}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ url('adminpanel') }}/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ url('adminpanel') }}/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ url('adminpanel') }}/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ url('adminpanel') }}/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ url('adminpanel') }}/build/css/custom.min.css" rel="stylesheet">

    <link href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        @include('common::layouts.nav')

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                {{ auth()->guard('admin')->user()->name }}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li>
                                    <a href="{{ url('admin-panel/settings') }}">
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href="{{ route('admin_logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
            @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Made with <i class="fa fa-heart"> by </i> <a href="https://www.linkedin.com/in/basel-osama-a55421168/">Basel osama</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{ url('adminpanel') }}/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ url('adminpanel') }}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="{{ url('adminpanel') }}/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="{{ url('adminpanel') }}/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="{{ url('adminpanel') }}/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="{{ url('adminpanel') }}/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="{{ url('adminpanel') }}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="{{ url('adminpanel') }}/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="{{ url('adminpanel') }}/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="{{ url('adminpanel') }}/vendors/Flot/jquery.flot.js"></script>
<script src="{{ url('adminpanel') }}/vendors/Flot/jquery.flot.pie.js"></script>
<script src="{{ url('adminpanel') }}/vendors/Flot/jquery.flot.time.js"></script>
<script src="{{ url('adminpanel') }}/vendors/Flot/jquery.flot.stack.js"></script>
<script src="{{ url('adminpanel') }}/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="{{ url('adminpanel') }}/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="{{ url('adminpanel') }}/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="{{ url('adminpanel') }}/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="{{ url('adminpanel') }}/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="{{ url('adminpanel') }}/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="{{ url('adminpanel') }}/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="{{ url('adminpanel') }}/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{ url('adminpanel') }}/vendors/moment/min/moment.min.js"></script>
<script src="{{ url('adminpanel') }}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="{{ url('adminpanel') }}/build/js/custom.min.js"></script>

<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

@stack('js')

</body>
</html>
