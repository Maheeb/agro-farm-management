@extends('layouts.admin')

@section('extra-css')
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>--}}
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
@stop


@section('content')

    <section class="all_products_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <h4 class="text-center">All Products</h4>
                        <br><br>
                        <table id="example" class="table display nowrap" style="width:100%">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Details</th>
                                <th>Price</th>
                                <th>Cost</th>
                                <th>Type</th>
                                <th>Update</th>
                                <th>Delete</th>

                            </tr>
                            </thead>
                            <tbody>


                            @foreach($products as $product)

                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td><img  width="50px" height="50px" src="{{asset('frontend/img/products/'.$product->image)}}" alt=""></td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->details}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->production_cost}}</td>
                                    <td>{{($product->type)=== 1 ? "Buy":"Sell" }}</td>

                                    <td><a class="btn btn-info" href="{{route('products.edit',$product->id)}}"><i class="fa fa-refresh" aria-hidden="true"></i>  Update</a></td>
                                    <td>
                                        {!! Form::open(['method' => 'DELETE' ,'action'=>['ProductController@destroy',$product->id]]) !!}


                                        <div class="form-group">

                                            {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger'] )  }}


                                        </div>
                                        {!! Form::close() !!}

                                    </td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>


                        {{--<div style="text-align: center" class="center">--}}
                                {{--{{$products->links("pagination::bootstrap-4")}}--}}

                        {{--</div>--}}

                    </div>
                </div>
            </div>
    </section>

@stop
