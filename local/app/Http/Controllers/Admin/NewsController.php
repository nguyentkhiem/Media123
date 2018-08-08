<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{
    public static function getNews(){
    	$data['newss'] = News::News();
    	return view('backend.news', $data);
    }

    public static function getAddNews(){
    	$data['cates'] = News::cates();
    	return view('backend.addNews', $data);
    } 

    public function postAddNews(Request $request){
    	$filename = $request->img->getClientOriginalName();
    	$news = new News;
    	$news->news_name = $request->name;
    	$news->news_slug = str_slug($request->name);
    	$news->news_logo = $filename;
    	$news->news_status = $request->status;
    	$news->news_content = $request->details;
    	$news->news_cate = $request->cate;
    	$request->img->move('local/storage/app/avatar', $filename);
    	$news->save();
    	return redirect()->intended('admin/news');
    }
	public static function getEditNews($id){
		$data['news'] = News::find($id);
    	$data['cates'] = News::cates();
    	return view('backend.editNews', $data);
    }

    public function postEditNews(Request $request,$id){
    	$news = new News;
    	$arr['news_name'] = $request->name;
    	$arr['news_slug'] = str_slug($request->name);
    	if($request->hasFile('img')){
    		$img = $request->img->getClientOriginalName();
    		$arr['news_logo'] = $img;
    		$request->img->move('local/storage/app/avatar', $img);
    	}
    	$arr['news_status'] = $request->status;
    	$arr['news_content'] = $request->details;
    	$arr['news_cate'] = $request->cate;

    	$news::where('news_id', $id)->update($arr);
    	return redirect()->intended('admin/news');
    }
    public function getDeleteNews($id){
        News::destroy($id);
        return back();
    }
}
