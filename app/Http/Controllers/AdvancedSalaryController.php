<?php

namespace App\Http\Controllers;

use App\AdvancedSalary;
use App\EmployeeInfo;
use App\Month;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdvancedSalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
//        $this->middleware('staff');
    }

    public function index()
    {
        //

        $advancedInfos = AdvancedSalary::all();

        return view('backend.employee-salary.advanced-salary-index',compact('advancedInfos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
//        $empNames = EmployeeInfo::pluck('emp_name','id');
        $empNames = EmployeeInfo::get();

        $months = Month::get();

        return view('backend.employee-salary.advanced-salary-create',compact('empNames','months'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $inputs = array();

//        $emp_name = $request->name;
        $empinfo_id = $request->name;
        $advanced_amount = $request->advanced_amount;
        $month = $request->month;
        $date = $request->date;

        $emp_name = EmployeeInfo::where('id',$empinfo_id)->first();
        $sd = Carbon::parse($date)->format('Y-m-d H:i:s');

        $inputs['empinfo_id']= $empinfo_id;
        $inputs['name']= $emp_name->emp_name;
        $inputs['advanced_amount']= $advanced_amount;
        $inputs['month']= $month;
        $inputs['date']= $sd;

       $today = Carbon::now();

        $max_advance = 5000;

        $this->validate($request,[
            'name'=>'required',
            'month'=>'required',
            'today'=>Carbon::now(),
            'date'=>'required|date|after_or_equal:today',
            'advanced_amount'=> 'required|numeric|between:0,' .$max_advance,


        ]);



        AdvancedSalary::create($inputs);
        return redirect('admin/employee-advanced-salary')->with('message', "You have inserted informations successfully");


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $advancedInfo = AdvancedSalary::findorFail($id);
        $advancedInfo->delete();
        return redirect('admin/employee-advanced-salary')->with('message', "You have deleted informations successfully");

    }
}
