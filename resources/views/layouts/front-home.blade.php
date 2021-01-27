<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <title>SS Agro</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="{{asset('frontend/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/home.responsive.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/home.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/testimonial.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/fontawesome.min.css')}}">
@yield('extra-css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>
<header class="header_area">

    <div class="container header">
        <div class="row">
            <div class="col-md-3">
                <div class="logo">

                    <a href="{{route('ssagro-home')}}" style="text-decoration: none">
                        <h2 class="text-uppercase text-danger">SS <span style="color: green">Agro</span></h2>
                    </a>
                </div>
            </div>
            <div class="col-md-9">

                <!--<div class="mainmenu_area">-->
                <!--<ul id="nav">-->
                <!--<li><a class="link-1" href="#">Home</a></li>-->
                <!--<li><a class="link-1" href="#">Buy Product</a></li>-->
                <!--<li><a class="link-1" href="#">Sell Product</a></li>-->
                <!--<li><a class="link-1" href="#">About Us </a></li>-->
                <!--<li><a class="link-1" href="#">Privacy Policy</a></li>-->
                <!--<li><a class="link-1" href="#"> CONTACT US</a></li>-->
                <!--</ul>-->

                <!--</div>-->
                <div class="top_menu_area">


                    <nav class="navbar navbar-expand-sm" style="background: antiquewhite" id="top_nav">

                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('ssagro-home')}}">Home</a>
                            </li>
                            <!-- Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    Products
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item " href="{{route('buy-products')}}">Buy Products</a>
                                    <a class=" dropdown-item "   href="{{route('sell-products')}}">Sell Products</a>
                                </div>
                            </li>



                            <li class="nav-item">
                                <a class="nav-link" href="{{route('about')}}">About us</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('faq')}}">F.A.Q</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>

        </div>

    </div>

</header>



@yield('content')



{{--<section class="footer_area">--}}

    {{--<div class="container footer">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}

                {{--<div class="f_text">--}}
                    {{--<h4>&copy; SS AGRO All Rights Reserved 2019</h4>--}}

                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}




{{--</section>--}}





<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/fontawesome.min.js')}}"></script>
@yield('extra-js')

<!--<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>-->




</body>

</html>
