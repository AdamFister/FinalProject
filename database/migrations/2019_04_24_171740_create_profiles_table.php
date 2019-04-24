<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->string('nickname');
            $table->string('city')->nullable();
            $table->bigInteger('age')->nullable();
            $table->binary('photo')->nullable();
            $table->string('desc')->nullable();
            $table->string('influences')->nullable();
            $table->string('music_type')->nullable();
            $table->bigInteger('read_write_music')->nullable();
            $table->bigInteger('improvise')->nullable();
            $table->bigInteger('ear')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
