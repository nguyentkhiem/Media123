<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\AddMovieRequest;
use App\Http\Requests\EditMovieRequest; 
use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Category;
use DB;

class MovieController extends Controller
{
    public static function getMovie(){
    	$data['movies'] = Movie::movies();
    	return view('backend.movie', $data);
    }

    public static function getAddMovie(){
    	$data['cates'] = Movie::cates();
    	return view('backend.addMovie', $data);
    }

    public function postAddMovie(AddMovieRequest $request){
    	$filename = $request->img->getClientOriginalName();
    	$movie = new Movie;
    	$movie->movie_name = $request->name;
    	$movie->movie_slug = str_slug($request->name);
    	$movie->movie_logo = $filename;
    	$movie->movie_status = $request->status;
    	$movie->movie_video = $request->url;
    	$movie->movie_info = $request->details;
    	$movie->movie_cate = $request->cate;
        $movie->votes = 0;
    	$movie->save();
    	$request->img->move('local/storage/app/avatar', $filename);
    	return redirect()->intended('admin/movie');
    }

    public static function getEditMovie($id){
    	$data['movie'] = Movie::find($id);
    	$data['cate'] = Movie::cates();
    	return view('backend.editMovie', $data);
    }

    public function postEditMovie(EditMovieRequest $request,$id){
    	$movie = new Movie;
    	$arr['movie_name'] = $request->name;
    	$arr['movie_slug'] = str_slug($request->name);
    	if($request->hasFile('img')){
    		$img = $request->img->getClientOriginalName();
    		$arr['movie_logo'] = $img;
    		$request->img->move('local/storage/app/avatar', $img);
    	}
    	$arr['movie_status'] = $request->status;
    	$arr['movie_video'] = $request->url;
    	$arr['movie_info'] = $request->details;
    	$arr['movie_cate'] = $request->cate;
        $arr['votes'] = 0;

    	$movie::where('movie_id', $id)->update($arr);
    	return redirect()->intended('admin/movie');
    }

    public function getDeleteMovie($id){
    	Movie::destroy($id);
    	return back();
    }
}
