<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFloorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('floors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('garage_id')->unsigned();
            $table->foreign('garage_id')->references('id')->on('garages');
            $table->string('name');
            $table->double('latitude');
            $table->double('longitude');
            $table->double('angle');
            $table->integer('size_X');
            $table->integer('size_Y');
            $table->integer('zoom_level');
            $table->string('floor_plan');
            $table->integer('floor_capacity');
            $table->integer('major_number');
            $table->unique('major_number','garage_id');
            $table->dateTime('floor_timestamp');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('floors');
    }
}
