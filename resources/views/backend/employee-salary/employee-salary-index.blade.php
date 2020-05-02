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

                    <h4 class="text-center">Employee Salary Information</h4>
                    <br><br>
                    <table id="example" class="table display nowrap" style="width:100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Salary Amount</th>
                            <th>Date</th>
                            <th>Advanced Amount</th>
                            <th>Previous Month <br>Advanced</th>
                            <th>Final Amount</th>
                            {{--<th>Update</th>--}}
                            <th>Delete</th>

                        </tr>
                        </thead>
                        <tbody>



                            @foreach($empsalaryInfos as $empsalaryInfo)

                            <tr>
                                <td class="text-center">{{$empsalaryInfo->name}}</td>
                                <td class="text-center">{{$empsalaryInfo->salary_amount}}</td>
                                <td class="text-center">{{$empsalaryInfo->date}}</td>
                                <td class="text-center">{{$empsalaryInfo->advanced}}</td>
                                <td class="text-center">{{$empsalaryInfo->previous_month_advanced}}</td>
                                <td class="text-center">{{$empsalaryInfo->final_salary}}</td>

                                {{--<td><a class="btn btn-info" href="{{route('employee-salary.edit',$empsalaryInfo->id)}}"><i class="fa fa-refresh" aria-hidden="true"></i>  Update</a></td>--}}
                                <td>
                                    {!! Form::open(['method' => 'DELETE' ,'action'=>['EmployeeSalaryController@destroy',$empsalaryInfo->id]]) !!}


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