<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomAndSuitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_and_suites', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('img');
            $table->string('location');
            $table->integer('max_people');
            $table->integer('price');
            $table->unsignedBigInteger('type_room_id');
            $table->foreign('type_room_id')->references('id')->on('type_rooms');
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
        Schema::dropIfExists('room_and_suites');
    }
}
