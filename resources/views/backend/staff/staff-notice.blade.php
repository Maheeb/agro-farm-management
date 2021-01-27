@extends('layouts.employee')

@section('extra-css')

    <link rel="stylesheet" href="{{asset('backend/css/notice.css')}}">

@stop


@section('content')


    <h4 style=" border-bottom: 5px solid olivedrab; font-size: 30px; color: brown" class="text-center">Important Notices</h4>
    <br><br><br>

    @foreach($empNotices as $empNotice)

    <ul class="pinboards">
        <li>
            <div>
                <small>{{$empNotice->date}}</small>
                <h4>{{$empNotice->title}}</h4>
                {{$empNotice->body}}

            </div>
        </li>
    </ul>



    @endforeach

@stop