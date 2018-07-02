<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartyTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('parties', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name', 60);
            $table->string('description', 255);
            $table->integer('capacity');
            $table->timestamp('started_at')->nullable();
            $table->timestamp('ended_at')->nullable();
            $table->boolean('music')->default(false);
            $table->boolean('karaoke')->default(false);
            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('parties');
    }
}
