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

            $companies = ['Trenitalia', 'Italo'];
            $stations = ['Roma', 'Milano','Napoli','Bologna','Firenze','Torino'];
            
            $train = new Train();
            $train->company = $faker->randomElement($companies);
            $train->train_code = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $train->departure_station = $faker->randomElement($stations);
            do{
                $train->arrival_station = $faker->randomElement($stations);
                
            } while($train->departure_station === $train->arrival_station);

            $train->departure_date = $faker->dateTimeBetween('now' ,'+18 hour');
            $train->departure_time = $faker->dateTimeInInterval('now' ,'+2 hour');
            $train->arrival_date = $faker->dateTimeBetween('+1 day' ,'+2 day');
            $train->arrival_time = $faker->dateTimeInInterval('+2 hour' ,'+4 hours');;
            $train->carriage_number = $faker->numberBetween(3, 12);
            $train->platform_number = $faker->numberBetween(1, 24);
            $train->on_time = $faker->numberBetween(0, 1);
            $train->delayed = $faker->numberBetween(0, 1);
            $train->save();
        }
    }
}
