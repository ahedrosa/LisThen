<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('song', function (Blueprint $table) {
            $table->id();
            $table->string('name',40)->unique();
            $table->bigInteger('artist_id')->unsigned();
            $table->time("duration");
            $table->bigInteger('genre_id')->unsigned();
            $table->bigInteger('album_id')->unsigned();
            $table->timestamps();
            $table->foreign('artist_id')->references('id')->on('artist');
            $table->foreign('genre_id')->references('id')->on('genre');
            $table->foreign('album_id')->references('id')->on('album');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('song');
    }
}
