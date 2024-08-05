<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlansTableSeeder extends Seeder
{
    public function run()
    {
        // プランデータを挿入する
        DB::table('plans')->insert([
            [
                'plan_name' => 'シンプルプラン', // プランの名称
                'plan_price' => 9800           // プランの価格（円）
            ],
            [
                'plan_name' => 'ベーシックプラン', // プランの名称
                'plan_price' => 15000          // プランの価格（円）
            ],
            [
                'plan_name' => 'プレミアムプラン', // プランの名称
                'plan_price' => 25000          // プランの価格（円）
            ],
        ]);
    }
}