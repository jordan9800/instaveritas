<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('hour_id')->unsigned()->unique();
            $table->integer('studio_id')->unsigned();
            $table->foreign('studio_id')->references('studio_id')->on('studios')
                  ->onUpdate('cascade')->onDelete('set null');
            $table->string('studio_opening');
            $table->string('studio_closing');
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
        Schema::dropIfExists('hours');
    }
}
