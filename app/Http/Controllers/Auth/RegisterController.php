<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\EmployeeInfo;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
//    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

//    $test = request()->role;
//        dd($test);




        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
//            'role' => 'required|in:admin,agent,customer',
            'role' => 'required|in:staff,visitor',


//            'emp_id' => 'exists:employee_info|required|string|max:255|unique:users',
//            'emp_id' => 'sometimes|required|nullable|exists:employee_info|string|max:255|unique:users',
//            'emp_id' => 'required_if:role,==,staff|nullable|exists:employee_info|string|max:255|unique:users',
            'emp_id' => 'required_if:role,staff|nullable|string|exists:employee_info|max:255|unique:users',
//            'emp_id' => 'required_if:role,staff|string|exists:employee_info|max:255|unique:users',



        ]);


    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {


            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'role' => $data['role'],
                'emp_id' => $data['emp_id'],

            ]);
            return $user;



    }




    protected function redirectTo( ) {
        if (Auth::check() && Auth::user()->role == 'staff') {
            return('/staff');
        }
        elseif (Auth::check() && Auth::user()->role == 'admin') {
            return('/admin');
        }
        elseif (Auth::check() && Auth::user()->role == 'visitor') {
            return('/visitor');
        }
        else {
            return('/login');
        }
    }





}
