<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function getLogin(){
    	return view('backend.login');
    }

    public function postLogin(Request $request){
    	$arr = [
    		'email'=>$request->email,
    		'password'=>$request->password,
    	];
    	
    	if(Auth::attempt($arr)){
    		if(Auth::user()->user_level == 1){
    		  return redirect()->intended('admin/home');
            }else if(Auth::user()->user_level > 1){
                return redirect()->intended('/');
            }
    	}else{
    		return back()->withInput()->with('error', 'Sai mat khau hoac password!');
    	}
    }
}
