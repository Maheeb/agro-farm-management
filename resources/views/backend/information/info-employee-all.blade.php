@extends('layouts.admin')


@section('extra-css')

@stop
@section('content')

    <section class="product_area">
        <div class="container-fluid">
            <div class="col-md-12">
                <h2 style="font-family: fantasy" class="text-center">Employee Information</h2><br><br>


                <div class="row">

                    <div class="form-group col-md-6">
                        <label class="control-label col-sm-4" for="empName">Month:</label>
                        <div class="controls  col-sm-6">
                            {{--{!! Form::text('month', null , ['class' => 'form-control']) !!}--}}

                            <select id="month" name="month" class="form-control strip-tags input-border" onchange="getMonth(this)">
                                <option value="">--Select--</option>
                                @foreach($months as $month)
                                    <option value="{{ $month->id }}">{{ $month->month_name }}</option>
                                @endforeach
                            </select>


                        </div>
                    </div>



                </div>



                <br><br>

                <table id="example" class="table-bordered" style="width:80%">
                    <thead>
                    <tr>
                        <th height="50" class="text-center">Criteria</th>
                        <th height="50" class="text-center">Amount</th>


                    </tr>
                    </thead>
                    <tbody>


                    <tr>

                        <td height="50" class="text-center">Employee in Selected Month</td>

                        <td class="text-center">

                            <input type="number" id="empNo" style="background-color: palegoldenrod; text-align: center; color: red" readonly disabled>

                        </td>

                    </tr>


                    <tr>

                        <td height="50" class="text-center">Total Number of Employee</td>

                        <td class="text-center">

                            <input type="number" id="totalEmp" style="background-color: palegoldenrod; text-align: center; color: red" readonly disabled>

                        </td>

                    </tr>



                    <tr>

                        <td height="50" class="text-center">Total Salary Given in Selected Month</td>

                        <td class="text-center">

                            <input type="number" id="empSallaries" style="background-color: palegoldenrod; text-align: center; color: red" readonly disabled>

                        </td>

                    </tr>


                    <tr>

                        <td height="50" class="text-center">Total Advance Given in Selected Month</td>

                        <td class="text-center">

                            <input type="number" id="empAdvance" style="background-color: palegoldenrod; text-align: center; color: red" readonly disabled>

                        </td>

                    </tr>


                    <tr>

                        <td height="50" class="text-center">Total Assessment Done in Selected Month</td>

                        <td class="text-center">

                            <input type="number" id="empPerformance" style="background-color: palegoldenrod; text-align: center; color: red" readonly disabled>

                        </td>

                    </tr>




                    </tbody>
                </table>














            </div>
        </div>
    </section>
@stop

@section('extra-js')

    <script type="text/javascript">

        $('.date').datepicker({

            format: 'mm/dd/yy'


        });


        function getMonth(elm) {

            var monthID = $(elm).val();
            var path = $("#routeSpan").text();
            var url_path = path+'/admin/info-employee-month/';

            $.ajax({
                type: "GET",
                url: url_path,

                data: {'monthID':monthID},
                success: function (response) {

                    $("#empNo").val(response.data.empNumbers);
                    $("#empSallaries").val(response.data.empSallaries);
                    $("#empAdvance").val(response.data.empAdvance);
                    $("#empPerformance").val(response.data.empPerformance);
                    $("#totalEmp").val(response.data.totalEmp);

                }
            });
        }



    </script>



@stop