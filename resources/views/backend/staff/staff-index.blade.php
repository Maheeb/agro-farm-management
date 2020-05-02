@extends('layouts.employee')

@section('extra-css')


    <link rel="stylesheet" href="{{asset('backend/css/staff.css')}}">

@stop



@section('content')

    <section class="cv_area">
        <div class="container-fluid">
             <div class="row">

                 @if ($empInfos)


                <div class="col-md-12">

                    <div class="p_info">

                    <h2>Personal Information</h2>

                        <br><br>
                    <img width="300px" height="300px" src="{{asset('backend/img/'.$empInfos->image)}}" alt="">

                        <br><br>
                    <p><span style="font-family: italic;font-weight: bold; color: orangered">Name:</span>&nbsp;  {{$empInfos->emp_name}}</p>
                    <p><span style="font-family: italic;font-weight: bold; color: orangered">Designation:</span>&nbsp;  {{$empInfos->designation}}</p>
                    <p><span style="font-family: italic;font-weight: bold; color: orangered">Address:</span>&nbsp;              {{$empInfos->emp_address}}</p>
                    <p><span style="font-family: italic;font-weight: bold; color: orangered">Employee Id:</span>&nbsp;{{$empInfos->emp_id}}</p>
                    <p><span style="font-family: italic;font-weight: bold; color: orangered">Joining Date:</span>&nbsp;{{$empInfos->joining_date}}</p>
                    <p><span style="font-family: italic;font-weight: bold; color: orangered">Blood Group:</span>&nbsp;{{$empInfos->emp_blood_group}}</p>
                    <p><span style="font-family: italic;font-weight: bold; color: orangered">NID:</span>&nbsp;{{$empInfos->emp_nid}}</p>


                    </div>

                </div>

                     @else

                     <h1>No data exists</h1>
                 @endif
            </div>
        </div>
    </section>

@stop