<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReservationsTableSeeder extends Seeder
{
    public function run()
    {
        // 60件の予約データをランダムに生成
        for ($i = 1; $i <= 60; $i++) {
            // ランダムな日付を生成 (8月中)
            $workDate = Carbon::create(2024, 8, rand(1, 31));
            // ランダムな清掃期間 (1〜3)
            $cleaningPeriod = rand(1, 3);
            // ランダムな最大定員 (10〜100)
            $maxCapacity = rand(10, 100);
            // ランダムな予約人数 (1〜max_capacity)
            $reservedCount = rand(1, $maxCapacity);

            DB::table('reservations')->insert([
                'work_date' => $workDate,
                'cleaning_period' => $cleaningPeriod,
                'cleaning_month' => $workDate->month,
                'cleaning_year' => $workDate->year,
                'max_capacity' => $maxCapacity,
                'reserved_count' => $reservedCount,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}