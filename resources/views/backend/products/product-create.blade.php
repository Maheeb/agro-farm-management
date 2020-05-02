@extends('layouts.admin')


@section('content')

    <section class="product_area">
        <div class="container-fluid">
                <div class="col-md-12">
    <h2 style="font-family: fantasy" class="text-center">Create Products</h2><br><br>
    @if(session('message'))
        <div class="alert alert-info">
            {{ session('message') }}
        </div>
    @endif


    {!! Form::open(['method' => 'POST','action'=>'ProductController@store','files'=>true]) !!}

    {{--@if(count($errors))--}}
        {{--<div class="alert alert-danger">--}}
            {{--<strong>Whoops!</strong> There were some problems with your input.--}}
            {{--<br/>--}}
            {{--<ul>--}}
                {{--@foreach($errors->all() as $error)--}}
                    {{--<li>{{ $error }}</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--@endif--}}
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


    <div class="row">
        <div class="form-group col-md-6">
            <label class="control-label col-sm-4" for="empName">Product Name:</label>
            <div class="controls  col-sm-6">
                {!! Form::text('name', null , ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group col-md-6">
            <label class="control-label col-sm-4" for="empName">Product Slug:</label>
            <div class="controls  col-sm-6">
                {!! Form::text('slug', null , ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>


    <div class="row">

        <div class="form-group col-md-6">
            <label class="control-label col-sm-4" for="empName">Product Details:</label>
            <div class="controls  col-sm-6">
                {!! Form::text('details', null , ['class' => 'form-control']) !!}
            </div>
        </div>



        <div class="form-group col-md-6">
            <label class="control-label col-sm-4" for="empName">Product Category: </label>
            <div class="controls  col-sm-6">
                {!! Form::select('category', $categories , ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>


    <div class="row">
    <div class="form-group col-md-6">

        <label class="control-label col-sm-3" for="empName">Image: </label>
        <div class="controls  col-sm-6">
            {!! Form::file('image', null , ['class' => 'form-control']) !!}
        </div>
    </div>


        <div class="form-group col-md-6">
            <label class="control-label col-sm-4" for="empName">Price:</label>
            <div class="controls  col-sm-6">
                {!! Form::text('price', null , ['class' => 'form-control']) !!}
            </div>
        </div>

    </div>

                    <div class="form-group col-md-6">
                        <label class="control-label col-sm-4" for="empName">Production Cost:</label>
                        <div class="controls  col-sm-6">
                            {!! Form::number('production_cost', null , ['class' => 'form-control']) !!}
                        </div>
                    </div>

                </div>



    <div class="row">
        <div class="form-group col-md-6">

            <label class="control-label col-sm-3" for="empName">Unit: </label>
            <div class="controls  col-sm-6">
                {!! Form::text('unit', null , ['class' => 'form-control']) !!}
            </div>
        </div>


        <div class="form-group col-md-6">
            <label class="control-label col-sm-4" for="empName">Type:</label>
            <div class="controls  col-sm-6">
                {!! Form::select('type', $catTypes , ['class' => 'form-control']) !!}
            </div>
        </div>

    </div>


    <div class="row">
        <div class="form-group col-md-8">

            <label class="control-label col-sm-3" for="empName">Description: </label>
            <div class="controls  col-sm-6">
                {!! Form::textarea('description', null , ['class' => 'form-control','rows'=>4,'cols'=>10]) !!}
            </div>
        </div>



    </div>



    <div class="form-group text-center">

        <br><br>
        {!! Form::submit('Create Products', ['class' => 'btn btn-success']) !!}

    </div>

    {!! Form::close() !!}

                </div>
        </div>
    </section>
@stop