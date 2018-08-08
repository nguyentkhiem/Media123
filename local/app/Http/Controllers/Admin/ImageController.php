<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Images;
use DB;
class ImageController extends Controller
{
    public static function getImage(){
    	$data['images'] = Images::images();
    	return view('backend.image', $data);
    }

    public static function getAddImage(){
    	$data['cates'] = Images::cates();
    	return view('backend.addImage', $data);
    } 

    public function postAddImage(Request $request){
    	$filename = $request->img->getClientOriginalName();
    	$image = new Images;
    	$image->image_name = $request->name;
    	$image->image_slug = str_slug($request->name);
    	$image->image_img = $filename;
    	$image->image_status = $request->status;
    	$image->image_info = $request->details;
    	$image->image_cate = $request->cate;
    	$request->img->move('local/storage/app/avatar', $filename);
    	$image->save();
    	return redirect()->intended('admin/image');
    }
	public static function getEditImage($id){
		$data['image'] = Images::find($id);
    	$data['cates'] = Images::cates();
    	return view('backend.editImage', $data);
    }

    public function postEditImage(Request $request,$id){
    	$image = new Images;
    	$arr['image_name'] = $request->name;
    	$arr['image_slug'] = str_slug($request->name);
    	if($request->hasFile('img')){
    		$img = $request->img->getClientOriginalName();
    		$arr['image_img'] = $img;
    		$request->img->move('local/storage/app/avatar', $img);
    	}
    	$arr['image_status'] = $request->status;
    	$arr['image_info'] = $request->details;
    	$arr['image_cate'] = $request->cate;

    	$image::where('image_id', $id)->update($arr);
    	return redirect()->intended('admin/image');
    }

    public function getDeleteImage($id){
        Images::destroy($id);
        return back();
    }


}
