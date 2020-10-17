<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenerationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generations', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();
            $table->bigInteger('user_id')->unsigned(); // error here - does this need to be big int unsigned?
            $table->string('lyrics');
            $table->string('user_rating'); 
            $table->boolean('made_public'); // set to true if user is to share on their feed
            //$table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generations');
    }
}
