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
                        <h3>আমাদের কথা</h3>
                        <p> বর্তমান যুগ তথ্য প্রযুক্তির যুগ । বাংলাদেশ ঝড়ের বেগে এগিয়ে যাচ্ছে তথ্য প্রযুক্তিতে । পাশাপাশি এটা ভুলে গেলে চলবে না , আমাদের দেশ একটি কৃষি নির্ভর দেশ। সমগ্র দেশ ব্যাপকভাবে কৃষির উপর নির্ভরশীল । কৃষি আমাদের আদি পেশা হওয়া সত্ত্বেও তরুণ প্রজন্মের অনেকেই এই পেশায় আসতে উৎসাহী নয় । অন্যদিকে কৃষকরা পান না তাদের ফসলের ন্যায্য দাম । কম্পিউটার প্রকৌশল পড়া অবস্থাতেই আমাদের দুইজনের ইচ্ছা ছিল একজন সফল  উদ্যোক্তা হিসেবে নিজেদেরকে গড়ে তুলব । হঠাৎ মাথায় আসল তথ্য প্রযুক্তি এবং কৃষি এই দুটো জিনিষকে একত্রে করে যদি কিছু করা যেত তবে মন্দ হতো না । একইসাথে কৃষিকে পৌঁছে দেওয়া যেত মানুষের দোরগোড়ায় , কিছু মানুষের কর্মসংস্থান হত । সেই সাথে নিজেরাও পেতাম বেকারত্বের অভিশাপ থেকে মুক্তি । আর তাই তো এই ওয়েবসাইট টি বানানো । এখানে আমাদের কাছ থেকে কেনা যাবে নিজস্ব খামারে উৎপাদিত কৃষি পণ্য । অন্যদিকে কৃষকরা তাদের উৎপাদিত পণ্য আমাদের চাহিদা অনুযায়ী আমাদের কাছে বিক্রিও করতে পারবেন । প্রথম অবস্থায় ছোট পরিসরে শুরু হলেও আশা রাখি একদিন আমাদের এই স্বপ্ন একদিন আকাশ ছুঁবে ।

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
                        <h3>আমাদের অবস্থান</h3>

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
                        <h4>&copy; SS AGRO All Rights Reserved 2019</h4>

                    </div>

                </div>
            </div>
        </div>




    </section>

@stop



@section('extra-js')



@endsection