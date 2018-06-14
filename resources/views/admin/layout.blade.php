<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('themes/admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('themes/admin/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('themes/admin/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('themes/admin/vendor/morrisjs/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('themes/admin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('css')
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">MaketC CMS</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="admin/#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="{{route('admin.changePassword')}}"><i class="fa fa-user fa-fw"></i> Change
                            Password</a>
                    </li>
                    {{--<li><a href="admin/#"><i class="fa fa-gear fa-fw"></i> Settings</a>--}}
                    {{--</li>--}}
                    <li class="divider"></li>
                    <li><a href="{{route('admin.logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>

        </ul>
        <!-- /.navbar-top-links -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="{{route('admin.home')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{route('admin.order.list')}}"> Đặt hàng</a>
                    </li>
                    <li>
                        <a href="admin/#"><i class="fa fa-cube fa-fw"></i> Sản Phẩm<span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse in" aria-expanded="true">
                            <li>
                                <a href="{{route('admin.product.list')}}">Sản Phẩm</a>
                            </li>
                            <li>
                                <a href="{{route('admin.package.list')}}">Quy Cách Đóng Gói</a>
                            </li>
                            <li>
                                <a href="{{route('admin.product.category.list')}}">Danh Mục</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="admin/#"><i class="fa fa-newspaper-o fa-fw"></i> Bài Viết<span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse in" aria-expanded="true">
                            <li>
                                <a href="{{route('admin.post.list')}}">Bản tin</a>
                            </li>
                            <li>
                                <a href="{{route('admin.post.about')}}">Giới thiệu</a>
                                <a href="{{route('admin.post.delivery')}}">Chính sách giao hàng</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="admin/#"><i class="fa fa-wrench fa-fw"></i> Cài Đặt<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse in">
                            <li>
                                <a href="{{route('admin.settings.info')}}">Cài đặt trang web</a>
                            </li>
                            <li>
                                <a href="">Cài đặt email</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-header" style="text-transform: uppercase; pointer-events: none"><a>@yield('title')</a>
                </h4>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">@include('flash::message')</div>

            @yield('pageContent')
        </div>
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset('themes/admin/vendor/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('themes/admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('themes/admin/vendor/metisMenu/metisMenu.min.js')}}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{asset('themes/admin/vendor/raphael/raphael.min.js')}}"></script>
<script src="{{asset('themes/admin/vendor/morrisjs/morris.min.js')}}"></script>
<script src="{{asset('themes/admin/data/morris-data.js')}}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{asset('themes/admin/dist/js/sb-admin-2.js')}}"></script>

@yield('scripts')

</body>

</html>
