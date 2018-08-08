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
        $users->save();
        $request->img->move('local/storage/app/avatar', $filename);
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
        $arr['password'] = Hash::make($request->password);
        // if($request->password==$users->password){
        //     $arr['password'] = $users->password;
        // }else{
        //     unset($users->password);
        //     $arr['password'] = bcrypt($request->password);
        // }
        if ($request->hasFile('img')) {
            $img = $request->img->getClientOriginalName();
            $arr['user_img'] = $img;
            $request->img->move('local/storage/app/avatar', $img);
        }
        $arr['user_level'] = $request->level;

        $users::where('user_id', $id)->update($arr);
            return redirect()->intended('admin/user');
    }

    public function getDeleteUser($id)
    {
        Users::destroy($id);
        return back();
    }
}
