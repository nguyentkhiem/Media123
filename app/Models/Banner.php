<?php

namespace App\MOdels;

use Illuminate\Database\Eloquent\Model;
use DB;
class Banner extends Model
{
    protected $table = 'vp_banner';
    protected $primaryKey = 'banner_id';
    protected $guarded = [];
    protected static $banner;

    public static function banners(){
    	self::$banner = DB::table('vp_banner')->orderBy('banner_id', 'DESC')->paginate(3);
    	return self::$banner;
    }
}
