<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class CapacitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $year = 2024;
        $month = 7;

        $data = [
            [
                'max_capacity' => 30,
                'reserved_count' => 5,
                'work_date' => Carbon::create($year, $month, 5),
                'cleaning_year' => $year,
                'cleaning_month' => $month,
                'cleaning_period' => 1 // 上旬
            ],
            [
                'max_capacity' => 30,
                'reserved_count' => 10,
                'work_date' => Carbon::create($year, $month, 15),
                'cleaning_year' => $year,
                'cleaning_month' => $month,
                'cleaning_period' => 2 // 中旬
            ],
            [
                'max_capacity' => 30,
                'reserved_count' => 25,
                'work_date' => Carbon::create($year, $month, 25),
                'cleaning_year' => $year,
                'cleaning_month' => $month,
                'cleaning_period' => 3 // 下旬
            ]
        ];

        DB::table('capacities')->insert($data);
    }
}