<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserClient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('user_client', function (Blueprint $table) {
        //     $table->increments('client_id');
        //     $table->string('client_name');
        //     $table->string('email');
        //     $table->string('password');
        //     $table->string('client_img');
        //     $table->tinyInteger('client_level');
        //     $table->rememberToken();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_client');
    }
}
