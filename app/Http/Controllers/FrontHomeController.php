<?php

namespace App\Http\Controllers;

use App\BuyOrder;
use App\Category;
use App\Contact;
use App\Fbuy;
use App\NameTest;
use App\Notifications\OrderPlacedBuy;
use App\Product;
use App\Test;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
class FrontHomeController extends Controller
{


    public function __construct()
    {
//        $this->middleware('auth');
//        $this->middleware('guest');
//        $this->middleware('visitor');
//        $this->middleware('staff');
//        $this->middleware('admin');

//        $this->user = Auth::user()->id;

    }

    public function home(){

//        $fbuys = Fbuy::all();

        $fbuys = Product::where('type','3')->get();
        $fsells = Product::where('type','4')->get();

        return view('frontend.ssagro-home',compact('fbuys','fsells'));
    }


    public function buyProudcts(){
        $pagination = 9;
//        $categories = Category::all();
        $categories = Category::where('type','Buy')->get();
        $categoryName="";

        if (request()->category) {
            $products = Product::with('categories')->where('type',1)->whereHas('categories', function ($query) {
                $query->where('slug', request()->category);
            });

            $categoryName = $categories->where('slug', request()->category)->first()->name;

        } else {
            $products = Product::take(12)->where('type',1);
//            $categories = Category::all();
            $categoryName="All Products (বিক্রয়ের জন্য সকল পণ্যসমূহ)";
        }


        if (request()->sort == 'low_high') {
            $products = $products->orderBy('price')->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderByDesc('price')->paginate($pagination);
        }
        else {
            $products = $products->paginate($pagination);
        }

//        dd($categoryName);
            return view('frontend.ssagro-buy-product',compact('products','categories','categoryName'));
    }



    public function buyProductsShow($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
//        $mightAlsoLike = Product::where('slug', '!=', $slug)->mightAlsoLike()->get();
//
//        $stockLevel = getStockLevel($product->quantity);

        $data=[];
        $id = $product->id;
        $name =$product->name;
        $image = $product->image;
        $desc = $product->description;
        $price = $product->price;
        $unit = $product->unit;


        return view('frontend.buy-form')->with([
            'name' => $name,
            'image'=> $image,
            'desc'=>$desc,
            'price'=>$price,
            'unit'=>$unit,
            'id'=>$id
//            'stockLevel' => $stockLevel,
//            'mightAlsoLike' => $mightAlsoLike,
        ]);
    }

    public function buyOrder(Request $request){

        $product_id =  $request->id;
        $product_name = $request->product_name;
        $customer_name = $request->customer_name;
        $location = $request->location;
        $mobile = $request->mobile;
        $amount = $request->amount;
        $creatd_at = $request->created_at;

       $price = Product::where('id',$product_id)->firstOrFail();

       $product_price = $price->price;

       $product_price_amount = $product_price*$amount;

        $data['product_id']=$product_id;
        $data['product_name']=$product_name;
        $data['customer_name']=$customer_name;
        $data['location']=$location;
        $data['mobile']=$mobile;
        $data['amount']=$amount;
        $data['price']=$product_price_amount;
        $data['purchased_type']= "Buy";


        $this->validate($request,[

            'customer_name'=>'required|regex:/^[\pL\s\-]+$/u|min:3|max:50',
            'location'=>'required|regex:/^[\pL\s\-]+$/u|min:5|max:80',
            'amount'=>'digits_between:1,8',
            'mobile'=>'required|regex:/(01)[0-9]{9}/',

        ]);

        BuyOrder::create($data);

//        $user= User::find(1);
        $user= User::all();
        $fbuy = BuyOrder::find(1);
//        $user->notify(new OrderPlacedBuy($fbuy));
        Notification::send($user, new OrderPlacedBuy($fbuy));
        $msg = 'You have placed your order successfully, We will call you soon, <a href="'. url('/buy-products') . '"> click here  </a>  to buy more';

//        return redirect('buy-products')->with('message', "You have placed your order successfully, We will call you soon");
        return redirect()->back()->withSuccess($msg);


    }




