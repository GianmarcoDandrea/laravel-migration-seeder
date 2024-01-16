<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            
            $train = new Train();
            $train->company = $faker->words();
            $train->train_code = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $train->departure_station = $faker->words();
            $train->arrival_station = $faker->words();
            $train->departure_date = $faker->words();
            $train->departure_time = $faker->words();
            $train->arrival_date = $faker->words();
            $train->arrival_time = $faker->words();
            $train->carriage_number = $faker->numbersBetween(3, 12);
            $train->platform_number = $faker->numbersBetween(1, 24);
            $train->on_time = $faker->$faker->numbersBetween(0, 1);
            $train->delayed = $faker->numbersBetween(0, 1);
        }
        }
}
