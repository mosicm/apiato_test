<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartySongTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('party_song', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('party_id');
            $table->unsignedInteger('song_id');
            $table->timestamps();
            $table->foreign('party_id')->references('id')->on('parties');
            $table->foreign('song_id')->references('id')->on('songs');
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('party_song');
    }
}
