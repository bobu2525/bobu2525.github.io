<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // 管理者の作成
        for ($i = 1; $i <= 3; $i++) {
            User::create([
                'name' => "Admin $i",
                'email' => "admin$i@example.com",
                'password' => Hash::make('1111'),
                'role' => 'admin', // 管理者の役割を示す
            ]);
        }

        // メンバーの作成
        for ($i = 1; $i <= 20; $i++) {
            User::create([
                'name' => "Member $i",
                'email' => "member$i@example.com",
                'password' => Hash::make('2222'),
                'role' => 'member', // メンバーの役割を示す
            ]);
        }
    }
}