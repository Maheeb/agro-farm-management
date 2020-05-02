@extends('layouts.admin')

@section('extra-css')



@stop

@section('content')
    <section class="category_area">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">


                    <br><br>

                            @if(session('message'))
                                <div class="alert alert-info">
                                    {{ session('message') }}
                                </div>
                            @endif
                        <!-- // Start From -->
                            {!! Form::open(['method' => 'POST','action'=>'ProductCategoryController@store','files'=>true]) !!}
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
                                    <input type="hidden" id="EditRowId" name="catId" value="-1">
                                    <label class="control-label col-sm-3" for="empName">Category Name:</label>
                                    <div class="controls  col-sm-6">
                                        {!! Form::text('name', null , ['class' => 'form-control','id'=>'categoryName']) !!}
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="control-label col-sm-2" for="empName">Product Slug:</label>
                                    <div class="controls  col-sm-6">
                                        {!! Form::text('slug', null , ['class' => 'form-control','id'=>'catSlug']) !!}
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="control-label col-sm-4" for="empName">Type:</label>
                                    <div class="controls  col-sm-6">
                                        {{--{!! Form::select('type', $catTypes , ['class' => 'form-control']) !!}--}}
                                        <select name="catType" id="catType">
                                        @foreach ($catTypes as $key=>$value)

                                                {{--<option value="{{ $key }}" {{ ( $key == $catId) ? 'selected' : '' }}>{{$value}}</option>--}}
                                                <option value="{{ $value }}">{{$value}}</option>

                                        @endforeach

                                        </select>
{{--                                        {!! Form::text('type', null , ['class' => 'form-control','id'=>'catType']) !!}--}}
                                    </div>
                                </div>

                            </div>


                            <br><br>

                            <div class="form-group text-center ">

                                {!! Form::submit('Create Categories', ['class' => 'btn btn-success']) !!}

                            </div>

                            {!! Form::close() !!}

                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-muted m-b-30"> </p>
                                        <div class="table-responsive">
                                            <table id="example" class="table table-striped display nowrap" cellspacing="0" width="100%">
                                                <thead>
                                                <tr>
                                                    <th class="hidden">ID</th>
                                                    <th>Name</th>
                                                    <th>Slug</th>
                                                    <th>Type</th>
                                                    {{--<th>NID</th>--}}
                                                    <th>Edit</th>
                                                    {{--<th>Delete</th>--}}
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($categories as $category)

                                                    <tr>
                                                        <td>{{$category->name}}</td>
                                                        <td>{{$category->slug}}</td>
                                                        <td>{{$category->type}}</td>
                                                        {{--<td>{{$info->emp_nid}}</td>--}}
                                                        <td >
                                                            <!-- Edit -->
                                                            <span  class="btn btn-dark btn-circle" title="Edit"
                                                                   onclick="setEditFormData({{ $category->id }});">
                                                        <i class="fa fa-pencil fa-lg"></i>
                                                    </span>

                                                        </td>


                                                        {{--<td>--}}

                                                        {{--{!! Form::open(['method' => 'DELETE' ,'action'=>['EmployeeInfoController@destroy',$info->id]]) !!}--}}
                                                        {{----}}
                                                        {{--<div class="form-group">--}}

                                                        {{--{{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger'] )  }}--}}


                                                        {{--</div>--}}
                                                        {{--{!! Form::close() !!}--}}


                                                        {{--</td>--}}

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

    </section>
@stop

@section('extra-js')



    <script type="text/javascript">


        function setEditFormData(ID) {
            var path = $("#routeSpan").text();
            var url_path = path+'/admin/categories-edit/'+ID;
            // alert(url_path);

            $.ajax({
                type: "GET",
                url: url_path,

                success: function (response) {
                    //set edit form data
                    $("#EditRowId").val(response.data.id).attr('enabled',true);
                    $("#categoryName").val(response.data.name);
                    $("#catSlug").val(response.data.slug);
                    $("#catType").val(response.data.type);

                }
            });
        }





    </script>





@stop