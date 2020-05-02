@extends('layouts.front-home')

@section('extra-css')

    <link rel="stylesheet" href="{{asset('frontend/css/ssagro-contact.css')}}">


@endsection


@section('content')


    <section class="contact_img_area">

        <img src="{{asset('frontend/img/contact.png')}}" style="width: 100%" height="400px" alt="">
        
        
    </section>

    <section class="contact_main_area">

        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="address">

                            <h3>Address</h3>
                            <p>SS Agro Limited</p>
                            <p>Quisque ac tellus at neque elementum pretium. Narayanganj</p>
                            <p>Tel: 9700000</p>
                            <p>Mobile: 01780000000,01900000002</p>
                            <p>Fax: 8136557</p>

                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="contact_form">

                            <h3 class="">Leave Us A Message</h3>

                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {!! session()->get('success')!!}
                                </div>
                            @endif
                            {!! Form::open(['method' => 'POST','action'=>'FrontHomeController@contactStore','files'=>true]) !!}
                            {{csrf_field()}}
                            <div class="form-group-md">

                                {{--{!! Form::label('Your Name', 'Your Name:') !!}--}}
                                {{--{!! Form::text('name',null, ['class' => 'form-control','placeholder'=>'Enter your name', 'cols' => 20, 'rows' =>10,]) !!}--}}

                                <label for="Name">Name:</label>
                                <br>
                                <input type="text" name="name" placeholder="Your name here" style="width: 65%;height: 30px;padding: 12px">


                            </div>

                            <br>

                            <div class="form-group-md">
                                <label for="Name">Mobile:</label>
                                <br>
                                <input type="text" name="mobile" placeholder="Your Mobile number here.." style="width: 65%;height: 30px;padding: 12px">


                            </div>

                                <br>
                            <div class="form-group-md">
                                <label for="Name">Message:</label>
                                <br>
                                <textarea name="message" placeholder="Your message here.." style="width: 65%;height: 120px;padding: 12px"></textarea>


                            </div>

                                <br>

                                <button type="submit" class="btn btn-success">Submit</button>

{{--                                {!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}--}}

                            {!! Form::close() !!}
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