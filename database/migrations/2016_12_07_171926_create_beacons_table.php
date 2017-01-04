<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeaconsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beacons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('floor_id')->unsigned();
            $table->foreign('floor_id')->references('id')->on('floors');
            $table->string('name');
            $table->double('latitude');
            $table->double('longitude');
            $table->integer('minor_number');
            $table->unique('minor_number','floor_id');
            $table->string('bluetooth_address')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beacons');
    }
}
