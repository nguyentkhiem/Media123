<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use DB;

class BannerController extends Controller
{
    public static function getBanner(){
    	$data['banners'] = Banner::banners();
    	return view('backend.banner', $data);
    }

    public function getAddBanner(){
    	return view('backend.addBanner');
    }

    public function postAddBanner(Request $request){
    	$filename = $request->img->getClientOriginalName();
    	$banner = new Banner;
    	$banner->banner_name = $request->name;
    	$banner->banner_link = $request->link;
    	$banner->banner_price = $request->price;
    	$banner->banner_logo = $filename;
    	$banner->banner_status = $request->status;
    	$request->img->move('local/storage/app/avatar', $filename);
    	$banner->save();
    	return redirect()->intended('admin/banner');
    }

    public function getEditBanner($id){
    	$data['banner'] = Banner::find($id);
    	return view('backend.editBanner', $data);
    }

    public function postEditBanner(Request $request, $id){
    	$banner = new Banner;
    	$arr['banner_name'] = $request->name;
    	$arr['banner_link'] = $request->link;
    	$arr['banner_price'] = $request->price;
    	if($request->hasFile('img')){
    		$img = $request->img->getClientOriginalName();
    		$arr['banner_logo'] = $img;
    		$request->img->move('local/storage/app/avatar', $img);
    	} 
    	$arr['banner_status'] = $request->status;
    	$banner::where('banner_id', $id)->update($arr);
    	return redirect()->intended('admin/banner');
    }

    public function getDeleteBanner($id){
    	Banner::destroy($id);
    	return back();
    }

}
