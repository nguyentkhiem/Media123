<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginUserController extends Controller
{
    public function getLogin(){
    	return view('frontend.loginUser');
    }

    public function postLogin(Request $request){
    	$arr = [
    		'email'=>$request->email,
    		'password'=>$request->password,
    	];
    	
    	if(Auth::attempt($arr)){
    		if(Auth::user()->user_level > 1){
    			return redirect()->intended('/');
    		}
    	}else{
    		return back()->withInput()->with('error', 'Sai mật khẩu hoặc password!');
    	}
    }
}
