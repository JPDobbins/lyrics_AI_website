<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friends', function (Blueprint $table) {
            $table->id('friends_link_id');
            $table->timestamps();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('user_link')->unsigned();
            //$table->foreign('user_id')->references('id')->on('users');
            //$table->foreign('user_link')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('friends');
    }
}
