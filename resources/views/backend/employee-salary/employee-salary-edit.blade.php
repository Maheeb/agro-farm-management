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


                {!! Form::model($empsalaryInfo,['method' => 'PATCH','action'=>['EmployeeSalaryController@update',$empsalaryInfo->id],'files'=>true]) !!}

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
                        <label class="control-label col-sm-4" for="empName">Employee Name:</label>
                        <div class="controls  col-sm-6">
                            {!! Form::select('name', $empNames , ['class' => 'form-control', 'readonly'=>'true']) !!}
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label col-sm-4" for="empName">Salary Amount:</label>
                        <div class="controls  col-sm-6">
                            {!! Form::number('salary_amount', null , ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>


                <div class="row">

                    <div class="form-group col-md-6">
                        <label class="control-label col-sm-4" for="empName">Month:</label>
                        <div class="controls  col-sm-6">
                            {!! Form::text('month', null , ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group col-md-6">

                        <label class="control-label col-sm-3" for="empName">Date: </label>
                        <div class="controls  col-sm-6">
                            {{--<input class="date form-control" type="text" name="date" id="dateId">--}}
                            {!! Form::text('date', null , ['class' => 'form-control']) !!}
                        </div>

                    </div>


                </div>






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

    </script>



@stop