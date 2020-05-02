@extends('layouts.admin')

@section('extra-css')

@stop


@section('content')

    <section class="all_salary_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <h4 class="text-center">Employee Notices</h4>
                    <br><br>
                    <table id="example" class="table display nowrap" style="width:100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Date</th>
                            <th>Delete</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($empNotices as $empNotice)

                            <tr>
                                <td>{{$empNotice->id}}</td>
                                <td>{{$empNotice->title}}</td>
                                <td>{{$empNotice->body}}</td>
                                <td>{{$empNotice->date}}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE' ,'action'=>['EmployeeNoticeController@destroy',$empNotice->id]]) !!}


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