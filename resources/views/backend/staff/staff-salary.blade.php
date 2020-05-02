@extends('layouts.employee')

@section('extra-css')

    <link rel="stylesheet" href="{{asset('backend/css/staff.css')}}">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    @stop


@section('content')


    <section class="salray_image_area">    


                        <img src="{{asset('backend/img/salary.png')}}" style="width: 100%" alt="">

    </section>


    <br><br><br>

    <section class="all_salary_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <h4 style=" border-bottom: 5px solid olivedrab; font-size: 20px; color: brown" class="text-center">Employee Salary Information</h4>
                    <br><br>
                    <table id="example" class="table display nowrap" style="width:100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Salary Amount</th>
                            <th>Month</th>
                            <th>Date</th>
                            <th>Advanced Amount</th>
                            <th>Previous Month Advanced</th>
                            <th>Final Amount</th>


                        </tr>
                        </thead>
                        <tbody>



                        @foreach($empSalaries as $empSalarie)

                            <tr>
                                <td class="text-center">{{$empSalarie->name}}</td>
                                <td class="text-center">{{$empSalarie->salary_amount}}</td>
                                <td class="text-center">{{$empSalarie->month}}</td>
                                <td class="text-center">{{$empSalarie->date}}</td>
                                <td class="text-center">{{$empSalarie->advanced}}</td>
                                <td class="text-center">{{$empSalarie->previous_month_advanced}}</td>
                                <td class="text-center">{{$empSalarie->final_salary}}</td>



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