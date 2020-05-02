<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('visitor');
//        $this->middleware('admin');

    }

    public function index(){


        return view('frontend.visitor.visitor');
    }

}
