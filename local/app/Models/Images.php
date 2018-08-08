<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Images extends Model
{
    protected $table = 'vp_images';
    protected $primaryKey = 'image_id';
    protected $guarded = [];
    protected static $image;
    protected static $cate;

    public static function images(){
    	self::$image=DB::table('vp_images')->join('vp_categories', 'vp_images.image_cate', '=', 'vp_categories.cate_id')->orderBy('image_id', 'DESC')->paginate(3);
    	return self::$image;
    }

    public static function cates(){
    	self::$cate=DB::table('vp_images')->join('vp_categories', 'vp_images.image_cate', '=', 'vp_categories.cate_id')->orderBy('image_id', 'DESC')->take(1)->get();
    	return self::$cate;
    }
}
