<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVpMusic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_music', function (Blueprint $table) {
            $table->increments('music_id');
            $table->string('music_name');
            $table->string('music_slug');
            $table->string('music_logo');
            $table->tinyInteger('music_status');
            $table->string('music_mp3');
            $table->text('music_info');
            $table->integer('music_cate')->unsigned();
            $table->foreign('music_cate')->references('cate_id')->on('vp_categories')->onDelete('cascade');
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
        Schema::dropIfExists('vp_music');
    }
}
