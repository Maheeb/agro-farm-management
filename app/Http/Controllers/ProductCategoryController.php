<?php

namespace App\Http\Controllers;

use App\Category;
use App\Type;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
//        $this->middleware('staff');
        $this->middleware('admin');

    }
    public function index()
    {
        $categories = Category::all();
        $catTypes = Type::pluck('type_name','id');



//        dd($catTypes);

        return view('backend.categories.category-index',compact('categories','catTypes'));

    }

    public function store(Request $request)
    {

        $id = (int) $request->catId;
        $cat_name = $request->name;
        $cat_slug = $request->slug;
        $cat_type = $request->catType;


        $inputs=array();

        $inputs['name'] =$cat_name;
        $inputs['slug'] =$cat_slug;
        $inputs['type'] =$cat_type;

        if($id>0){

            $this->validate($request,[

                'name'=>'required',
                'slug'=>'required',
                'catType'=> 'required',

            ]);




            Category::find($id)->update($inputs);

            return redirect()->back()->with('message', "You have inserted  informations successfully");

        }
        else {


            $this->validate($request,[

                'name'=>'required',
                'slug'=>'required',
                'catType'=> 'required',

            ]);

            Category::create($inputs);

            return redirect()->back()->with('message', "You have inserted informations successfully");
        }
    }

    public function edit($id)
    {

        $data = Category::find($id);


        $empTable="";
        $countID=0;

//        dd($data);

        return response()->json([

            'data' => $data,

        ]);

    }

    public function delete($id)
    {


    }


}
