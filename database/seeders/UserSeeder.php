<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "name" => "Afy",
                "nik" => "3325076",
                "email" => "Afy@gmail.com",
                "password" => bcrypt("123456"),
                "level" => "pemilih",
            ],
            [
                "name" => "Admin",
                "nik" => "326022",
                "email" => "Admin@gmail.com",
                "password" => bcrypt("123456"),
                "level" => "admin",
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
