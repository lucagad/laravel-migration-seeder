<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('railway_carrier',20);
            $table->string('departure_station',20);
            $table->string('arrival_station',20);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code');
            $table->tinyInteger('carriages_number');
            $table->boolean('is_in_time');
            $table->boolean('is_canceled');
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
        Schema::dropIfExists('trains');
    }
}
