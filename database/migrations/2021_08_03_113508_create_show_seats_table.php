<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('show_seats', function (Blueprint $table) {
            $table->id();
            $table->integer('status');
            $table->integer('price');
            $table->unsignedBigInteger('booking_id');
            $table->unsignedBigInteger('show_id');
            $table->unsignedBigInteger('seat_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
            $table->foreign('show_id')->references('id')->on('shows')->onDelete('cascade');
            $table->foreign('seat_id')->references('id')->on('seats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('show_seats');
    }
}
