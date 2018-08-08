<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Music;
use App\Models\Category;
class MusicController extends Controller
{
    public static function getMusic(){
    	$data['musics'] = Music::musics();
    	return view('backend.music', $data);
    }

    public static function getAddMusic(){
    	$data['cates'] = Music::cates();
    	return view('backend.addMusic', $data);
    }

    public function postAddMusic(Request $request){
    	$filename = $request->img->getClientOriginalName();
    	$music = new Music;
    	$music->music_name = $request->name;
    	$music->music_slug = str_slug($request->name);
    	$music->music_logo = $filename;
    	$music->music_status = $request->status;
    	$music->music_mp3 = $request->url;
    	$music->music_info = $request->details;
    	$music->music_cate = $request->cate;
    	$music->save();
    	$request->img->move('local/storage/app/avatar', $filename);
    	return redirect()->intended('admin/music');
    }

    public static function getEditMusic($id){
        $data['cates'] =  Music::cates();
        $data['music'] = Music::find($id);
        return view('backend.editMusic', $data);
    }

    public function postEditMusic(Request $request,$id){
        $music = new Music;
        $arr['music_name'] = $request->name;
        $arr['music_slug'] = str_slug($request->name);
        if($request->hasFile('img')){
            $img = $request->img->getClientOriginalName();
            $arr['music_logo'] = $img;
            $request->img->move('local/storage/app/avatar', $img);
        }
        $arr['music_status'] = $request->status;
        $arr['music_mp3'] = $request->url;
        $arr['music_info'] = $request->details;
        $arr['music_cate'] = $request->cate;

        $music::where('music_id', $id)->update($arr);
        return redirect()->intended('admin/music');
    }

    public function getDeleteMusic($id){
        Music::destroy($id);
        return back();
    }
}
