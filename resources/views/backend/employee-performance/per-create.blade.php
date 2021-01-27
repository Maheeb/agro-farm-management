@extends('layouts.admin')


@section('extra-css')

@stop
@section('content')

    <section class="performance_area">
        <div class="container-fluid">
            <div class="col-md-12">
                <h2 style="font-family: fantasy" class="text-center">Create Information</h2><br><br>
                @if(session('message'))
                    <div class="alert alert-info">
                        {{ session('message') }}
                    </div>
                @endif


                {!! Form::open(['method' => 'POST','action'=>'EmpPerformanceController@store','files'=>true]) !!}

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



                <h5 style="color: brown" class="text-dark">All performances are measured out of ten</h5><br><br>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="control-label col-sm-4" for="empName">Employee Name:</label>
                        <div class="controls  col-sm-6">
                            {!! Form::select('name', $empNames , ['class' => 'form-control','rows'=>4,'cols'=>10]) !!}
                        </div>
                    </div>


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
                        <label class="control-label col-sm-4" for="empName">Behavior:</label>
                        <div class="controls  col-sm-6">
                            {!! Form::number('behavior', null , ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label class="control-label col-sm-4" for="empName">Punctuality:</label>
                        <div class="controls  col-sm-6">
                            {!! Form::number('punctuality', null , ['class' => 'form-control']) !!}
                        </div>
                    </div>


                    <div class="form-group col-md-6">
                        <label class="control-label col-sm-4" for="empName">Attendance:</label>
                        <div class="controls  col-sm-6">
                            {!! Form::number('attendance', null , ['class' => 'form-control']) !!}
                        </div>
                    </div>



                    <div class="form-group col-md-6">
                        <label class="control-label col-sm-4" for="empName">Attitude:</label>
                        <div class="controls  col-sm-6">
                            {!! Form::number('attitude', null , ['class' => 'form-control']) !!}
                        </div>
                    </div>



                    <div class="form-group col-md-6">
                        <label class="control-label col-sm-4" for="empName">integrity:</label>
                        <div class="controls  col-sm-6">
                            {!! Form::number('integrity', null , ['class' => 'form-control']) !!}
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



    </script>



@stop