@extends('layouts.admin')

@section('extra-css')
    <link rel="stylesheet" href="{{asset('backend/css/employee-info.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
@stop

@section('content')
<section class="employee_info_area">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active" id="StockCountSetupNav"><a href="#StockCountSetup" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs">Employee Info</span></a></li>
                        <li role="presentation" class="" id="StockCountListNav"><a href="#StockCountList" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Employee List</span></a></li>
                    </ul>

                    <br><br>
                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane active" id="StockCountSetup">
                            @if(session('message'))
                                <div class="alert alert-info">
                                    {{ session('message') }}
                                </div>
                            @endif
                        <!-- // Start From -->
                            {!! Form::open(['method' => 'POST','action'=>'EmployeeInfoController@store','files'=>true]) !!}
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
                                        <input type="hidden" id="EditRowId" name="Id" value="-1">
                                        <label class="control-label col-sm-4" for="empName">Employee Name:</label>
                                        <div class="controls  col-sm-6">
                                            {!! Form::text('emp_name', null , ['class' => 'form-control','id'=>'empName']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-2" for="empName">Employee Address</label>
                                        <div class="controls  col-sm-6">
                                            {!! Form::text('emp_address', null , ['class' => 'form-control','id'=>'empAddress']) !!}
                                        </div>
                                    </div>

                                </div>


                                <br><br>

                                <div class="row">
                                    <div class="form-group col-md-6">

                                        <label class="control-label col-sm-3" for="empName">Image: </label>
                                        <div class="controls  col-sm-6">
                                            {!! Form::file('image', null , ['class' => 'form-control']) !!}
                                        </div>
                                    </div>


                                    <div class="form-group col-md-6">

                                        <label class="control-label col-sm-3" for="empName">Employee Nid: </label>
                                        <div class="controls  col-sm-6">
                                            {!! Form::text('emp_nid', null , ['class' => 'form-control','id'=>'empNid']) !!}
                                        </div>

                                    </div>


                                    <div class="form-group col-md-6">

                                        <label class="control-label col-sm-3" for="empName">Employee Id: </label>
                                        <div class="controls  col-sm-6">
                                            {!! Form::text('emp_id', null , ['class' => 'form-control','id'=>'empId']) !!}
                                        </div>

                                    </div>

                                </div>

                                <div class="form-group col-md-6">

                                    <label class="control-label col-sm-3" for="empName">Blood group: </label>
                                    <div class="controls  col-sm-6">
                                        {!! Form::text('emp_blood_group', null , ['class' => 'form-control','id'=>'empBg']) !!}
                                    </div>

                                </div>

                                <div class="form-group col-md-6">

                                    <label class="control-label col-sm-3" for="empName">Joining Date: </label>
                                    <div class="controls  col-sm-6">
                                        <input class="date form-control" type="text" name="join" id="joinId">

                                    </div>

                                </div>


                                <div class="row">
                                <div class="form-group col-md-6">

                                    <label class="control-label col-sm-3" for="empName">Designation: </label>
                                    <div class="controls  col-sm-6">
                                        {!! Form::text('designation', null , ['class' => 'form-control','id'=>'designation']) !!}
                                    </div>

                                </div>



                                </div>

                                <div class="form-group col-md-6">
                                    <label class="control-label col-sm-4" for="empName">Salary Amount:</label>
                                    <div class="controls  col-sm-6">
                                        {!! Form::number('salary_amount', null , ['class' => 'form-control','id'=>'salary_amount']) !!}
                                    </div>
                                </div>


                                <br><br><br><br>

                            <div class="form-group text-center">

                                {!! Form::submit('Create Employee', ['class' => 'btn btn-primary']) !!}

                            </div>

                            {!! Form::close() !!}


                                </div>

                    {{--</div>--}}





                        <div role="tabpanel" class="tab-pane" id="StockCountList">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted m-b-30"> </p>

                                    @if(session('message'))
                                        <div class="alert alert-info">
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                    <div class="table-responsive">
                                        <table id="myTable" class="table table-striped sd-datatable">
                                            <thead>
                                            <tr>
                                                <th class="hidden">ID</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Blood Group</th>
                                                <th>NID</th>
                                                <th>Joining Date</th>
                                                <th>Designation</th>
                                                <th>Salary Amount</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($infos as $info)

                                                <tr>
                                                    <td>{{$info->emp_name}}</td>
                                                    <td>{{$info->emp_address}}</td>
                                                    <td>{{$info->emp_blood_group}}</td>
                                                    <td>{{$info->emp_nid}}</td>
                                                    <td>{{$info->joining_date}}</td>
                                                    <td>{{$info->designation}}</td>
                                                    <td class="">{{$info->salary_amount}}</td>
                                                    <td >
                                                        <!-- Edit -->
                                                        <span  class="btn btn-dark btn-circle" title="Edit"
                                                               onclick="setEditFormData({{ $info->id }});">
                                                        <i class="fa fa-pencil fa-lg"></i>
                                                    </span>

                                                    </td>


                                                    <td>

                                                        {!! Form::open(['method' => 'DELETE' ,'action'=>['EmployeeInfoController@destroy',$info->id]]) !!}


                                                        <div class="form-group">

                                                            {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger'] )  }}


                                                        </div>
                                                        {!! Form::close() !!}


                                                    </td>

                                                </tr>
                                            @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>


                    </div>

            </div>

{{--</div>--}}
                {{--</div>--}}

            </div>

        </div>

</section>
@stop

@section('extra-js')
    <script type="text/javascript">


        $('.date').datepicker({

            format: 'mm/dd/yy'


        });

        function setEditFormData(ID) {
            var path = $("#routeSpan").text();
            var url_path = path+'/admin/employee-info-edit/'+ID;
            // alert(url_path);
            $('.preloader').removeClass('hidden').css('display', 'block');
            $.ajax({
                type: "GET",
                url: url_path,

                success: function (response) {
                    //set edit form data
                    $("#EditRowId").val(response.data.id).attr('enabled',true);
                    $("#empName").val(response.data.emp_name);
                    $("#empAddress").val(response.data.emp_address);
                    $("#empBg").val(response.data.emp_blood_group);
                    $("#empNid").val(response.data.emp_nid);
                    $("#empId").val(response.data.emp_id);
                    $("#joinId").val(response.data.joining_date);
                    $("#designation").val(response.data.designation);
                    $("#salary_amount").val(response.data.salary_amount);


                    // if(response.table !== ''){
                    //     $("#detailTbody").html(response.table);
                    // }


                    $("#StockCountList, #StockCountListNav").removeClass('active');
                    $("#StockCountSetup, #StockCountSetupNav").addClass('active');
                    $('.preloader').addClass('hidden').css('display', 'block');
                }
            });
        }



        // //hide content by parent
        // function hideByParent(eml,lngth=0)
        // {
        //     if(lngth == 0){
        //         $(eml).parent().remove();
        //     }else{
        //         $(eml).parents().eq(lngth).remove();
        //     }
        // }
        //
        // function cloneDivByID(clonId,appentToClass,serialClass='')
        // {
        //     let sl = 0;
        //     if(serialClass !== ''){
        //         sl = $('.'+serialClass+':last').data('serial');
        //     }
        //
        //     $( "#"+clonId ).clone().appendTo( "."+appentToClass).attr('id','').show();
        //     if(serialClass !== ''){
        //         $('.'+serialClass+':last').data('serial',sl+1).text(sl+1)
        //     }
        //
        //     $("."+clonId+":last input").val('');
        //     $("."+clonId+":last select").val('');
        //     $("."+clonId+":last textarea").val('');
        //     $("."+clonId+":last td").val('');
        //     // $("."+clonId+":last select-multiple").val('');
        //
        // }
        //
        // // show element by class
        // function showElementByClass(className) {
        //     $('.'+className).show();
        //     $('.'+className).first().hide();
        // }
        // function clearIdByClass(className) {
        //     $("."+className+':last').val('');
        // }


    </script>
@stop