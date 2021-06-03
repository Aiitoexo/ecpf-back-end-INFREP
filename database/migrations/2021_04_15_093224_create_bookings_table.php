<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('reference')->unique();
            $table->unsignedBigInteger('room_and_suites_id');
            $table->foreign('room_and_suites_id')->references('id')->on('room_and_suites');
            $table->string('mail');
            $table->date('arrival_date')->nullable();
            $table->date('departure_date')->nullable();
            $table->integer('adult');
            $table->integer('child')->default(0);
            $table->integer('total_customer')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
