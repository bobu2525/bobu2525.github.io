<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Plan;

class OrdersTableSeeder extends Seeder
{
    public function run()
    {
        // 存在するプランのIDを取得
        $plan = Plan::first(); // 最初のプランを取得
        $planId = $plan ? $plan->id : 1; // プランが存在しない場合に備えてデフォルトIDを設定

        $orders = [];

        // ランダムな日本の名字と名前のリスト
        $lastNames = ['山田', '佐藤', '鈴木', '田中', '高橋', '渡辺', '伊藤', '中村', '小林', '加藤'];
        $firstNames = ['太郎', '花子', '一郎', '二郎', '三郎', '四郎', '五郎', '六郎', '七郎', '八郎'];

        for ($i = 1; $i <= 60; $i++) {
            $customerName = $lastNames[array_rand($lastNames)] . ' ' . $firstNames[array_rand($firstNames)];
            $phoneNumber = '080-' . str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT) . '-' . str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);

            $orders[] = [
                'customer_name' => $customerName,
                'email' => "customer$i@example.com",
                'phone_number' => $phoneNumber,
                'response_method' => '電話',
                'cleaning_year' => 2024,
                'cleaning_month' => 8,
                'cleaning_period' => 1,
                'plan_id' => $planId, // ここで適切なプランIDを使用
                'special_notes' => '特に気をつけて清掃して欲しい',
                'total_amount' => rand(10000, 20000),
                'order_date' => '2024-07-15',
                'work_date' => '2024-08-' . rand(1, 31),
                'payment_status' => 0,
                'execution_status' => 0,
            ];
        }

        DB::table('orders')->insert($orders);
    }
}