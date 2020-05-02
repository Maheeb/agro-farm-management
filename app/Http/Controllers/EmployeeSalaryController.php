<?php

namespace App\Http\Controllers;

use App\AdvancedSalary;
use App\EmployeeInfo;
use App\EmployeeSalary;
use App\Month;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmployeeSalaryController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
//        $this->middleware('staff');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

//        $empsalaryInfos = EmployeeSalary::all();
        $empsalaryInfos = EmployeeSalary::get()->sortByDesc('id');

//        $orders = BuyOrder::get()->sortByDesc('id');

        return view('backend.employee-salary.employee-salary-index',compact('empsalaryInfos'));
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

//        dd($months);

        return view('backend.employee-salary.employee-salary-create',compact('empNames','months'));
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
        $salary_amount = $request->salary_amount;
        $month = $request->month;
        $date = $request->date;
        $previous_month_advanced = $request->previous_month_advanced;

        $note = $request->note;

        $advanced_amount=null;
        if (AdvancedSalary::where('empinfo_id', $empinfo_id)->orderBy('created_at', 'desc')->exists()) {
            $advanced_amount = AdvancedSalary::where('empinfo_id', $empinfo_id)->orderBy('created_at', 'desc')->first();

            $advanced = $advanced_amount->advanced_amount;
        }
        else{

            $advanced=0;
            }


//        $final_salary = abs($salary_amount+$advanced-$previous_month_advanced);
            $final_salary = $salary_amount+$advanced-$previous_month_advanced;

            $emp_name = EmployeeInfo::where('id',$empinfo_id)->first();
            $sd = Carbon::parse($date)->format('Y-m-d H:i:s');







        $inputs['empinfo_id']= $empinfo_id;
        $inputs['name']= $emp_name->emp_name;
        $inputs['salary_amount']= $salary_amount;
        $inputs['month']= $month;
        $inputs['advanced']= $advanced;
        $inputs['previous_month_advanced']= $previous_month_advanced;
        $inputs['date']= $sd;
        $inputs['final_salary']= $final_salary;
        $inputs['note']= $note;


        $this->validate($request,[

            'today'=>Carbon::now(),
            'date'=>'required|date|after_or_equal:today',
            'salary_amount'=>'required|digits_between:4,6',
            'note'=>'required|string|max:255',

        ]);


        EmployeeSalary::create($inputs);
        return redirect('admin/employee-salary')->with('message', "You have inserted informations successfully");

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

        $empsalaryInfo = EmployeeSalary::findorFail($id);

//        dd($empsalaryInfo);

        $empNames =EmployeeInfo::where('id',$empsalaryInfo->empinfo_id)->pluck('emp_name','id');

        return view('backend.employee-salary.employee-salary-edit',compact('empsalaryInfo','empNames'));
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
        $empsalaryInfo = EmployeeSalary::findorFail($id);

        $empinfo_id = $request->name;
        $salary_amount = $request->salary_amount;
        $month = $request->month;
        $date = $request->date;
        $advanced_amount = AdvancedSalary::where('empinfo_id',$empinfo_id)->orderBy('created_at', 'desc')->first();


        $advanced = $advanced_amount->advanced_amount;
        $previous_month_advanced = $request->previous_month_advanced;
        $note = $request->note;

        $final_salary = abs($salary_amount+$advanced-$previous_month_advanced);

        $emp_name = EmployeeInfo::where('id',$empinfo_id)->first();
        $sd = Carbon::parse($date)->format('Y-m-d H:i:s');

//        dd($emp_name,$empinfo_id);

        $inputs['empinfo_id']= $empinfo_id;
        $inputs['name']= $emp_name->emp_name;
        $inputs['salary_amount']= $final_salary;
        $inputs['month']= $month;
        $inputs['advanced']= $advanced;
        $inputs['previous_month_advanced']= $previous_month_advanced;
        $inputs['date']= $sd;
        $inputs['final_salary']= $final_salary;
        $inputs['note']= $note;


        $empsalaryInfo->update($inputs);
        return redirect('admin/employee-salary')->with('message', "You have inserted informations successfully");

    }

    public function previousSalary(Request $request)
    {

        $empId = $request->empID;


//        $advanced_amount=null;
//        if(AdvancedSalary::where('empinfo_id',$empId)->exists()) {
//
//            $advanced_amount = AdvancedSalary::where('empinfo_id', $empId)->orderBy('created_at', 'desc')->first();
//            $advanced_id = $advanced_amount->id;
//        }
//
//        else{
//
//            $advanced_amount = 0;
//        }
//        dd($advanced_amount->advanced);

        $previous_amount=null;
        $advanced_amount=null;
        if (AdvancedSalary::where('empinfo_id',$empId)->exists()) {
            $advanced_amount = AdvancedSalary::where('empinfo_id', $empId)->orderBy('created_at', 'desc')->first();
            $advanced_id = $advanced_amount->id;


            if (AdvancedSalary::where('empinfo_id', $empId)->where('id', '<', $advanced_id)->orderBy('created_at', 'desc')->exists()) {
            $previous = AdvancedSalary::where('empinfo_id', $empId)->where('id', '<', $advanced_id)->orderBy('created_at', 'desc')->first();
            $previous_amount = $previous->advanced_amount;
        }
        else{

            $previous_amount=0;
        }


        }
        else{
//            $advanced_amount=0;
            $previous_amount=0;
        }

        $salary = EmployeeInfo::where('id',$empId)->first();
        $salary_amount = $salary->salary_amount;


//        dd($salary_amount);

        $data['previous_amount'] = $previous_amount;
        $data['salary_amount'] = $salary_amount;

//        dd($previous);
        return response()->json([

            'data' => $data,

        ]);

//        return $previous_amount;

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

        $empsalaryInfo = EmployeeSalary::findorFail($id);
        $empsalaryInfo->delete();
        return redirect('admin/employee-salary')->with('message', "You have deleted informations successfully");
    }
}
