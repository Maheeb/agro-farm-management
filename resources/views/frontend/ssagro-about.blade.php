@extends('layouts.front-home')


@section('extra-css')

    <link rel="stylesheet" href="{{ asset('frontend/css/ssagro-about.css') }}">

@endsection

@section('content')


    <section class="about_img_area">

        <img src="{{ asset('frontend/img/about_us.jpg') }}" style="width: 100%;height: 400px" alt="">

    </section>


    <section class="about_main">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="about_desc">
                        <h3>About us</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis commodo nisl id
                            imperdiet. Nulla massa magna, euismod ut tempor et, dictum nec eros. Nunc vel pulvinar magna.
                            Nam ullamcorper nulla sit amet aliquam cursus. Pellentesque tincidunt, nulla quis imperdiet
                            aliquet, odio ipsum ultricies est, at varius erat ligula sit amet nisl. Donec viverra, sem in
                            tristique posuere, sem nisl blandit tellus, non maximus turpis quam at magna. Curabitur non
                            ligula quis nunc porta eleifend. Ut gravida, odio sit amet commodo volutpat, lorem lorem
                            ultricies leo, quis ultricies ligula quam ut felis. Pellentesque fermentum tellus vel dui
                            dignissim, nec ultricies lorem viverra. Nulla non lacus consectetur, volutpat ex hendrerit,
                            vestibulum eros. Sed sit amet tempor felis, sit amet bibendum urna. Etiam sagittis at mauris non
                            facilisis.

                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="about_location_area">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="location_main">
                        <h3>Location</h3>

                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=narayanganj&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                    href="https://periodic-table-of-elements.net"></a></div>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 500px;
                                    width: 600px;
                                }

                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 500px;
                                    width: 1110px;
                                }

                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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



@section('extra-js')



@endsection
