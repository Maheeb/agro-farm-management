@extends('layouts.admin')


@section('extra-css')
    <link rel="stylesheet" href="{{asset('backend/css/employee-info.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
@stop
@section('content')

    <section class="product_area">
        <div class="container-fluid">
            <div class="col-md-12">
                <h2 style="font-family: fantasy" class="text-center">Create Information</h2><br><br>
                @if(session('message'))
                    <div class="alert alert-info">
                        {{ session('message') }}
                    </div>
                @endif


                {!! Form::open(['method' => 'POST','action'=>'EmployeeSalaryController@store','files'=>true]) !!}

                {{csrf_field()}}
                <span style="display: none" id="routeSpan">{{ url('') }}</span>


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
                        <label class="control-label col-sm-4" for="empName">Employee Name:</label>
                        <div class="controls  col-sm-6">

                            <select id="name" name="name" class="form-control strip-tags input-border" onchange="getPrevious(this)">
                                <option value="">--Select--</option>
                                @foreach($empNames as $empName)
                                <option value="{{ $empName->id }}">{{ $empName->emp_name }}</option>
                                @endforeach
                            </select>

{{--                            {!! Form::select('name', $empNames , ['class' => 'form-control','onchange'=>'getPrevious(this)','rows'=>4,'cols'=>10]) !!}--}}
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label col-sm-4" for="empName">Salary Amount:</label>
                        <div class="controls  col-sm-6">
{{--                            {!! Form::number('salary_amount', null , ['class' => 'form-control']) !!}--}}
                            <input type="number" name="salary_amount" id="salary_amountId" readonly required>
                        </div>
                    </div>
                </div>


                <div class="row">

                    <div class="form-group col-md-6">
                        <label class="control-label col-sm-4" for="empName">Month:</label>
                        <div class="controls  col-sm-6">
                            {{--{!! Form::text('month', null , ['class' => 'form-control']) !!}--}}

                            <select id="month" name="month" class="form-control strip-tags input-border">
                                <option value="">--Select--</option>
                                @foreach($months as $month)
                                    <option value="{{ $month->month_name }}">{{ $month->month_name }}</option>
                                @endforeach
                            </select>


                        </div>
                    </div>

                    <div class="form-group col-md-6">

                        <label class="control-label col-sm-3" for="empName">Date: </label>
                        <div class="controls  col-sm-6">
                            <input class="date form-control" type="text" name="date" id="dateId">

                        </div>

                </div>


                </div>



                    {{--<div class="form-group col-md-6">--}}
                        {{--<label class="control-label col-sm-4" for="empName">Advanced:</label>--}}
                        {{--<div class="controls  col-sm-6">--}}
                            {{--{!! Form::number('advanced', null , ['class' => 'form-control']) !!}--}}
                        {{--</div>--}}
                    {{--</div>--}}



                <div class="row">
                    <div class="form-group col-md-6">

                        <label class="control-label col-sm-3" for="empName">Previous advanced: </label>
                        <div class="controls  col-sm-6">

                            <input type="number" name="previous_month_advanced" id="previousId" readonly required>
{{--                            {!! Form::number('previous_month_advanced', null , ['class' => 'form-control','id'=>'previousId']) !!}--}}
                        </div>
                    </div>


                </div>


                <div class="row">
                    <div class="form-group col-md-8">

                        <label class="control-label col-sm-3" for="empName">Note: </label>
                        <div class="controls  col-sm-6">
                            {!! Form::text('note', null , ['class' => 'form-control']) !!}
                        </div>
                    </div>



                </div>



                <div class="form-group text-center">

                    <br><br>
                    {!! Form::submit('Create Information', ['class' => 'btn btn-success']) !!}

                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </section>
@stop

@section('extra-js')

    <script type="text/javascript">

        $('.date').datepicker({

            format: 'mm/dd/yy'


        });


        function getPrevious(elm) {

            var empID = $(elm).val();
            var path = $("#routeSpan").text();
            var url_path = path+'/admin/employee-salary-previous/';

            $.ajax({
                type: "GET",
                url: url_path,

                data: {'empID':empID},
                success: function (response) {

                    // $("#previousId").val(response);
                    $("#previousId").val(response.data.previous_amount);
                    $("#salary_amountId").val(response.data.salary_amount);

                }
            });
        }



    </script>



    @stop