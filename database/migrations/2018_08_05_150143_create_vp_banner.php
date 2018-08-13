<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVpBanner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_banner', function (Blueprint $table) {
            $table->increments('banner_id');
            $table->string('banner_name');
            $table->string('banner_link');
            $table->string('banner_price');
            $table->string('banner_logo');
            $table->tinyInteger('banner_status');
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
        Schema::dropIfExists('vp_banner');
    }
}
