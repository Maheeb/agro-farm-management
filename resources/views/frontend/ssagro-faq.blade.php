@extends('layouts.front-home')


@section('extra-css')

    <link rel="stylesheet" href="{{asset('frontend/css/ssagro-faq.css')}}">
@endsection

@section('content')

<section class="faq_img_area">

    <img src="{{asset('frontend/img/faq-1.jpeg')}}"  style="width: 100%" alt="">

</section>


<section class="faq_qa_area">

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="faq_body">
                <button class="accordion">আমাদের ওয়েবসাইট কিভাবে কাজ করে?</button>
                <div class="panel">
                    <p>আপনি আমাদের সাইটে এসে আপনার প্রয়োজন অনুযায়ী জকোন পণ্য অর্ডার করতে পারেন । এছাড়াও আমাদের দেওয়া তালিকা অনুযায়ী আপনার কাছে থাকা পণ্য বিক্রি করতে পারেন আমাদের কাছে । অর্ডার করার পর আপনার প্রদত্ত মোবাইল নাম্বারে দ্রুত সময়ের মধ্যে আপনার সাথে যোগাযোগ করবেন আমাদের প্রতিনিধি ।</p>
                </div>

                <button class="accordion">আমাদের উদ্দেশ্য কি?</button>
                <div class="panel">
                    <p>আমাদের উদ্দেশ্য নিজস্ব খামারে উৎপাদিত কৃষি পণ্য  যতদূর সম্ভব সবার কাছে সহজলভ্য করে তোলা । এছাড়াও কৃষক জেন্ তার উৎপাদিত পণ্য আমাদের চাহিদা অনুযায়ী আমাদের কাছে বিক্রি করতে পড়তে সেটাও আমাদের অন্যতম উদ্দেশ্য ।</p>
                </div>

                <button class="accordion">কিভাবে পণ্য ক্রয় করবেন?</button>
                <div class="panel">
                    <p>আমাদের সাইটের প্রোডাক্টস অপসন -এ গিয়ে বাই প্রোডাক্টস অপশন -এ যান । সেখানে রাখা অগণিত পণ্যের মধ্যে থেকে বেঁচে নিন আপনার কাঙ্খিত পণ্য । </p>
                </div>

                    <button class="accordion">কিভাবে পণ্য বিক্রি করবেন ?</button>
                    <div class="panel">
                        <p>আমাদের সাইটের প্রোডাক্টস অপসন -এ গিয়ে সেল প্রোডাক্টস অপশন -এ যান । সেখানে আমরা যেসকল পণ্য আপনাদের কাছ থেকে কিনতে ইচ্ছুক তার একটি তালিকা দেওয়া আছে । তালিকা অনুযায়ী পণ্য আপনার কাছে থাকলে আপনি তা সহজেই বিক্রি করে ফেলতে পারেন আমাদের কাছে ।</p>
                    </div>

                    <button class="accordion">আর্থিক লেনদেন কিভাবে সম্পন্ন হবে ?</button>
                    <div class="panel">
                        <p>আপনার পণ্য হাতে পাওয়ার সাথে সাথেই আমাদের প্রতিনিধির কাছে সরাসরি মূল্য পরিশোধ করতে পারবেন । এছাড়াও যখন আমরা আপনার কাছ থেকে পণ্য কিনব তখন আপনার পণ্য হাতে পাওয়ার সাথেই সাথেই আপনাকে মূল্য বুঝিয়ে দেওয়া হবে । </p>
                    </div>

                    <button class="accordion">অর্ডার করা পণ্য কতদিনের মধ্যে হাতে পাব ? </button>
                    <div class="panel">
                        <p>আপনার অর্ডার  করা পণ্য সর্বোচ্চ সাতদিন সময়ের মধ্যে পৌঁছে দেওয়া হবে আপনার হাতে । </p>
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
                    <h4>&copy; SS AGRO All Rights Reserved 2019</h4>

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