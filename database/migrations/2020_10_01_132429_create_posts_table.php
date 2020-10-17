<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();
            $table->string('post_message');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('lyrics_id')->unsigned();
            //$table->foreign('user_id')->references('id')->on('users');
            //$table->foreign('lyrics_id')->references('id')->on('generations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
