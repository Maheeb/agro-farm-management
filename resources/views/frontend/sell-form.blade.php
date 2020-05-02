@extends('layouts.front-home')

@section('extra-css')
    <link rel="stylesheet" href="{{asset('frontend/css/sell-form.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/magnify.css')}}">
@stop

@section('content')


    <section class="sell_info_form_area">

        <div class="container">
            <div class="row">
                <div id="imgzoom" class="col-md-6">


                    {{--<img src="{{asset('frontend/img/small.jpg')}}" alt="" width="480" height="852" class="magnify-image" data-magnify-src="{{asset('frontend/img/large.jpg')}}">--}}

                    <img src="{{asset('frontend/img/products/'.$image)}}" width="400" height="300" class="magnify-image" data-magnify-src="{{asset('frontend/img/products/'.$image)}}">

                    <br><br>
                    <p id="prod_name"> <strong>Name: </strong>  {{$name}}</p>
                    <p id="description"><strong>Details: </strong> {{$desc}}  </p>
                    <p id="price"><strong>Price:</strong> {{$price}} Taka </p>


                </div>

                <div class="col-md-6">

                    <div class=" cust_buy_form">
                        {{--@if(session('message'))--}}
                        {{--<div class="alert alert-info">--}}
                        {{--                                {{ session('message') }}--}}
                        {{--{!! session('message') !!}--}}
                        {{--</div>--}}
                        {{--@endif--}}
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {!! session()->get('success')!!}
                            </div>
                        @endif

                        {!! Form::open(['method' => 'POST','action'=>'FrontHomeController@sellOrder','files'=>true]) !!}
                        {{csrf_field()}}

                        @if(count($errors))
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.
                                <br/>
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {{--<input type="hidden" id="buyOrderId" name="buyOrder" value= '$id'>--}}

                        <div class="form-group-md">

                            {!! Form::hidden('id', $id, ['class' => 'form-control']) !!}

                        </div>

                        <div class="form-group-md">
                            {!! Form::label('product_name', 'Product Name:') !!}
                            {!! Form::text('product_name', $name, ['class' => 'form-control','readonly'=>'true']) !!}

                        </div>

                        <br>

                        <div class="form-group-md">

                            {!! Form::label('customer_name', 'Customer Name:') !!}
                            {!! Form::text('customer_name',null, ['class' => 'form-control','placeholder'=>'Enter your name']) !!}

                        </div>


                        <br>
                        <div class="form-group-md">

                            {!! Form::label('location', 'Location:') !!}
                            {!! Form::text('location',null , ['class' => 'form-control','placeholder'=>'Enter your location']) !!}

                        </div>

                        <br>
                        <div class="form-group-md">

                            {!! Form::label('mobile', 'Mobile:') !!}
                            {!! Form::text('mobile',null , ['class' => 'form-control','placeholder'=>'Enter your mobile number']) !!}

                        </div>
                        <br>
                        <div class="form-group-md">

                            {!! Form::label('amount', 'Quantity ('.$unit.'):') !!}
                            {!! Form::number('amount',null , ['class' => 'form-control','placeholder'=>'Enter amount']) !!}

                        </div>

                        <br><br>
                        <div class="text-center form-group-md">

                            {!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}

                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="fact_area">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="facts_text">

                        <h3 class="text-center">Rules and Regulations ( নিয়মাবলী )</h3>

                        <br>
                        <p>১) আপনার তথ্য সমূহ নির্ভুলভাবে ইনপুট দিন ।</p>
                        <p>২) ইনপুট দেওয়ার সময় মোবাইল নাম্বার ভালভাবে চেক করুন ।</p>
                        <p>৩) সাবমিট করে কিছুক্ষন অপেক্ষা করুন ।</p>
                        <p>৪) আপনার প্রদত্ত মোবাইল নাম্বারে আপনার সাথে যোগাযোগ করা হবে।</p>
                    </div>


                </div>

            </div>

        </div>

    </section>



@endsection

@section('extra-js')
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="{{asset('frontend/js/jquery.magnify.js')}}"></script>
    <script>
        $(document).ready(function() {
            // Initiate magnification powers
            $('img').magnify();
        });

    </script>

@endsection

