<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('staff');
        $this->middleware('admin');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('backend.index');

        if (Auth::check() && Auth::user()->role == 'staff') {
            return view('backend.staff.staff-index');
        }
        else if(Auth::check() && Auth::user()->role == 'admin'){

            return view('backend.index');
        }



    }




}
