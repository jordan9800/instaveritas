<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->integer('booking_id')->unsigned()->unique();
            $table->integer('studio_id')->unsigned();
            $table->foreign('studio_id')->references('studio_id')->on('studios')
                  ->onUpdate('cascade')->onDelete('set null');
            $table->string('start_time');
            $table->string('end_time');
            $table->integer('total_price')->unsigned();
            $table->integer('booked_by')->unsigned();
            $table->foreign('booked_by')->references('user_id')->on('users')
                  ->onUpdate('cascade')->onDelete('set null');
            $table->boolean('booking_status')->default(0);
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
