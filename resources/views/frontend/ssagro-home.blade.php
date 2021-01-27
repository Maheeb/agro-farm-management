@extends('layouts.front-home')

@section('extra-js')


@endsection

@section('content')



    <section class="slider_area">

        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('frontend/img/slider_1.jpg') }}" alt="Los Angeles" width="" height="">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('frontend/img/slider_2.jpg') }}" alt="Chicago" width="" height="">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('frontend/img/slider_3.jpg') }}" alt="New York" width="" height="">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

    </section>

    <section class="welcome_area">
        <div class="container welcome">
            <div class="row">
                <div class="col-md-12">
                    <div class="wc_text">
                        <h1>Welcome To <span class="text-uppercase text-danger"> SS </span><span style="color: green">
                                AGRO</span></h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis commodo nisl id
                            imperdiet. Nulla massa magna, euismod ut tempor et, dictum nec eros. Nunc vel pulvinar magna.
                            Nam ullamcorper nulla sit amet aliquam cursus. Pellentesque tincidunt, nulla quis imperdiet
                            aliquet, odio ipsum ultricies est, at varius erat ligula sit amet nisl. Donec viverra, sem in
                            tristique posuere, sem nisl blandit tellus, non maximus turpis quam at magna. Curabitur non
                            ligula quis nunc porta eleifend. Ut gravida, odio sit amet commodo volutpat, lorem lorem
                            ultricies leo, quis ultricies ligula quam ut felis.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured_buy_area">

        <div class="fba_text">
            <h1 class="text-uppercase">Featured Products for Buy</h1>
        </div>


        <div class="container">

            <div class="row">

                @foreach ($fbuys as $fbuy)
                    <div class="col-md-3">

                        <div class="card" style="">
                            <img class="card-img-top" style="" src="{{ asset('frontend/img/products/' . $fbuy->image) }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">{{ $fbuy->name }}</h4>
                                <h5 class="card-text">{{ $fbuy->details }}</h5>
                                <p><span class="text-danger text-uppercase" style="">Price:</span> {{ $fbuy->price }} Taka
                                </p>
                                <a href="{{ route('shop.buy.show', $fbuy->slug) }}" class="btn btn-success">Buy Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>

        </div>

    </section>


    <section class="featured_sell_area">

        <div class="fbs_text">
            <h1 class="text-uppercase">Featured Products for Sell</h1>
        </div>


        <div class="container">

            <div class="row">



                @foreach ($fsells as $fsell)
                    <div class="col-md-3">

                        <div class="card" style="">
                            <img class="card-img-top" style="" src="{{ asset('frontend/img/products/' . $fsell->image) }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">{{ $fsell->name }}</h4>
                                <h5 class="card-text">{{ $fsell->details }}</h5>
                                <p><span class="text-danger text-uppercase" style="">Price:</span> {{ $fsell->price }} Taka
                                </p>
                                <a href="{{ route('shop.sell.show', $fsell->slug) }}" class="btn btn-success">Sell Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>

        </div>

    </section>



    <section class="testimonial_area">




    </section>

    <section class="footer_area">

        <div class="container footer">
            <div class="row">
                <div class="col-md-12">

                    <div class="f_text">
                        <h4>&copy; Md Azmaeen, All rights reserved</h4>

                    </div>

                </div>
            </div>
        </div>




    </section>

@stop
