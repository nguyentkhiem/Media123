<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Images;
use App\Models\Movie;
use App\Models\Music;
use App\Models\News;
use App\Models\Banner;
use App\Models\Votes;
use DB;
use Auth;

class FrontendController extends Controller
{
    public function getHome(){
    	// $data['category'] = Category::orderBy('cate_id', 'ASC')->get();
    	$data['banners'] = Banner::where('banner_status', '=', 1)->orderBy('banner_id', 'DESC')->get();
    	$data['movies'] = Movie::orderBy('movie_id', 'DESC')->take(8)->get();
    	$data['musics'] = Music::orderBy('music_id', 'DESC')->take(8)->get();
    	$data['images'] = Images::orderBy('image_id', 'DESC')->take(8)->get();
    	$data['newss'] = News::orderBy('news_id', 'DESC')->take(4)->get();
    	return view('frontend.home', $data);
    }

    public function getMovieDetails($id){
    	$data['movie'] = Movie::find($id);
        $data['votes'] = DB::table('vp_vote')->where('vote_movie', '=', $id)->avg('votes');

        // dd($data['votes']);
    	return view('frontend.movieDetails', $data);
    }

    public function getMusicDetails($id){
    	$data['music'] = Music::find($id);
    	return view('frontend.musicDetails', $data);
    }

    public function getImageDetails($id){
    	$data['image'] = Images::find($id);
    	return view('frontend.imageDetails', $data);
    }

    public function getNewsDetails($id){
    	$data['news'] = News::find($id);
    	return view('frontend.newsDetails', $data);
    }

    public function getListMovie(Request $request){
    	$data['movies'] = Movie::all();
    	if($request->result){
			$result = $request->result;
	    	$result = str_replace(' ', '%', $result);
	    	$data['movies'] = Movie::where('movie_name', 'like', '%'.$result.'%')->get();
    	}
    	
    	return view('frontend.listMovie', $data);
    }

    public function getListMusic(Request $request){
    	$data['musics'] = Music::all();
    	if($request->result){
    		$result = $request->result;
    		$result = str_replace(' ', '%', $result);
    		$data['musics'] = Music::where('music_name', 'like', '%'.$result.'%')->get();
    	}
    	return view('frontend.listMusic', $data);
    }

    public function getListNews(Request $request){
    	$data['newss'] = News::all();
    	if($request->result){
    		$result = $request->result;
    		$result = str_replace(' ', '%', $result);
    		$data['newss'] = News::where('news_name', 'like', '%'.$result.'%')->get();
    	}
    	return view('frontend.listNews', $data);
    }

    public function getListImage(Request $request){
    	$data['images'] = Images::all();
    	if($request->result){
    		$result = $request->result;
    		$result = str_replace(' ', '%', $result);
    		$data['images'] = Images::where('image_name', 'like', '%'.$result.'%')->get();
    	}
    	return view('frontend.listImage', $data);
    }

    public function getVoteMovie($movie_id, $vote){
        $updateVotes = DB::table('vp_vote')->where('vote_user', '=', auth::id())->where('vote_movie', '=', $movie_id)->count();

        if(  $updateVotes > 0 ) {
            $updateVotes = DB::table('vp_vote')->where('vote_user', '=', auth::id())->where('vote_movie', '=', $movie_id)->update(['votes' => $vote]);
        }else {
            $updateVotes = new Votes();
            $updateVotes->vote_user = auth::id();
            $updateVotes->vote_movie = $movie_id;
            $updateVotes->votes = $vote;
            $updateVotes->save();
        }

       
        $avgVote = DB::table('vp_vote')->where('vote_movie', $movie_id)->avg('votes');
        $vote = DB::table('vp_movie')->where('movie_id', '=', $movie_id)->update(['votes' => $avgVote]);
// dd($avgVote);
        return back();
    }


}
