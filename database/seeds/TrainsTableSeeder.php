<?php

use App\Train;
use Faker\Generator as Faker;

use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $new_train = new Train();
            $new_train->railway_carrier = $faker->company(20);
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->numerify('train-####');
            $new_train->carriages_number = $faker->numberBetween(3, 12);
            $new_train->is_in_time = $faker->boolean();
            $new_train->is_canceled = $faker->boolean();
            $new_train->save();
        }
    }
}
