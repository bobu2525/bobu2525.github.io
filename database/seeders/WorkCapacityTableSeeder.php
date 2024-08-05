<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkCapacityTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('work_capacity')->insert([
            [
                'max_capacity' => 5,
                'reserved_count' => 2,
                'work_date' => '2024-07-01',
                'cleaning_year' => 2024,
                'cleaning_month' => 7,
                'cleaning_period' => 1,
            ],
            // 他の日付のデータも同様に追加
        ]);
    }
}