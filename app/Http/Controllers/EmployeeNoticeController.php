<?php

namespace App\Http\Controllers;

use App\EmployeeNotice;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmployeeNoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $empNotices = EmployeeNotice::all();


        return view('backend.employee-notice.notice-index',compact('empNotices'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        return view('backend.employee-notice.notice-create');
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

        $title = $request->title;
        $body = $request->body;
        $date = Carbon::parse($request->date)->format('Y-m-d H:i:s');


        $inputs['title'] =$title;
        $inputs['body'] =$body;
        $inputs['date'] =$date;


        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'date'=>'required|string|max:100',


        ]);





        EmployeeNotice::create($inputs);

        return redirect('admin/employee-notice')->with('message', "You have inserted  informations successfully");


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

        $empNotice = EmployeeNotice::findOrFail($id);

       

        $empNotice->delete();


        return redirect('admin/employee-notice')->with('message', "You have deleted information successfully");

    }
}
