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
            $newHouse = new Train();
            $newHouse->company = $faker->words(5, true);
            $newHouse->departure_station = $faker->address();
            $newHouse->arrival_station = $faker->postcode();
            $newHouse->city = $faker->city();
            $newHouse->state = $faker->state();
            $newHouse->square_meters = $faker->numberBetween(40, 500);
            $newHouse->rooms = $faker->randomDigitNotNull();
            $newHouse->bathrooms = $faker->randomDigitNotNull();
            $newHouse->garage = $faker->randomDigitNotNull();
            $newHouse->price = $faker->randomFloat(1, 20000, 300000);
            $newHouse->description = $faker->paragraph();
            $newHouse->save();
        }
    }
}
