<?php

namespace App\Http\Controllers;

use App\BuyOrder;
use App\Order;
use Illuminate\Http\Request;

class AllordersController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
//        $this->middleware('staff');
        $this->middleware('admin');

    }

    public function index()
    {

//        $orders = BuyOrder::all();
        $orders = BuyOrder::get()->sortByDesc('id');

        $statuses = Order::pluck('status','id');

        return view('backend.all-order.all-order-index',compact('orders','statuses'));

    }
    public function store(Request $request)
    {
        $id = (int) $request->catId;
        $final_price = $request->final_price;
        $amount = $request->amount;
        $status = $request->status;


        $inputs=array();

        $inputs['final_price'] =$final_price*$amount;
        $inputs['amount'] =$amount;
        $inputs['status'] =$status;

        if($id>0){

            BuyOrder::find($id)->update($inputs);

            return back()->with('message', "You have inserted  informations successfully");

        }



    }


    public function edit($id)
    {

        $data = BuyOrder::findOrFail($id);


        return response()->json([

            'data' => $data,

        ]);

    }
}
