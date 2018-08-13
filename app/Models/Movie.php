<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Movie extends Model
{
    protected $table = 'vp_movie';
    protected $primaryKey = 'movie_id';
    protected $guarded = [];
    protected static $movie;
    protected static $cate;
    protected static $user;

    public static function movies(){
    	self::$movie = DB::table('vp_movie')->join('vp_categories', 'vp_movie.movie_cate', '=', 'vp_categories.cate_id')->orderBy('movie_id', 'DESC')->paginate(2);
    	return self::$movie;
    }

    public static function cates(){
    	self::$movie = DB::table('vp_movie')->join('vp_categories', 'vp_movie.movie_cate', '=', 'vp_categories.cate_id')->take(1)->get();
    	return self::$movie;
    }

    public static function user($id){
        return $user = DB::table('vp_movie')->join('vp_users', 'vp_movie.movie_user', '=', 'vp_users.user_id')->where('user_id', '=', $id)->get();
    } 
}
