<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Votes extends Model
{
    protected $table = 'vp_vote';
    protected $primaryKey = 'vote_id';
    protected $guarded = [];
}
