<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVpImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_images', function (Blueprint $table) {
            $table->increments('image_id');
            $table->string('image_name');
            $table->string('image_slug');
            $table->string('image_img');
            $table->tinyInteger('image_status');
            $table->text('image_info');
            $table->integer('image_cate')->unsigned();
            $table->foreign('image_cate')->references('cate_id')->on('vp_categories')->onDelete('cascade');
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
        Schema::dropIfExists('vp_images');
    }
}
