<?php

namespace App\Http\Controllers;

use App\EmployeeInfo;
use App\EmployeeInfoDetl;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmployeeInfoController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
//        $this->middleware('staff');
    }


    public function index()
    {

        $infos= EmployeeInfo::all();


        return view('backend.employee-info.employee-index',compact('infos'));
    }

    public function store(Request $request)
    {
        $id = (int) $request->Id;

//        dd($id);
        $emp_name = $request->emp_name;
        $emp_address = $request->emp_address;
        $emp_bg = $request->emp_blood_group;
        $emp_nid = $request->emp_nid;
        $emp_id = $request->emp_id;
        $join_date = $request->join;
        $designation = $request->designation;
        $salary_amount = $request->salary_amount;

        $jd = Carbon::parse($join_date)->format('Y-m-d H:i:s');

//        dd($jd);
        $inputs=array();
        $details =array();
        $inputs['emp_name']= $emp_name;
        $inputs['emp_address']= $emp_address;
        $inputs['emp_blood_group'] = $emp_bg;
        $inputs['emp_nid'] = $emp_nid;
        $inputs['emp_id'] = $emp_id;
        $inputs['joining_date'] = $jd;
        $inputs['designation'] = $designation;
        $inputs['salary_amount']= $salary_amount;


        if ( $request->hasFile('image')){
            if ($request->file('image')->isValid()){
                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $destinationPath = public_path('/backend/img');
                $file->move($destinationPath , $name);
                //$inputs = $request->all();
                $inputs['image'] = $name;
            }
        }





        if($id>0) {

            $this->validate($request,[

                'emp_name'=>'required|regex:/^[\pL\s\-]+$/u|min:3|max:50',
                'emp_address'=>'required|regex:/^[\pL\s\-]+$/u|min:5|max:50',
                'emp_blood_group'=>['required','regex: /^(A|B|AB|O)[-+]$/'],
                'emp_nid'=>'required|digits_between:5,7',
//                'emp_id'=>'required|string|max:255|unique:employee_info',
                'designation'=>'required|regex:/^[\pL\s\-]+$/u|min:5|max:20',
                'salary_amount'=>'required|digits_between:4,6',

            ]);




            EmployeeInfo::find($id)->update($inputs);

            return redirect()->back()->with('message', "You have inserted  informations successfully");


        }

        else
            {


                $this->validate($request,[

                    'emp_name'=>'required|regex:/^[\pL\s\-]+$/u|min:3|max:50',
                    'emp_address'=>'required|regex:/^[\pL\s\-]+$/u|min:5|max:50',
                    'emp_blood_group'=>['required','regex: /^(A|B|AB|O)[-+]$/'],
                    'emp_nid'=>'required|digits_between:5,7',
                    'emp_id'=>'required|string|max:255|unique:employee_info',
                    'designation'=>'required|regex:/^[\pL\s\-]+$/u|min:5|max:20',
                    'salary_amount'=>'required|digits_between:4,6',

                ]);



                EmployeeInfo::create($inputs);

                return redirect()->back()->with('message', "You have inserted  informations successfully");

            }



        }



    public function edit($id)
    {
        $data = EmployeeInfo::find($id);


        $empTable="";
        $countID=0;


    return response()->json([

        'data' => $data,

    ]);


    }





public function destroy($id)
{
    $emp = EmployeeInfo::find($id);

    $emp->delete();
    return redirect()->back();
}













    }










