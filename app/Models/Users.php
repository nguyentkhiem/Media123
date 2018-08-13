<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Users extends Model
{
    protected $table = 'vp_users';
    protected $primaryKey = 'user_id';
    protected $guarded = [];

    protected static $user;

    public static function users(){
    	// return self::$user = DB::table('vp_users')->where('user_level', '>', 1)->orderBy('user_id', 'DESC')->paginate(3);
    	return $user = Users::where('user_level', '>', 1)->orderBy('user_id', 'DESC')->paginate(3);
    }
}
