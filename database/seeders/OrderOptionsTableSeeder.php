<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('options')->insert([
            ['option_name' => 'オプション1', 'option_price' => 1000],
            ['option_name' => 'オプション2', 'option_price' => 2000],
            ['option_name' => 'オプション3', 'option_price' => 3000],
        ]);
    }
}