    public function sellProudcts(){
        $pagination = 9;
//        $categories = Category::all();
        $categories = Category::where('type',"Sell")->get();
        $categoryName="";
        if (request()->category) {
            $products = Product::with('categories')->where('type',2)->whereHas('categories', function ($query) {
                $query->where('slug', request()->category);
            });

            $categoryName = $categories->where('slug', request()->category)->first()->name;

        } else {
            $products = Product::take(12)->where('type',2);
//            $categories = Category::all();
            $categoryName="All Products (ক্রয়ের জন্য সকল পণ্যসমূহ)";
        }


        if (request()->sort == 'low_high') {
            $products = $products->orderBy('price')->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderByDesc('price')->paginate($pagination);
        }
        else {
            $products = $products->paginate($pagination);
        }

//        dd($categoryName);
        return view('frontend.ssagro-sell-product',compact('products','categories','categoryName'));
    }


    public function sellProductsShow($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
//        $mightAlsoLike = Product::where('slug', '!=', $slug)->mightAlsoLike()->get();
//
//        $stockLevel = getStockLevel($product->quantity);

        $data=[];
        $id = $product->id;
        $name =$product->name;
        $image = $product->image;
        $desc = $product->description;
        $price = $product->price;
        $unit = $product->unit;


        return view('frontend.sell-form')->with([
            'name' => $name,
            'image'=> $image,
            'desc'=>$desc,
            'price'=>$price,
            'unit'=>$unit,
            'id'=>$id
//            'stockLevel' => $stockLevel,
//            'mightAlsoLike' => $mightAlsoLike,
        ]);
    }

    public function sellOrder(Request $request){

        $product_id =  $request->id;
        $product_name = $request->product_name;
        $customer_name = $request->customer_name;
        $location = $request->location;
        $mobile = $request->mobile;
        $amount = $request->amount;
        $creatd_at = $request->created_at;

        $price = Product::where('id',$product_id)->firstOrFail();

        $product_price = $price->price;

        $product_price_amount = $product_price*$amount;

        $data['product_id']=$product_id;
        $data['product_name']=$product_name;
        $data['customer_name']=$customer_name;
        $data['location']=$location;
        $data['mobile']=$mobile;
        $data['amount']=$amount;
        $data['price']=$product_price_amount;
        $data['purchased_type']= "Sell";


        $this->validate($request,[

            'customer_name'=>'required|regex:/^[\pL\s\-]+$/u|min:3|max:50',
            'location'=>'required|regex:/^[\pL\s\-]+$/u|min:5|max:80',
            'amount'=>'digits_between:1,8',
            'mobile'=>'required|regex:/(01)[0-9]{9}/',

        ]);

        BuyOrder::create($data);

        $user= User::find(1);
        $fsell = BuyOrder::find(1);
        $user->notify(new OrderPlacedBuy($fsell));

        $msg = 'You have placed your order successfully, We will call you soon, <a href="'. url('/sell-products') . '"> click here  </a>  to sell more';

//        return redirect('buy-products')->with('message', "You have placed your order successfully, We will call you soon");
        return redirect()->back()->withSuccess($msg);


    }


    public function faq(){



        return view('frontend.ssagro-faq');

    }


    public function about(){



        return view('frontend.ssagro-about');

    }

    public function contact(){


        return view('frontend.ssagro-contact');
    }



    public function contactStore(Request $request){

        $name = $request->name;
        $mobile = $request->mobile;
        $message = $request->message;


        $inputs= array();

        $inputs['name']= $name;
        $inputs['mobile']= $mobile;
        $inputs['message']= $message;

        Contact::create($inputs);

        $msg = 'You have sent your message successfully';

        return redirect()->back()->withSuccess($msg);

    }

}
