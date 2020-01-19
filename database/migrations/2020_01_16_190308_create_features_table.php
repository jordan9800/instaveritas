<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('feature_id')->unsigned()->unique();
            $table->integer('studio_id')->unsigned();
            $table->foreign('studio_id')->references('studio_id')->on('studios')
                  ->onUpdate('cascade')->onDelete('set null');
            $table->text('studio_amenities');
            $table->text('studio_equipments')->nullable();
            $table->text('studio_rules')->nullable();
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
        Schema::dropIfExists('features');
    }
}
