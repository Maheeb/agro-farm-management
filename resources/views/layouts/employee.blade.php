<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Employee area</title>

    <!-- Bootstrap Core CSS -->

    <link href="{{asset('backend/css/libs/blog-post.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/libs/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/libs/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/libs/metisMenu.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/libs/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/libs/styles.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/employee-info.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/bd.responsive.css')}}" rel="stylesheet">


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
            <a class="navbar-brand" href="/ssagro-home">  <h4 style="font-family: fantasy;margin-top: 3px"><span style="color: red">SS</span> <span style="color: green"> Agro</span></h4></a>
        </div>
        <!-- /.navbar-header -->



        <ul class="nav navbar-top-links navbar-right">


            <!-- /.dropdown -->

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


</nav>
</div>

<br><br>
<section class="sidebar_area">

    <div class="container">
<div class="sidenav">
    <a href="{{route('staff')}}">About</a>
    <a href="{{route('staff-salary')}}">Salary Information</a>
    {{-- <a href="{{route('staff-performance')}}">Performance</a> --}}
    <a href="{{route('staff-notice')}}">Notice</a>
</div>
    </div>
</section>


<div id="page-wrapper">

    {{--<h1 class="page-header"></h1>--}}

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
