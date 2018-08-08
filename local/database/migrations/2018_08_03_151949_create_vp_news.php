<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVpNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_news', function (Blueprint $table) {
            $table->increments('news_id');
            $table->string('news_name');
            $table->string('news_slug');
            $table->string('news_logo');
            $table->tinyInteger('news_status');
            $table->text('news_content');
            $table->integer('news_cate')->unsigned();
            $table->foreign('news_cate')->references('cate_id')->on('vp_categories')->onDelete('cascade');
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
        Schema::dropIfExists('vp_news');
    }
}
