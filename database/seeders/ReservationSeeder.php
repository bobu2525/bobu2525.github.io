<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reservation;

class ReservationSeeder extends Seeder
{
    public function run()
    {
        // サンプルデータの挿入
        Reservation::create([
            'work_date' => '2024-07-01',
            'max_capacity' => 10,
            'reserved_count' => 3
        ]);

        Reservation::create([
            'work_date' => '2024-07-05',
            'max_capacity' => 10,
            'reserved_count' => 7
        ]);

        Reservation::create([
            'work_date' => '2024-07-10',
            'max_capacity' => 10,
            'reserved_count' => 10
        ]);

        Reservation::create([
            'work_date' => '2024-07-15',
            'max_capacity' => 10,
            'reserved_count' => 5
        ]);

        // 必要に応じて他の日付やデータも追加
    }
}