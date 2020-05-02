@extends('layouts.admin')


@section('content')

    <div class="panel panel-footer" >
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Product Name</th>
                <th>Brand</th>
                <th>Quantity</th>
                <th>Budget</th>
                <th>Amount</th>
                <th><a href="#" class="addRow"><i class="glyphicon glyphicon-plus"></i></a></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><input type="text" name="product_name[]" class="form-control" required=""></td>
                <td><input type="text" name="brand[]" class="form-control"></td>
                <td><input type="text" name="quantity[]" class="form-control quantity" required=""></td>
                <td><input type="text" name="budget[]" class="form-control budget"></td>
                <td><input type="text" name="amount[]" class="form-control amount"></td>
                <td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>
            </tr>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td style="border: none"></td>
                <td style="border: none"></td>
                <td style="border: none"></td>
                <td>Total</td>
                <td><b class="total"></b> </td>
                <td><input type="submit" name="" value="Submit" class="btn btn-success"></td>
            </tr>
            </tfoot>
        </table>
    </div>

@stop

@section('extra-js')
    <script type="text/javascript">
        $('.addRow').on('click',function(){
            addRow();
        });
        function addRow()
        {
            var tr='<tr>'+
                '<td><input type="text" name="product_name[]" class="form-control" required=""></td>'+
                '<td><input type="text" name="brand[]" class="form-control"></td>'+
                '<td><input type="text" name="quantity[]" class="form-control quantity" required=""></td>'+
                '<td><input type="text" name="budget[]" class="form-control budget"></td>'+
                ' <td><input type="text" name="amount[]" class="form-control amount"></td>'+
                '<td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>'+
                '</tr>';
            $('tbody').append(tr);
        }
        $(document).on('click','.remove',function(){
            var last=$('tbody tr').length;
            if(last===1){
                alert("you can not remove last row");
            }
            else{
                $(this).parent().parent().remove();
            }

        });






    </script>



@stop