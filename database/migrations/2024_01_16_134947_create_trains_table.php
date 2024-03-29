<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('company');
            $table->string('train_code', 20);
            $table->string('departure_station', 100);
            $table->string('arrival_station', 100);
            $table->date('departure_date');
            $table->time('departure_time');
            $table->date('arrival_date');
            $table->time('arrival_time');
            $table->smallInteger('carriage_number')->unsigned();
            $table->smallInteger('platform_number')->unsigned();
            $table->boolean('on_time')->default(1);
            $table->boolean('delayed')->default(0);
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
};
