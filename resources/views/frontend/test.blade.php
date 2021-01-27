@extends('layouts.front-home')

@section('content')




    {!! Form::open(['method' => 'POST','action'=>'FrontHomeController@fbuy','files'=>true]) !!}

    <div class="form-group">

        {!! Form::label('product_name', 'Product Name:') !!}
        {!! Form::text('product_name', $name,null , ['class' => 'form-control','readonly' => 'readonly']) !!}

    </div>


    <div class="form-group">

        {!! Form::submit('Create Featured Buy', ['class' => 'btn btn-primary']) !!}

    </div>

    {!! Form::close() !!}
@stop
