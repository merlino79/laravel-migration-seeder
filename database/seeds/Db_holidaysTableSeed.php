<?php
use App\Holyday;
use Illuminate\Database\Seeder;

class Db_holidaysTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
               //$table->id();
    //         $table->float('price', 7, 2);
    //         $table->tinyInteger('rooms')->unsigned();
    //         $table->string('destination', 30);
    //         $table->string('type_of_accommodation', 20);
    //         $table->boolean('car_parking')->default(1);
    //         $table->string('season', 10);
    //         $table->timestamps();
    public function run()
    {
        $holyday = new Holyday();
        $holyday->price ="1500";
        $holyday->room ="5";
        $holyday->type_of_accommodation ="apartment";
        $holyday->season ="winter";
    }
}
 
