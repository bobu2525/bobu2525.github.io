<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Capacity;
use Carbon\Carbon;

class JulyCapacitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 7月の全日付のデータを作成
        $year = 2024; // 任意の年
        $month = 7; // 7月
        $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);

        for ($day = 1; $day <= $daysInMonth; $day++) {
            Capacity::create([
                'work_date' => Carbon::create($year, $month, $day)->toDateString(),
                'max_capacity' => 10, // 任意の最大キャパシティ
                'reserved_count' => rand(0, 10), // ランダムに予約数を決定
            ]);
        }
    }
}