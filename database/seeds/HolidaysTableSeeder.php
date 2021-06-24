<?php

use App\Holiday;
use Illuminate\Database\Seeder;

class Db_holidaysTableSeed extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  // $table->string('reference', 12);
  // $table->string('address', 100);
  // $table->string('postal_code', 10);
  // $table->string('city', 50);
  // $table->string('state', 50);
  // $table->float('price', 7, 2);
  // $table->tinyInteger('rooms')->unsigned();
  // $table->string('destination', 30);
  // $table->string('type_of_accommodation', 20);
  // $table->boolean('car_parking')->default(1);
  // $table->string('season', 10);
  // $table->timestamps();

  public function run()
  {
    $holiday = new Holiday();
    $holiday->reference = "ale_agency";
    $holiday->addres = "via dei gelsomini";
    $holiday->postal_code = " 20100";
    $holiday->city = " Milano";
    $holiday->state = "italia";
    $holiday->price = "1500";
    $holiday->rooms = 5;
    $holiday->destination = "portogallo";
    $holiday->type_of_accommodation = "apartman";
    $holiday->season = "winter";
    $holiday->save();
  }
}
