@extends('layouts.front-home')


@section('extra-css')

    <link rel="stylesheet" href="{{asset('frontend/css/ssagro-about.css')}}">

@endsection

@section('content')


    <section class="about_img_area">

        <img src="{{asset('frontend/img/about_us.jpg')}}" style="width: 100%;height: 400px" alt="">
    
    </section>


    <section class="about_main">

        <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="about_desc">
                        <h3>About Us</h3>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rhoncus augue felis, vel eleifend risus lacinia vitae. Integer et tincidunt nisi, quis sodales tortor. Vivamus porttitor diam a felis pharetra, non consectetur leo fringilla. Cras dignissim tortor hendrerit sodales vehicula. Pellentesque rhoncus urna nec varius faucibus. Nulla maximus eros eget aliquam gravida. Nullam finibus metus at aliquam condimentum. Vivamus et pellentesque lectus. Sed varius fermentum felis, nec sodales elit fringilla id. Donec egestas lectus et justo congue, eu posuere urna convallis. Maecenas et orci a quam pretium gravida vel sit amet enim. Cras quis euismod nibh. Donec aliquet semper tincidunt. Etiam commodo et eros fringilla sollicitudin.ব

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
                        <h3>Our Location</h3>

                            <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=narayanganj&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://periodic-table-of-elements.net"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1110px;}</style></div>
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
                        <h4>&copy; AZMAEEN All Rights Reserved 2020</h4>

                    </div>

                </div>
            </div>
        </div>




    </section>

@stop



@section('extra-js')



@endsection