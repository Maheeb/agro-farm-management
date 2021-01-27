@extends('layouts.admin')

@section('content')
    <h2 style="font-family: fantasy" class="text-center">Update Featured Buy</h2><br><br>
    @if(session('message'))
        <div class="alert alert-info">
            {{ session('message') }}
        </div>
    @endif



    {!! Form::model($fbuy,['method' => 'Patch','action'=>['FeatureBuyController@update',$fbuy->id],'files'=>true]) !!}

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
    {{csrf_field()}}
    <div class="form-group">

        {!! Form::label('product_title', 'Product Title:') !!}
        {!! Form::text('product_title', null , ['class' => 'form-control','required' => 'required']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('product_info', 'Product Info:') !!}
        {!! Form::text('product_info', null , ['class' => 'form-control','required' => 'required']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('image', 'Image:') !!}
        {!! Form::file('image', null , ['class' => 'form-control']) !!}

    </div>
    <div class="form-group">

        {!! Form::label('price', 'Price:') !!}
        {!! Form::text('price', null , ['class' => 'form-control','required' => 'required']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('category_name', 'Category Name:') !!}
        {!! Form::text('category_name', null , ['class' => 'form-control','required' => 'required']) !!}

    </div>

    <div class="form-group">

        {!! Form::submit('Update Featured Buy', ['class' => 'btn btn-primary']) !!}

    </div>

    {!! Form::close() !!}



@stop