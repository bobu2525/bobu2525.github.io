<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class OptionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('options')->insert([
            [
                'option_name' => 'オプションA',
                'option_price' => 5000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'option_name' => 'オプションB',
                'option_price' => 7000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'option_name' => 'オプションC',
                'option_price' => 9000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'option_name' => 'オプションD',
                'option_price' => 12000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'option_name' => 'オプションE',
                'option_price' => 15000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'option_name' => 'オプションF',
                'option_price' => 20000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'option_name' => 'オプションG',
                'option_price' => 25000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'option_name' => 'オプションH',
                'option_price' => 30000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'option_name' => 'オプションI',
                'option_price' => 35000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'option_name' => 'オプションJ',
                'option_price' => 40000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}