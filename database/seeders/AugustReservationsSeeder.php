<?php

// database/seeders/AugustReservationsSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reservation;
use Faker\Factory as Faker;

class AugustReservationsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 60; $i++) {
            Reservation::create([
                'work_date' => $faker->dateTimeBetween('2024-08-01', '2024-08-31'),
                'cleaning_period' => $faker->numberBetween(1, 4),
                'max_capacity' => $faker->numberBetween(1, 10),
                'reserved_count' => $faker->numberBetween(0, 10),
                'cleaning_month' => 8,
                'cleaning_year' => 2024,
            ]);
        }
    }
}