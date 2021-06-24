<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_holidays', function (Blueprint $table) {
            $table->id();
            $table->float('price', 7, 2);
            $table->tinyInteger('rooms')->unsigned();
            $table->string('destination', 30);
            $table->string('type_of_accommodation', 20);
            $table->boolean('car_parking')->default(1);
            $table->string('season', 10);
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
        Schema::dropIfExists('db_holidays');
    }
}
