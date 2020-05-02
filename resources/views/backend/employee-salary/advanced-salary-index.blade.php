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

    <section class="all_salary_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <h4 class="text-center">Employee Advanced Salary Information</h4>
                    <br><br>
                    <table id="example" class="table display nowrap" style="width:100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Advanced Amount</th>
                            <th>Date</th>
                            <th>Month</th>
                            <th>Delete</th>

                        </tr>
                        </thead>
                        <tbody>



                        @foreach($advancedInfos as $advancedInfo)

                            <tr>
                                <td class="text-center">{{$advancedInfo->name}}</td>
                                <td class="text-center">{{$advancedInfo->advanced_amount}}</td>
                                <td class="text-center">{{$advancedInfo->date}}</td>
                                <td class="text-center">{{$advancedInfo->month}}</td>

                                <td>
                                    {!! Form::open(['method' => 'DELETE' ,'action'=>['AdvancedSalaryController@destroy',$advancedInfo->id]]) !!}


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