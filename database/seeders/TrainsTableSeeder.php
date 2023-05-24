<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for ($i = 0; $i < 50; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->words(5, true);
            $newTrain->departure_station = $faker->address();
            $newTrain->arrival_station = $faker->postcode();
            $newTrain->departure_time = $faker->city();
            $newTrain->arrival_time = $faker->state();
            $newTrain->train_code = $faker->numberBetween(40, 500);
            $newTrain->carriages = $faker->randomDigitNotNull();
            $newTrain->delay = $faker->randomDigitNotNull();
            $newTrain->deleted = $faker->randomDigitNotNull();
            $newTrain->save();
        }
    }
}
