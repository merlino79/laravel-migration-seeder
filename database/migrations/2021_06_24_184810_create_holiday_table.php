<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();
            $table->string('reference', 12);
            $table->string('address', 100);
            $table->string('postal_code', 10);
            $table->string('city', 50);
            $table->string('state', 50);
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
        Schema::dropIfExists('holidays');
    }
}
