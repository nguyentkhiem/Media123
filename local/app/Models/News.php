<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class News extends Model
{
    protected $table = 'vp_news';
    protected $primaryKey = 'news_id';
    protected $guarded = [];
    protected static $new;
    protected static $cate;

    public static function news(){
    	self::$new = DB::table('vp_news')->join('vp_categories', 'vp_news.news_cate', '=', 'vp_categories.cate_id')->orderBy('news_id', 'DESC')->paginate(3);
    	return self::$new;
    } 

    public static function cates(){
    	self::$cate = DB::table('vp_news')->join('vp_categories', 'vp_news.news_cate', '=', 'vp_categories.cate_id')->orderBy('news_id', 'DESC')->take(1)->get()->toArray();
    	return self::$cate;
    } 
}
