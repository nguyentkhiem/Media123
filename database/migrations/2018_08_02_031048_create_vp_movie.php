<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVpMovie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_movie', function (Blueprint $table) {
            $table->increments('movie_id');
            $table->string('movie_name');
            $table->string('movie_slug');
            $table->string('movie_logo');
            $table->tinyInteger('movie_status');
            $table->string('movie_video');
            $table->text('movie_info');
            $table->integer('movie_cate')->unsigned();
            $table->foreign('movie_cate')->references('cate_id')->on('vp_categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vp_movie');
    }
}
