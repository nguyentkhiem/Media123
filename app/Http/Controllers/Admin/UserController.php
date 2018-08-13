<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AddUsersRequest;
use App\Http\Requests\EditUsersRequest;
use App\Http\Controllers\Controller;
use App\Models\Users;
use Auth;
use DB;

class UserController extends Controller
{
    public static function getUser()
    {
        $data['users'] = Users::users();
        return view('backend.listClient', $data);
    }

    public function getAddUser()
    {
        return view('backend.addClient');
    }

    public function postAddUser(AddUsersRequest $request)
    {
        $filename = $request->img->getClientOriginalName();
        $users = new Users;
        $users->user_name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->user_img = $filename;
        $users->user_level = $request->level;
        $users->token = str_random(40);
        $users->status = 1;
        $users->save();
        $request->img->move('storage/avatar', $filename);
        return redirect()->intended('admin/user');
    }

    public function getEditUser($id)
    {
        $data['list'] = Users::find($id);
        return view('backend.editClient', $data);
    }

    public function postEditUser(EditUsersRequest $request, $id)
    {
        $users = new Users;
        $arr['user_name'] = $request->name;
        $arr['email'] = $request->email;
       
        if ($request->hasFile('img')) {
            $img = $request->img->getClientOriginalName();
            $arr['user_img'] = $img;
            $request->img->move('storage/avatar', $img);
        }
        $arr['user_level'] = $request->level;
        $arr['token'] = str_random(40);
        $arr['status'] = '1';

        // $pass = DB::table('vp_users')->where('user_id', $id)->select('password')->first();
        
        // dd($pass->password);

        if($request->password == ''){
            $users::where('user_id', $id)->update($arr);
        }else{
            $arr['password'] = Hash::make($request->password);
            $users::where('user_id', $id)->update($arr);
        }
            
            return redirect()->intended('admin/user');
    }

    public function getDeleteUser($id)
    {
        Users::destroy($id);
        return back();
    }
}
