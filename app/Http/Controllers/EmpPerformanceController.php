<?php

namespace App\Http\Controllers;

use App\EmployeeInfo;
use App\EmployeePerformance;
use App\Month;
use Illuminate\Http\Request;

class EmpPerformanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $empPerformances = EmployeePerformance::all();


        return view('backend.employee-performance.per-index',compact('empPerformances'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $empNames = EmployeeInfo::pluck('emp_name','id');
        $months = Month::get();


        return view('backend.employee-performance.per-create',compact('empNames','months'));
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

        $empinfo_id = $request->name;
        $month_name = $request->month;
        $behaviour = $request->behavior;
        $punctuality = $request->punctuality;
        $attendance = $request->attendance;
        $attitude = $request->attitude;
        $integrity = $request->integrity;
        $emp_name = EmployeeInfo::where('id',$empinfo_id)->first();
        $inputs['name']= $emp_name->emp_name;
        $inputs['empinfo_id']=$empinfo_id;
        $inputs['month_name']=$month_name;
        $inputs['behavior']=$behaviour;
        $inputs['punctuality']=$punctuality;
        $inputs['attendance']=$attendance;
        $inputs['attitude']=$attitude;
        $inputs['integrity']=$integrity;


        $max_score = 10;

        $this->validate($request,[
            'name'=>'required',
            'month'=>'required',
            'behavior'=> 'required|numeric|between:0,' .$max_score,
            'punctuality'=> 'required|numeric|between:0,' .$max_score,
            'attitude'=> 'required|numeric|between:0,' .$max_score,
            'attendance'=> 'required|numeric|between:0,' .$max_score,
            'integrity'=> 'required|numeric|between:0,' .$max_score,


        ]);




        EmployeePerformance::create($inputs);
        return redirect('admin/employee-performance')->with('message', "You have inserted informations successfully");


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
        $emp = EmployeePerformance::find($id);

        $emp->delete();
        return redirect()->back();


    }
}
