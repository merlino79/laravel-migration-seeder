<?php
use App\Holiday;
use Illuminate\Database\Seeder;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $holiday = new Holiday();
    $holiday->reference = "ale_agency";
    $holiday->address = "via dei gelsomini";
    $holiday->postal_code = " 20100";
    $holiday->city = " Milano";
    $holiday->state = "italia";
    $holiday->price = "1500";
    $holiday->rooms = "5";
    $holiday->destination = "portogallo";
    $holiday->type_of_accommodation = "apartman";
    $holiday->season = "winter";
    $holiday->save();

    }
}
