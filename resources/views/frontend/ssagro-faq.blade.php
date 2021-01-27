@extends('layouts.front-home')


@section('extra-css')

    <link rel="stylesheet" href="{{ asset('frontend/css/ssagro-faq.css') }}">
@endsection

@section('content')

    <section class="faq_img_area">

        <img src="{{ asset('frontend/img/faq-1.jpeg') }}" style="width: 100%" alt="">

    </section>


    <section class="faq_qa_area">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="faq_body">
                        <button class="accordion">Lorem ipsum dolor sit amet?</button>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis commodo nisl id
                                imperdiet. Nulla massa magna, euismod ut tempor et, dictum nec eros. Nunc vel pulvinar
                                magna. Nam ullamcorper nulla sit amet aliquam cursus. </p>
                        </div>

                        <button class="accordion">Lorem ipsum dolor sit amet?</button>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis commodo nisl id
                                imperdiet. Nulla massa magna, euismod ut tempor et, dictum nec eros. Nunc vel pulvinar
                                magna. Nam ullamcorper nulla sit amet aliquam cursus. </p>
                        </div>

                        <button class="accordion">Lorem ipsum dolor sit amet?</button>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis commodo nisl id
                                imperdiet. Nulla massa magna, euismod ut tempor et, dictum nec eros. Nunc vel pulvinar
                                magna. Nam ullamcorper nulla sit amet aliquam cursus. </p>
                        </div>

                        <button class="accordion">Lorem ipsum dolor sit amet?</button>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis commodo nisl id
                                imperdiet. Nulla massa magna, euismod ut tempor et, dictum nec eros. Nunc vel pulvinar
                                magna. Nam ullamcorper nulla sit amet aliquam cursus. </p>
                        </div>

                        <button class="accordion">Lorem ipsum dolor sit amet?</button>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis commodo nisl id
                                imperdiet. Nulla massa magna, euismod ut tempor et, dictum nec eros. Nunc vel pulvinar
                                magna. Nam ullamcorper nulla sit amet aliquam cursus. </p>
                        </div>

                        <button class="accordion">Lorem ipsum dolor sit amet? </button>
                        <div class="panel">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis commodo nisl id
                                imperdiet. Nulla massa magna, euismod ut tempor et, dictum nec eros. Nunc vel pulvinar
                                magna. Nam ullamcorper nulla sit amet aliquam cursus. </p>
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

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }

    </script>



@endsection
