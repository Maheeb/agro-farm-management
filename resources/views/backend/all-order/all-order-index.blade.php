@extends('layouts.admin')
@section('content')

    <section class="all_buy_order_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <br><br>

                    @if(session('message'))
                        <div class="alert alert-info">
                            {{ session('message') }}
                        </div>
                    @endif
                <!-- // Start From -->
                    {!! Form::open(['method' => 'POST','action'=>'AllordersController@store','files'=>true]) !!}
                    <span style="display: none" id="routeSpan">{{ url('') }}</span>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="hidden" id="EditRowId" name="catId" value="-1">
                            <label class="control-label col-sm-3" for="empName">Final Price:</label>
                            <div class="controls  col-sm-6">
                                {!! Form::text('final_price', null , ['class' => 'form-control','id'=>'final_price']) !!}
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-3" for="empName">Final Amount:</label>
                            <div class="controls  col-sm-6">
                                {!! Form::text('amount', null , ['class' => 'form-control','id'=>'amount']) !!}
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-2" for="empName">Status</label>
                            <div class="controls  col-sm-6">
                                {!! Form::select('status', $statuses , ['class' => 'form-control','id'=>'status']) !!}
                            </div>
                        </div>


                    </div>


                    <br><br>

                    <div class="form-group text-center ">

                        {!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}

                    </div>

                    {!! Form::close() !!}


                    <br><br>
                    <h4 class="text-center">All Orders</h4>

                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Product Name</th>
                            <th>Customer Name</th>
                            <th>Location</th>
                            <th>Mobile</th>
                            <th>Amount</th>
                            <th>Price</th>
                            <th>Final price</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Update</th>

                        </tr>
                        </thead>
                        <tbody>



                        @foreach($orders as $order)

                            <tr>
                                <td>{{$order->id}}</td>
                                {{--<td><img  width="50px" height="50px" src="{{asset('frontend/img/products/'.$order->image)}}" alt=""></td>--}}
                                <td>{{$order->product_name}}</td>
                                <td>{{$order->customer_name}}</td>
                                <td>{{$order->location}}</td>
                                <td>{{$order->mobile}}</td>
                                <td>{{$order->amount}}</td>
                                <td>{{$order->price}}</td>
                                <td>{{$order->final_price}}</td>
                                <td>{{$order->purchased_type}}</td>

                                <td>

                                @php

                                switch ($order->status){

                                case (1):  echo "pending";
                                break;
                                case (2): echo "sold";
                                break;
                                case (3): echo "bought";
                                break;
                                case (4):echo  "declined";
                                break;
                                default:echo "pending";
                                    }
                                @endphp

                                    </td>

                                <td>
                                 <span  class="btn btn-dark btn-circle" title="Edit"
                                        onclick="setEditFormData({{ $order->id }});">
                                     <i class="fa fa-pencil fa-lg"></i>
                                 </span>

                                </td>

                            </tr>

                        @endforeach

                        </tbody>
                    </table>


                    <div style="text-align: center" class="center">
{{--                        {{$products->links("pagination::bootstrap-4")}}--}}

                    </div>

                </div>
            </div>
        </div>
    </section>

@stop

@section('extra-js')
    <script type="text/javascript">

        function setEditFormData(ID) {
            var path = $("#routeSpan").text();
            var url_path = path+'/admin/all-orders-edit/'+ID;
            // alert(url_path);

            $.ajax({
                type: "GET",
                url: url_path,

                success: function (response) {
                    //set edit form data
                    $("#EditRowId").val(response.data.id).attr('enabled',true);
                    $("#final_price").val(response.data.price);
                    $("#amount").val(response.data.amount);
                    // $("#catSlug").val(response.data.slug);

                }
            });
        }




    </script>
@stop