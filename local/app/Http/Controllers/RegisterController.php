<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function getRegister(){
    	return view('frontend.register');
    }

    public function postRegister(RegisterRequest $request){
    	$user = new Users;
    	$arr['user_name'] = $request->name;
    	$arr['email'] = $request->email;
    	if($request->password1 == $request->password2){
    		$arr['password'] = bcrypt($request->password1);
    	}else{
    		return back()->withInput()->with('error', 'Mật khẩu không khớp nhau!');
    	}
    	if($request->img){
    		$filename = $request->img->getClientOriginalName();
    		$arr['user_img'] = $filename;
    		$request->img->move('local/storage/app/avatar', $filename);
    	}else{
    		$arr['user_img'] = '12.jpg';
    	}
    	
    	$arr['user_level'] = '3';

    	$user::insert($arr);
    	return redirect()->intended('login')->withInput()->with('error', 'Bạn cần đăng nhập để tiếp tục');
    }
}
