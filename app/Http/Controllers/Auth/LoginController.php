<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use Hash;
use Auth;

class LoginController extends Controller
{

    

	public function login_form(){

		
		//	Admin::create(['name'=>'pos','email'=>'super@admin.com','password'=>Hash::make('123456')]);
		return view('auth.login');
	}

	public function login(Request $request){

			Auth::guard('admin')->attempt(['email'=>$request['email'],'password'=>$request['password']] );

			if(Auth::guard('admin')->check()){

				return redirect()->route('home');
			}

			return back();

	}

	public function home(){

 		return view('posdev.index');
		//dump('Welcome to pos');
	}

	public function logout(){

		 Auth::guard('admin')->logout();
		return redirect()->route('login.form');
	}


    
}
