<?php

namespace App\Http\Controllers;
use App\Models\User; 

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        // return view('auth.login');
            
        //login code
        if(\Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }

        return redirect('login')->withError('Login details are not valid');

    }

    public function register_view(){
        return view('auth.register');
    }

    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed',
            'phone' => 'required|unique:users', // Add phone validation

        ]);
        // dd($request->all());
        // return view('auth.register');


        //save in user table
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password), 
            'phone' => $request->phone, // Save phone to the database


        ]);

        //login user here

        if(\Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }

        return redirect('register')->withError('Error');
    }

    public function home(){
        return view('home');
    }
    
    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('/');
    }
}
