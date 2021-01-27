@extends('layouts.admin')




@section('content')


    <h3 >Welcome to Admin Panel, <span class="text-success"> {!! Auth::user()->name !!}</span> </h3>

    <br><br><br>
    <div class="admin_profile">

    @if(Auth::user()->id==1)


        <div class="admin_info">
        <img width="200px" height="200px" src="{{asset('backend/img/img_avatar.png')}}" alt="">




            <br><br>
            <p><span style="font-family: italic;font-weight: bold; color: orangered">Name:</span>&nbsp;User 1  </p>
            <p><span style="font-family: italic;font-weight: bold; color: orangered">Designation:</span>&nbsp; Founder </p>
            <p><span style="font-family: italic;font-weight: bold; color: orangered">Address:</span>&nbsp;     Malibagh  </p>
            <p><span style="font-family: italic;font-weight: bold; color: orangered">Blood Group:</span>&nbsp;B+</p>
            <p><span style="font-family: italic;font-weight: bold; color: orangered">Passion:</span>&nbsp; Programming, watching movie</p>


        </div>


        @else

            <div class="admin_info">
                <img width="200px" height="200px" src="{{asset('backend/img/shaju.jpg')}}" alt="">




                <br><br>
                <p><span style="font-family: italic;font-weight: bold; color: orangered">Name:</span>&nbsp;Shaju Mollik  </p>
                <p><span style="font-family: italic;font-weight: bold; color: orangered">Designation:</span>&nbsp; Founder </p>
                <p><span style="font-family: italic;font-weight: bold; color: orangered">Address:</span>&nbsp;     Mohammadpur  </p>
                <p><span style="font-family: italic;font-weight: bold; color: orangered">Blood Group:</span>&nbsp;A+</p>
                <p><span style="font-family: italic;font-weight: bold; color: orangered">Passion:</span>&nbsp; Graphics design, playing Cricket</p>


            </div>

    @endif
    </div>


    <br><br><br>
@stop


@section('extra-js')
    <script>
        window.onload = function() {
            setTimeout(function () {
                location.reload()
            }, 10000);
        };
    </script>
@stop
