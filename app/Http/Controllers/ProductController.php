<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryProduct;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
        public function __construct()
        {
            $this->middleware('auth');
//            $this->middleware('staff');
            $this->middleware('admin');
        }

    public function index()
    {

//        $products = Product::paginate(7);
        $products = Product::all();


        return view('backend.products.product-index',compact('products'));
    }


    public function create()
    {

        $categories = Category::pluck('name','id');
        $catTypes = [1=>"Buy",2=>"Sell",3=>"Featured Buy",4=>"Featured Sell"];

        return view('backend.products.product-create',compact('categories','catTypes'));

    }


    public function store(Request $request)
    {

            $inputs = array();
            $details = array();

            $product_name = $request->name;
            $product_slug = $request->slug;
            $product_details = $request->details;
            $product_category = $request->category;

            $product_price = $request->price;
            $product_unit = $request->unit;
            $product_type = $request->type;
            $product_desc = $request->description;
            $product_cost = $request->production_cost;

            if ( $request->hasFile('image')){
            if ($request->file('image')->isValid()){
                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $destinationPath = public_path('/frontend/img/products');
                $file->move($destinationPath , $name);
                //$inputs = $request->all();
                $inputs['image'] = $name;
            }
        }

        $inputs['name']=$product_name;
        $inputs['slug']=$product_slug;
        $inputs['details']=$product_details;
        $inputs['category']=$product_category;
        $inputs['price']=$product_price;
        $inputs['unit']=$product_unit;
        $inputs['type']=$product_type;
        $inputs['description']=$product_desc;
        $inputs['production_cost']=$product_cost;


        $this->validate($request,[

            'name'=>'required',
            'slug'=>'required',
            'details'=>'required',
            'category'=>'required',
            'description'=>'required',
            'type'=>'required',
            'price'=>'required|digits_between:1,5',
            'production_cost'=>'required|digits_between:1,5',
            'unit'=>'required|string',
     


        ]);




        if($record=Product::create($inputs)){


            $details['category_id'] = $product_category;
            $details['product_id'] = $record->id;

            CategoryProduct::create($details);
//            return redirect()->back()->with('message', "You have inserted informations successfully");
            return redirect('/admin/products');
        }


    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $pid = $product->id;
//        dd($pid);
        $pc = CategoryProduct::where('product_id',$pid)->first();
//        dd($pc->id);
        $product_category_id =  $pc->category_id;
//        dd($product_category_id);

        $catInfos = Category::where('id', $product_category_id)->first();
//        dd($catInfos);
        $catId = $catInfos->id;
        $catName = $catInfos->name;
        $categories = Category::pluck('name','id');
//        $catTypes = Product::pluck('type','id')->groupBy('1');



        return view('backend.products.product-edit',compact('product','catName','categories','catId'));

    }

    public function update(Request $request, $id)
    {

        $product = Product::findOrFail($id);

        $inputs = array();
        $details = array();

        $product_name = $request->name;
        $product_slug = $request->slug;
        $product_details = $request->details;
        $product_category = $request->category;

//        dd($product_category);

        $product_price = $request->price;
        $product_unit = $request->unit;
        $product_type = $request->type;
        $product_desc = $request->description;
        $product_cost = $request->production_cost;
        if ( $request->hasFile('image')){
            if ($request->file('image')->isValid()){
                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $destinationPath = public_path('/frontend/img/products');
                $file->move($destinationPath , $name);
                //$inputs = $request->all();
                $inputs['image'] = $name;
            }
        }

        $inputs['name']=$product_name;
        $inputs['slug']=$product_slug;
        $inputs['details']=$product_details;
        $inputs['category']=$product_category;
        $inputs['price']=$product_price;
        $inputs['unit']=$product_unit;
        $inputs['type']=$product_type;
        $inputs['description']=$product_desc;
        $inputs['production_cost']=$product_cost;
        $this->validate($request,[

            'name'=>'required',
            'slug'=>'required',
            'details'=>'required',
            'category'=>'required',
            'description'=>'required',
            'type'=>'required',
            'price'=>'required|digits_between:1,5',
            'production_cost'=>'required|digits_between:1,5',
            'unit'=>'required|string',



        ]);
        if($record= $product->update($inputs)){


            $details['category_id'] = $product_category;
            $details['product_id'] = $id;
            $product_id = $id;

//            dd($product_id);

            CategoryProduct::find($product_id)->update($details);
//            return redirect()->back()->with('message', "You have inserted informations successfully");
            return redirect('/admin/products');        }




    }



public function destroy($id)
{

        $product = Product::findOrFail($id);
        unlink(public_path('frontend/img/products/').$product->image);
        if($product->delete()){

            CategoryProduct::findOrFail($id)->delete();
        }
    return redirect('admin/products')->with('message', "You have deleted informations successfully");

}




}
