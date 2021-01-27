<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->

    <link href="{{asset('backend/css/libs/blog-post.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/libs/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/libs/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/libs/metisMenu.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/libs/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/libs/styles.css')}}" rel="stylesheet">


    {{--<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    @yield('extra-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
{{--    <script src="{{asset('backend/js/libs/jquery.js')}}"></script>--}}



</head>

<body id="admin-page">
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
            <a class="navbar-brand" href="{{ route('ssagro-home') }}">Home</a>
        </div>
        <!-- /.navbar-header -->



        <ul class="nav navbar-top-links navbar-right">


            <!-- /.dropdown -->

            <li class="dropdown">
                <a class="dropdown-toggle"  data-toggle="dropdown" href="">
                    <i class="fa fa-bell"></i>
                    @if (auth()->user()->unreadNotifications->count())
                        <span class="badge badge-light">{{auth()->user()->unreadNotifications->count()}}</span>
                    @endif
                </a>

            <ul class="dropdown-menu">

                <li ><a style="color: green" href="{{route('markRead')}}">Mark all as read</a></li>
                @foreach (auth()->user()->unreadNotifications as $notification)
                    <li style="background-color: lightgrey "><a href="{{route('all-orders.index')}}">{{$notification->data['data']}}</a>
                    </li>
                @endforeach

                {{--@foreach (auth()->user()->readNotifications as $notification)--}}
                    {{--<li><a href="https://www.google.com.bd">{{$notification->data['data']}}</a>--}}
                    {{--</li>--}}
                {{--@endforeach--}}

            </ul>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">

                    <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->


        </ul>






        {{--<ul class="nav navbar-nav navbar-right">--}}
        {{--@if(auth()->guest())--}}
        {{--@if(!Request::is('auth/login'))--}}
        {{--<li><a href="{{ url('/auth/login') }}">Login</a></li>--}}
        {{--@endif--}}
        {{--@if(!Request::is('auth/register'))--}}
        {{--<li><a href="{{ url('/auth/register') }}">Register</a></li>--}}
        {{--@endif--}}
        {{--@else--}}
        {{--<li class="dropdown">--}}
        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>--}}
        {{--<ul class="dropdown-menu" role="menu">--}}
        {{--<li><a href="{{ url('/auth/logout') }}">Logout</a></li>--}}

        {{--<li><a href="{{ url('/admin/profile') }}/{{auth()->user()->id}}">Profile</a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--@endif--}}
        {{--</ul>--}}





        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    <li>
                        <a href="/admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>Orders<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                {{--                                <a href="{{route('tariffs.index')}}">All Tariffs</a>--}}
                                <a href="{{route('all-orders.index')}}">All Orders</a>
                            </li>

                            {{--<li>--}}
                                {{--                                <a href="{{route('tariffs.create')}}">Create Tariffs</a>--}}
                                {{--<a href="{{route('featured-buy.create')}}">Create Featured Buy</a>--}}
                            {{--</li>--}}

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>Information<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('information-employee.all')}}">Employee</a>
                            </li>

                            <li>
                                <a href="{{route('information-product.all')}}">Products</a>
                            </li>
                            <li>
                                <a href="{{route('buysell.all')}}">Overview</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>



                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>Employee Info<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('employee.info')}}">All Employee Info</a>
                            </li>

                            {{--<li>--}}
                            {{----}}
                            {{--<a href="{{route('featured-buy.create')}}">Create Featured Buy</a>--}}
                            {{--</li>--}}

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>Employee Salary<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('employee-salary.index')}}">All Employee Salary info</a>
                            </li>

                            <li>

                            <a href="{{route('employee-salary.create')}}">Create Information</a>

                                <a href="{{route('employee-advanced-salary.index')}}">Advanced Salary info</a>
                                <a href="{{route('employee-advanced-salary.create')}}">Create Advanced Salary</a>



                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>Employee Notice<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('employee-notice.index')}}">All Notices</a>
                            </li>

                            <li>

                                <a href="{{route('employee-notice.create')}}">Create Notice</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>Employee Performance<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('employee-performance.index')}}">All Performances</a>
                            </li>

                            <li>

                                <a href="{{route('employee-performance.create')}}">Create Performance</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>







                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>Categories<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('category')}}">Create Categories</a>
                            </li>

                            {{--<li>--}}
                            {{----}}
                            {{--<a href="{{route('featured-buy.create')}}">Create Featured Buy</a>--}}
                            {{--</li>--}}

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>




                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>Products<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('products.index')}}">All Products</a>
                            </li>

                            <li>
                                <a href="{{route('products.create')}}">CreateProducts</a>
                            </li>

                            {{--<li>--}}
                            {{----}}
                            {{--<a href="{{route('featured-buy.create')}}">Create Featured Buy</a>--}}
                            {{--</li>--}}

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>


                </ul>


            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>





    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="/profile"><i class="fa fa-dashboard fa-fw"></i>Profile</a>
                </li>





            </ul>

        </div>

    </div>

</div>


<div id="page-wrapper">

                <h1 class="page-header"></h1>

                @yield('content')

</div>


<!-- Page Content -->
{{--<div id="page-wrapper">--}}
    {{--<div class="container-fluid">--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-12">--}}
                {{--<h1 class="page-header"></h1>--}}

                {{--@yield('content')--}}
            {{--</div>--}}
            {{--<!-- /.col-lg-12 -->--}}
        {{--</div>--}}
        {{--<!-- /.row -->--}}
    {{--</div>--}}
    {{--<!-- /.container-fluid -->--}}
{{--</div>--}}
<!-- /#page-wrapper -->


<!-- /#wrapper -->

<!-- jQuery -->

<script src="{{asset('backend/js/libs/bootstrap.js')}}"></script>
<script src="{{asset('backend/js/libs/metisMenu.js')}}"></script>
<script src="{{asset('backend/js/libs/sb-admin-2.js')}}"></script>
<script src="{{asset('backend/js/libs/scripts.js')}}"></script>



{{--@yield('footer')--}}

@yield('extra-js')



</body>

</html>
