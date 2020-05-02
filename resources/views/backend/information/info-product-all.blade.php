@extends('layouts.admin')


@section('extra-css')

@stop
@section('content')

    <section class="product_area">
        <div class="container-fluid">
            <div class="col-md-12">
                <h2 style="font-family: fantasy" class="text-center">Product Information</h2><br><br>






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

                        <td height="50" class="text-center">Total Products</td>

                        <td class="text-center">

                            <input type="number" id="empNo" style="background-color: palegoldenrod; text-align: center; color: red" value={{$totalProducts}} readonly disabled>

                        </td>

                    </tr>

                    <tr>

                        <td height="50" class="text-center">Total Products for Buy</td>

                        <td class="text-center">

                            <input type="number" id="empSallaries" style="background-color: palegoldenrod; text-align: center; color: red" value={{$totalBuyProducts}} readonly disabled>

                        </td>

                    </tr>



                    <tr>

                        <td height="50" class="text-center">Total Products for Sell</td>

                        <td class="text-center">

                            <input type="number" id="empSallaries" style="background-color: palegoldenrod; text-align: center; color: red" value={{$totalSellProducts}} readonly disabled>

                        </td>

                    </tr>


                    <tr>

                        <td height="50" class="text-center">Total Price of All Products</td>

                        <td class="text-center">

                            <input type="number" id="empSallaries" style="background-color: palegoldenrod; text-align: center; color: red" value={{$totalPrices}} readonly disabled>

                        </td>

                    </tr>


                    <tr>

                        <td height="50" class="text-center">Total Production Costs</td>

                        <td class="text-center">

                            <input type="number" id="empPerformance" style="background-color: palegoldenrod; text-align: center; color: red" value={{$totalCosts}} readonly disabled>

                        </td>

                    </tr>




                    </tbody>
                </table>














            </div>
        </div>
    </section>
@stop

@section('extra-js')





@stop