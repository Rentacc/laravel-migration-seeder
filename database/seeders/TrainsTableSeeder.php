<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Factory as Faker;

class TrainsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            Train::create([
                'company' => $faker->company(),
                'departure_station' => $faker->city(),
                'arrival_station' => $faker->city(),
                'departure_time' => $faker->dateTimeBetween('now', '+1 day'),
                'arrival_time' => $faker->dateTimeBetween('now', '+2 days'),
                'train_code' => $faker->unique()->randomNumber(4),
                'number_of_cars' => $faker->numberBetween(3, 12),
                'on_time' => $faker->boolean(90),
                'canceled' => $faker->boolean(5),
            ]);
        }
    }
}

