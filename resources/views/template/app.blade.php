<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ URL::asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/pace/pace.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/dist/css/skins/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/bower_components/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{ URL::asset('assets/bower_components/select2/dist/css/select2.min.css') }}">
    @yield('css')
    <style>
        .pace .pace-progress {
            background: #29d;
            position: fixed;
            z-index: 2000;
            top: 0;
            right: 100%;
            width: 100%;
            height: 2px;
        }
        textarea {
            resize: vertical;
        }
    </style>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
        <header class="main-header">
            <nav class="navbarCust">
                <div class="container">
                    <div class="navbar-header">
                        <img src="{{ ('/images/telkom.png') }}" class="navbar-img-brand" alt="User Image">
                    </div>
                    {{-- <div class="collapse navbar-collapse pull-left" id="navbar-collapse"> --}}
                           
                    {{-- </div> --}}
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="/images/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs">{{ Auth::user()->username }}</span>
                                </a>
                                <ul class="dropdown-menu" style="z-index: 999;">
                                    <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Followers</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Sales</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Friends</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="{{ route('logout') }}"
                                               class="btn btn-default btn-flat"
                                               onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="row text-center">
                      <div class="titleCust">
                         Partner <span class="title2"> Settlement System</span>
                      </div>
                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        {{--<a href="../../index2.html" class="navbar-brand">Partner Settlement System</a>--}}
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            @if(Auth::user()->role == 1)
                                <li><a href="{{ route('user.homepage') }}">Home</a></li>
                            @elseif(Auth::user()->role == 2)
                                <li><a href="{{ route('delivery.homepage') }}">Home</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dispute<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ route('delivery.billinggenerate') }}">Billing Generate</a></li>
                                        <li><a href="{{ route('delivery.proposedinvoice') }}">Proposed Invoice</a></li>
                                        <li><a href="{{ route('delivery.reconciliation') }}">Reconciliation</a></li>
                                        <li><a href="{{ route('delivery.viewbilling') }}">View Billing</a></li>
                                        <li><a href="{{ route('delivery.viewproposed') }}">View Proposed</a></li>
                                    </ul>
                                </li>
                            @elseif(Auth::user()->role == 3)
                                <li><a href="{{ route('partnert.homepage') }}">Home</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dispute<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ route('partner.proposed') }}">Proposed Invoice</a></li>
                                        <li><a href="{{ route('partner.reconciliation') }}">Reconciliation</a></li>
                                    </ul>
                                </li>
                            @elseif(Auth::user()->role == 4)
                                <li><a href="{{ route('settlement.homepage') }}">Home</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Evaluation<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ route('settlement.evaluation') }}">Proposed Invoice</a></li>
                                        <li><a href="{{ route('settlement.reconciliation') }}">Result</a></li>
                                    </ul>
                                </li>
                            @elseif(Auth::user()->role == 5)
                                <li><a href="{{ route('admin.homepage') }}">Home</a></li>
                                <li><a href="{{ route('admin.datastaging') }}">Data Staging</a></li>
                            @endif
                        </ul>

                    </div>
                    
                    {{--<div class="navbar-custom-menu">--}}
                        {{--<ul class="nav navbar-nav">--}}
                            {{--<!-- Messages: style can be found in dropdown.less-->--}}
                            {{--<li class="dropdown messages-menu">--}}
                                {{--<!-- Menu toggle button -->--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                                    {{--<i class="fa fa-envelope-o"></i>--}}
                                    {{--<span class="label label-success">4</span>--}}
                                {{--</a>--}}
                                {{--<ul class="dropdown-menu">--}}
                                    {{--<li class="header">You have 4 messages</li>--}}
                                    {{--<li>--}}
                                        {{--<!-- inner menu: contains the messages -->--}}
                                        {{--<ul class="menu">--}}
                                            {{--<li><!-- start message -->--}}
                                                {{--<a href="#">--}}
                                                    {{--<div class="pull-left">--}}
                                                        {{--<!-- User Image -->--}}
                                                        {{--<img src="/images/user2-160x160.jpg" class="img-circle" alt="User Image">--}}
                                                    {{--</div>--}}
                                                    {{--<!-- Message title and timestamp -->--}}
                                                    {{--<h4>--}}
                                                        {{--Support Team--}}
                                                        {{--<small><i class="fa fa-clock-o"></i> 5 mins</small>--}}
                                                    {{--</h4>--}}
                                                    {{--<!-- The message -->--}}
                                                    {{--<p>Why not buy a new awesome theme?</p>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="footer"><a href="#">See All Messages</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class="dropdown notifications-menu">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                                    {{--<i class="fa fa-bell-o"></i>--}}
                                    {{--<span class="label label-warning">10</span>--}}
                                {{--</a>--}}
                                {{--<ul class="dropdown-menu">--}}
                                    {{--<li class="header">You have 10 notifications</li>--}}
                                    {{--<li>--}}
                                        {{--<ul class="menu">--}}
                                            {{--<li><!-- start notification -->--}}
                                                {{--<a href="#">--}}
                                                    {{--<i class="fa fa-users text-aqua"></i> 5 new members joined today--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="footer"><a href="#">View all</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class="dropdown tasks-menu">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                                    {{--<i class="fa fa-flag-o"></i>--}}
                                    {{--<span class="label label-danger">9</span>--}}
                                {{--</a>--}}
                                {{--<ul class="dropdown-menu">--}}
                                    {{--<li class="header">You have 9 tasks</li>--}}
                                    {{--<li>--}}
                                        {{--<ul class="menu">--}}
                                            {{--<li><!-- Task item -->--}}
                                                {{--<a href="#">--}}
                                                    {{--<h3>--}}
                                                        {{--Design some buttons--}}
                                                        {{--<small class="pull-right">20%</small>--}}
                                                    {{--</h3>--}}
                                                    {{--<div class="progress xs">--}}
                                                        {{--<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">--}}
                                                            {{--<span class="sr-only">20% Complete</span>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="footer">--}}
                                        {{--<a href="#">View all tasks</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                </div>
            </nav>
        </header>
        <div class="content-wrapper">
            @yield('content')
        </div>
        <footer class="main-footer">
            <div class="container">Telkom Indonesia</div>
        </footer>
    </div>
</body>
<script src="{{ URL::asset('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ URL::asset('assets/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ URL::asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assets/bower_components/fastclick/lib/fastclick.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/pace/pace.min.js') }}"></script>
<script src="{{ URL::asset('assets/dist/js/adminlte.min.js') }}"></script>
<script src="{{ URL::asset('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ URL::asset('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
{{-- <script src="{{ URL::asset('assets/dist/js/demo.js') }}"></script> --}}
<script src="{{ URL::asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ URL::asset('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ URL::asset('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>
<script src="{{ URL::asset('assets/bower_components/datatables.net/js/jquery.dataTables.js') }}"></script>
<script src="{{ URL::asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.js') }}"></script>
<script src="{{ URL::asset('assets/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
@yield('js')
</html>
</html>