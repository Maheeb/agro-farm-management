@extends('layouts.admin')
@section('content')
    <h4 class="text-center">All Featured Buy Products</h4>
    <br><br>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Product Title</th>
            <th>Product Info</th>
            <th>Price</th>
            <th>Category Name</th>
            <th>Update</th>
            <th>Delete</th>

        </tr>
        </thead>
        <tbody>


        @foreach($fbuys as $fbuy)

            <tr>
                <td>{{$fbuy->id}}</td>
                <td><img  width="50px" height="50px" src="{{asset('frontend/img/'.$fbuy->image)}}" alt=""></td>
                <td>{{$fbuy->product_title}}</td>
                <td>{{$fbuy->product_info}}</td>
                <td>{{$fbuy->price}}</td>
                <td>{{$fbuy->category_name}}</td>
{{--                <td><a class="btn btn-info" href="{{route('featured-buy.edit',$fbuy->id)}}">Update</a></td>--}}
                <td><a class="btn btn-info" href="{{route('featured-buy.edit',$fbuy->id)}}"><i class="fa fa-refresh" aria-hidden="true"></i>  Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE' ,'action'=>['FeatureBuyController@destroy',$fbuy->id]]) !!}


                    <div class="form-group">

                        {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger'] )  }}


                    </div>
                    {!! Form::close() !!}

                </td>
            </tr>

        @endforeach

        </tbody>
    </table>


@stop