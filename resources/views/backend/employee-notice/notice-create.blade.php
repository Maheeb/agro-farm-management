@extends('layouts.admin')


@section('extra-css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
@stop
@section('content')

    <section class="product_area">
        <div class="container-fluid">
            <div class="col-md-12">
                <h2 style="font-family: fantasy" class="text-center">Create Noticess</h2><br><br>
                @if(session('message'))
                    <div class="alert alert-info">
                        {{ session('message') }}
                    </div>
                @endif


                {!! Form::open(['method' => 'POST','action'=>'EmployeeNoticeController@store','files'=>true]) !!}

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
                        <label class="control-label col-sm-4" for="empName">Notice Title:</label>
                        <div class="controls  col-sm-6">
                            {!! Form::text('title', null , ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group col-md-6">

                        <label class="control-label col-sm-3" for="empName">Date: </label>
                        <div class="controls  col-sm-6">
                            <input class="date form-control" type="text" name="date" id="dateId">

                        </div>

                    </div>


                </div>


                <div class="row">


                    <div class="form-group col-md-6">
                        <label class="control-label col-sm-4" for="empName">Notice Body:</label>
                        <div class="controls  col-sm-6">
                            {!! Form::textarea('body', null , ['class' => 'form-control','rows'=>4,'cols'=>10]) !!}
                        </div>
                    </div>





                </div>



                <div class="form-group text-center">

                    <br><br>
                    {!! Form::submit('Create Notices', ['class' => 'btn btn-success']) !!}

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