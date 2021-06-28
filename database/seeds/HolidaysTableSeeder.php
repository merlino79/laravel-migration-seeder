<?php
use App\Holiday;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker; 

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) 
    {

    
      for ($i=0; $i < 100 ; $i++)
       {

        $holiday = new Holiday();
        $holiday->reference = $faker->bothify('??-########');;
        $holiday->address = $faker->streetAddress();
        $holiday->postal_code = $faker->postcode();
        $holiday->city = $faker->city();
        $holiday->state =  $faker->state();
        $holiday->price = $faker->randomFloat(2,50000,1000000);
        $holiday->rooms =  $faker->numberBetween(1,20);
        $holiday->destination = $faker->state();
        $holiday->type_of_accommodation = $this->typeRand();
        $holiday->season = $this->seasons();
        $holiday->save();



      }

      

    

    }
    private function typeRand()
    {
      $arr = ['monolocale', 'bilocale', 'appartamento', 'attico', 'villetta', 'loft'];
      shuffle($arr);
      return $arr[0];
    }
    private function seasons()
    {
      $arr = ['monolocale', 'bilocale', 'appartamento', 'attico', 'villetta', 'loft'];
      shuffle($arr);
      return $arr[0];
    }


}
