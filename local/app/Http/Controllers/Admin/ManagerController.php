<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Models\Users;
use Auth;

class ManagerController extends Controller
{
    public function getManager()
    {
        $data['manager'] = Users::where('user_level', '=', 1)->get();
        return view('backend.listAdmin', $data);
    }

    public function getEditAdmin($id)
    {
        $data['update'] = Users::find($id);
        return view('backend.updateAdmin', $data);
    }
    public function postEditAdmin(Request $request, $id)
    {
        $users = new Users;
        $arr['user_name'] = $request->name;
        $arr['email'] = $request->email;
        //$arr['password'] = Hash::make($request->password); 
       
        if ($request->hasFile('img')) {
            $img = $request->img->getClientOriginalName();
            $arr['user_img'] = $img;
            $request->img->move('local/storage/app/avatar', $img);
        }
        $arr['user_level'] = '1';
        $arr['token'] = str_random(40);
        $arr['status'] = '1';

        if(Auth::user()->password == $request->password){
            //dd(Auth::user()->password);
            $users::where('user_id', $id)->update($arr);
        }else{
            $arr['password'] = Hash::make($request->password);
            $users::where('user_id', $id)->update($arr);
        }

            return redirect()->intended('admin/manager');
    }
}
