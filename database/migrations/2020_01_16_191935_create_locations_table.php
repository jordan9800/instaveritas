<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('location_id')->unsigned()->unique();
            $table->integer('studio_id')->unsigned();
            $table->foreign('studio_id')->references('studio_id')->on('studios')
                  ->onUpdate('cascade')->onDelete('set null');
            $table->text('studio_address');
            $table->string('studio_city');
            $table->string('studio_country');
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
        Schema::dropIfExists('locations');
    }
}
