<?php

namespace App\Http\Controllers;

use App\AdvancedSalary;
use App\BuyOrder;
use App\EmployeeInfo;
use App\EmployeePerformance;
use App\EmployeeSalary;
use App\Month;
use App\Product;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
//        $this->middleware('staff');
    }


    public function employeeInfoShow(){


        $months = Month::get();

        return view('backend.information.info-employee-all',compact('months'));

    }

    public function productInfoShow(){


//        $months = Month::get();

        $totalProducts = Product::count();
        $totalBuyProducts = Product::whereIn('type',[1,3])->count();
        $totalSellProducts = Product::whereIn('type',[2,4])->count();
        $totalPrices = Product::sum('price');
        $totalCosts = Product::sum('production_cost');

//        dd($totalBuyProducts);

        return view('backend.information.info-product-all',compact('totalProducts','totalBuyProducts','totalSellProducts','totalPrices','totalCosts'));

    }
    public function buySellInfoShow(){


        $months = Month::get();
        return view('backend.information.info-buysell',compact('months'));

    }



    public function informationEmployeeMonth(Request $request)
    {

        $monthId = $request->monthID;

//        dd($empId);

        $empNumbers= EmployeeInfo::whereMonth('joining_date', '=', $monthId)->count();
        $totalEmp= EmployeeInfo::count();

        $empSallaries= EmployeeSalary::whereMonth('date', '=', $monthId)->sum('final_salary');
        $empAdvance= AdvancedSalary::whereMonth('date', '=', $monthId)->sum('advanced_amount');
        $empPerformance= EmployeePerformance::whereMonth('created_at', '=', $monthId)->count();

//        dd($empSallaries);
        $data['empNumbers'] =$empNumbers;
        $data['empSallaries'] =$empSallaries;
        $data['empAdvance'] =$empAdvance;
        $data['empPerformance'] = $empPerformance;
        $data['totalEmp'] = $totalEmp;



        return response()->json([

            'data' => $data,

        ]);



    }


    public function buySellInformationMonth(Request $request)
    {

        $monthId = $request->monthID;

//        dd($empId);


        $totalBuy= BuyOrder::whereMonth('created_at', '=', $monthId)->where('status',3)->count();
        $totalSold= BuyOrder::whereMonth('created_at', '=', $monthId)->where('status',2)->count();
        $totalPending= BuyOrder::whereMonth('created_at', '=', $monthId)->where('status',1)->count();
        $totalDeclined= BuyOrder::whereMonth('created_at', '=', $monthId)->where('status',4)->count();

        $transaction = BuyOrder::whereMonth('created_at', '=', $monthId)->whereIn('status',[2,3])->sum('final_price');
        $price = BuyOrder::whereMonth('created_at', '=', $monthId)->where('status',2)->sum('final_price');

        $temp1 = BuyOrder::whereMonth('created_at', '=', $monthId)->where('status',2)->pluck('product_id');

        $amounts = BuyOrder::whereMonth('created_at', '=', $monthId)->where('status',2)->pluck('amount');
//        $amounts = BuyOrder::whereMonth('created_at', '=', $monthId)->where('status',2)->get();

//        dd($amounts);
        $costs = Product::whereIn('id',$temp1)->pluck('production_cost');

        $costsarray= array();
        $amountsarray= array();

        foreach ($costs as $key=>$value){

            $costsarray[$key]=$value;
        }

        foreach ($amounts as $key=>$value){

            $amountsarray[$key]=$value;
        }
//        dd($amountsarray);

        $productionCosts=0;
        foreach ($amountsarray as $key=>$value){

            $productionCosts += $value * $costsarray[$key] ;


        }

        $profits = $price-$productionCosts;

        $empSallaries= EmployeeSalary::whereMonth('date', '=', $monthId)->sum('final_salary');


        $income = $profits-$empSallaries;
        $expense = null;
        if ($income<0){

            $expense = abs($profits-$empSallaries);
            $income=0;
        }
        else{

            $expense=0;
        }

//        dd($income,$expense);

        $data['totalBuy'] =$totalBuy;
        $data['totalSold'] =$totalSold;
        $data['totalPending'] =$totalPending;
        $data['totalDeclined'] =$totalDeclined;
        $data['trans'] =$transaction;
        $data['profits'] =$profits;
        $data['empSallaries'] =$empSallaries;
        $data['income'] =$income;
        $data['expense'] =$expense;



        return response()->json([

            'data' => $data,

        ]);



    }




}
