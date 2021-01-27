<?php

namespace App\Http\Controllers;

use App\EmployeeInfo;
use App\EmployeeNotice;
use App\EmployeePerformance;
use App\EmployeeSalary;
use Auth;
use Khill\Lavacharts\Lavacharts;
use Illuminate\Http\Request;
use Lava;

class StaffController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('staff');
//        $this->middleware('admin');

    }



    public function index(){


        $emp_id = Auth::user()->emp_id;
        $empInfos = EmployeeInfo::where('emp_id',$emp_id)->first();

//        dd($empInfos);

        return view('backend.staff.staff-index',compact('empInfos'));

    }

    public function stafSalary(){


        $emp_id = Auth::user()->emp_id;
        $empInfos = EmployeeInfo::where('emp_id',$emp_id)->first();

       $empSalaries = EmployeeSalary::where('empinfo_id',$empInfos->id)->get();

//        dd($empSalaries);

        return view('backend.staff.staff-salary',compact('empSalaries'));

    }

    public function staffNotice(){


        $emp_id = Auth::user()->emp_id;
        $empInfos = EmployeeInfo::where('emp_id',$emp_id)->first();

        $empNotices = EmployeeNotice::all();


        return view('backend.staff.staff-notice',compact('empNotices'));


    }

    public function staffPerformance(){


        $emp_id = Auth::user()->emp_id;
        $empInfos = EmployeeInfo::where('emp_id',$emp_id)->first();

//        $empPerf = EmployeePerformance::where('empinfo_id',$empInfos->id)->first();
        $empPerf = EmployeePerformance::where('empinfo_id',$empInfos->id)->orderBy('created_at', 'desc')->first();
//        $empPerfs = EmployeePerformance::where('empinfo_id',$empInfos->id)->get();



        $lava = new Lavacharts; // See note below for Laravel



        $performance = \Lava::DataTable();
        $data = EmployeePerformance::get()->toArray();



            $behavior = $empPerf->behavior;
            $punctuality = $empPerf->punctuality;
            $attendance = $empPerf->attendance;
            $attitude = $empPerf->attitude;
            $integrity = $empPerf->integrity;

//        dd($punctuality);

            $performance->addStringColumn('Food Poll')
                ->addNumberColumn('Behavior')
                ->addNumberColumn('Punctuality')
                ->addNumberColumn('attendance')
                ->addNumberColumn('attitude')
                ->addNumberColumn('integrity')
                ->addRow(['Behavior', $behavior, null, null, null, null])
                ->addRow(['Punctuality', null, $punctuality, null, null, null])
                ->addRow(['Attendance', null, null, $attendance, null, null])
                ->addRow(['Attitude', null, null, null, $attitude, null])
                ->addRow(['Integrity', null, null, null, null, $integrity]);


//        $lava->BarChart('Performances', $performance);

            $lava = \Lava::BarChart('Performances', $performance);


        return view('backend.staff.staff-performance',compact('empPerf','lava'));


    }



}
