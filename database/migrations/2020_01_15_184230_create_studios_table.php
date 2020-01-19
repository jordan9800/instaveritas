<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('studio_id')->unsigned()->unique();
            $table->string('studio_name');
            $table->text('studio_details');
            $table->integer('studio_type')->unsigned();
            $table->foreign('studio_type')->references('studiotype_id')->on('studio_types')
                  ->onUpdate('cascade')->onDelete('set null');
            $table->integer('min_booking')->unsigned();
            $table->integer('max_occp')->unsigned();
            $table->string('past_clients')->nullable();
            $table->string('audio_samples')->nullable();
            $table->string('pricing_per_hour');
            $table->string('profile_photo');
            $table->text('extra_photos')->nullable();
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
        Schema::dropIfExists('studios');
    }
}
