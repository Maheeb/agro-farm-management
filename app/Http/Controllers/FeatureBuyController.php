<?php

namespace App\Http\Controllers;

use App\BuyOrder;
use App\Fbuy;
use Illuminate\Http\Request;

class FeatureBuyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
//        $this->middleware('staff');
        $this->middleware('admin');

    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fbuys = Fbuy::all();

        return view('backend.featured-buy.index',compact('fbuys'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('backend.featured-buy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

                'product_title'=>'required|regex:/^[\pL\s\-]+$/u|min:3|max:50',
                'product_info'=>'required|regex:/^[\pL\s\-]+$/u|min:5|max:80',
                'price'=>'digits_between:2,8',
                'category_name'=>'required|regex:/^[\pL\s\-]+$/u|min:3|max:20',

            ]);
        $inputs = $request->all();
        if ( $request->hasFile('image')){
            if ($request->file('image')->isValid()){
                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $destinationPath = public_path('/frontend/img');
                $file->move($destinationPath , $name);
                //$inputs = $request->all();
                $inputs['image'] = $name;
            }
        }
        Fbuy::create($inputs);
        return redirect()->back()->with('message', "You have created Featured Buy product successfully");



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
        $fbuy = Fbuy::findOrFail($id);
        return view("backend.featured-buy.edit",compact('fbuy'));
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
        $this->validate($request,[

            'product_title'=>'required|regex:/^[\pL\s\-]+$/u|min:3|max:50',
            'product_info'=>'required|regex:/^[\pL\s\-]+$/u|min:5|max:80',
            'price'=>'digits_between:2,8',
            'category_name'=>'required|regex:/^[\pL\s\-]+$/u|min:3|max:20',

        ]);


        $fbuy = Fbuy::findOrFail($id);
        $inputs = $request->all();
        if ( $request->hasFile('image')){
            if ($request->file('image')->isValid()){
                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $destinationPath = public_path('/frontend/img');
                $file->move($destinationPath , $name);
                //$inputs = $request->all();
                $inputs['image'] = $name;
            }
        }
        $fbuy->update($inputs);
        return redirect('admin/featured-buy');
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
        $fbuy = Fbuy::findOrFail($id);
        unlink(public_path('frontend/img/').$fbuy->image);
        $fbuy->delete();
        return redirect('admin/featured-buy')->with('message', "You have deleted Featured Buy product successfully");
    }
}
