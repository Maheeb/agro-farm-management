@extends('layouts.admin')


@section('extra-css')

@stop
@section('content')

    <section class="product_area">
        <div class="container-fluid">
            <div class="col-md-12">
                <h2 style="font-family: fantasy" class="text-center">Overview</h2><br><br>


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

                        <td height="50" class="text-center">Total Bought in Selected Month</td>

                        <td class="text-center">

                            <input type="number" id="totalBuy" style="background-color: palegoldenrod; text-align: center; color: red"  readonly disabled>

                        </td>

                    </tr>

                    <tr>

                        <td height="50" class="text-center">Total Sold in Selected Month</td>

                        <td class="text-center">

                            <input type="number" id="totalSold" style="background-color: palegoldenrod; text-align: center; color: red" readonly disabled>

                        </td>

                    </tr>

                    <tr>

                        <td height="50" class="text-center">Total Pending in Selected Month</td>

                        <td class="text-center">

                            <input type="number" id="totalPending" style="background-color: palegoldenrod; text-align: center; color: red" readonly disabled>

                        </td>

                    </tr>

                    <tr>

                        <td height="50" class="text-center">Total Declined in Selected Month</td>

                        <td class="text-center">

                            <input type="number" id="totalDeclined" style="background-color: palegoldenrod; text-align: center; color: red" readonly disabled>

                        </td>

                    </tr>

                    <tr>

                        <td height="50" class="text-center">Total Transaction in Selected Month</td>

                        <td class="text-center">

                            <input type="number" id="transaction" style="background-color: palegoldenrod; text-align: center; color: red" readonly disabled>

                        </td>

                    </tr>


                    <tr>

                        <td height="50" class="text-center">Total Profit from Sell in Selected Month</td>

                        <td class="text-center">

                            <input type="number" id="profits" style="background-color: palegoldenrod; text-align: center; color: red" readonly disabled>

                        </td>

                    </tr>


                    <tr>

                        <td height="50" class="text-center">Total Salary given in Selected Month</td>

                        <td class="text-center">

                            <input type="number" id="empSallaries" style="background-color: palegoldenrod; text-align: center; color: red" readonly disabled>

                        </td>

                    </tr>


                    <tr>

                        <td height="50" class="text-center">Total Income in Selected Month</td>

                        <td class="text-center">

                            <input type="number" id="income" style="background-color: palegoldenrod; text-align: center; color: red" readonly disabled>

                        </td>

                    </tr>


                    <tr>

                        <td height="50" class="text-center">Total Expense in Selected Month</td>

                        <td class="text-center">

                            <input type="number" id="expense" style="background-color: palegoldenrod; text-align: center; color: red" readonly disabled>

                        </td>

                    </tr>




                    </tbody>
                </table>


                <br><br><br><br><br>








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
            var url_path = path+'/admin/buysell-info-month/';

            $.ajax({
                type: "GET",
                url: url_path,

                data: {'monthID':monthID},
                success: function (response) {

                    $("#totalBuy").val(response.data.totalBuy);
                    $("#totalSold").val(response.data.totalSold);
                    $("#totalPending").val(response.data.totalPending);
                    $("#totalDeclined").val(response.data.totalDeclined);
                    $("#transaction").val(response.data.trans);
                    $("#profits").val(response.data.profits);
                    $("#empSallaries").val(response.data.empSallaries);
                    $("#income").val(response.data.income);
                    $("#expense").val(response.data.expense);


                }
            });
        }



    </script>



@stop