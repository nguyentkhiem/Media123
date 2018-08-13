<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Music extends Model
{
    protected $table = 'vp_music';
    protected $primaryKey = 'music_id';
    protected $guarded = [];
    protected static $music;
    protected static $cate;

    public static function musics(){
    	self::$music = DB::table('vp_music')->join('vp_categories', 'vp_music.music_cate', '=', 'vp_categories.cate_id')->orderBy('music_id', 'DESC')->paginate(3);
    	return self::$music;
    } 

    public static function cates(){
    	self::$cate = DB::table('vp_music')->join('vp_categories', 'vp_music.music_cate', '=', 'vp_categories.cate_id')->orderBy('music_id', 'DESC')->take(1)->get()->toArray();
    	return self::$cate;
    }
}
