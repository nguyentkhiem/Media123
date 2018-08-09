<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVpVote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_vote', function (Blueprint $table) {
            $table->increments('vote_id');
            $table->integer('vote_user')->unsigned();
            $table->foreign('vote_user')->references('user_id')->on('vp_users')->onDelete('cascade');
            $table->integer('vote_movie')->unsigned();
            $table->foreign('vote_movie')->references('movie_id')->on('vp_movie')->onDelete('cascade');
            $table->string('votes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vp_vote');
    }
}
