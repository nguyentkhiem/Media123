<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Http\Requests\RegisterRequest;
use Mail;
use DB;

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
    		$request->img->move('storage/avatar', $filename);
    	}else{
    		$arr['user_img'] = '12.jpg';
    	}
    	$arr['user_level'] = '3';
        $arr['token'] = str_random(40);
        $arr['status'] = '0';
        $email = $request->email;
        // dd($arr);
        // dd(config('mail.host'));
        Mail::send('frontend.email', $arr, function ($message) use($email){
            $message->from('www.nguyentkhiem96@gmail.com', 'NguyenThanhKhiem');

            $message->to($email, $email);

            // $message->cc('nguyenthanhkhiem81196@gmail.com', 'NguyenThanhKhiem');

            $message->subject('Xác nhận đăng ký từ Media Port');
        });


    	$user::insert($arr);
        flash('Bạn check mail để tiếp tục')->success();
    	return redirect()->intended('register');

    }
    public function getCheckMail($user_mail, $token){
        $count = DB::table('vp_users')->where('email', '=', $user_mail)->where('token', '=', $token)->update(['status' => 1]);
        
        
        flash('Bạn cần đăng nhập để tiếp tục')->success();
        return redirect()->intended('login');
        // ->withInput()->with('error', 'Bạn cần đăng nhập để tiếp tục');
    }
}
