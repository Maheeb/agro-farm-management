@extends('layouts.employee')

@section('extra-css')

    <link rel="stylesheet" href="{{asset('backend/css/perform.css')}}">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });

    </script>
@stop


@section('content')


    <section class="perform_image_area">


        <img src="{{asset('backend/img/per.jpg')}}" style="width: 100%;height: 250px" alt="">

    </section>


    <br><br><br>

    <section class="all_perform_area" style="height: 650px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <h4 style=" border-bottom: 5px solid olivedrab; font-size: 20px; color: brown" class="text-center">Employee Performance </h4>
                    <br><br>



                    <h3>Employee Name: {{$empPerf->name}}</h3>
                    <h3>Month: {{$empPerf->month_name}}</h3>

                    <br>

                    <div id="poll_div" style="height: 500px">
                    // With Lava class alias
                    <?= Lava::render('BarChart', 'Performances', 'poll_div') ?>


                    </div>





                </div>
            </div>
        </div>
    </section>


@stop
