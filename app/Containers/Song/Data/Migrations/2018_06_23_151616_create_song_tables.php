<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSongTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {

            $table->increments('id');
            $table->string('artist', 60);
            $table->string('track', 60);
            $table->string('link', 255);
            $table->decimal('length', 4, 2);
            $table->unsignedInteger('genre_id');
            $table->timestamps();
            $table->foreign('genre_id')->references('id')->on('genres');
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('songs');
    }
}
