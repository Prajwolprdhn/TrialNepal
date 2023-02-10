<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@sports.com',
            'password' => bcrypt('Sports123'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@sports.com',
            'password' => bcrypt('Sports123'),
            'role' => 'user'
        ]);

        User::create([
            'name' => 'Owner',
            'email' => 'owner@sports.com',
            'password' => bcrypt('Sports123'),
            'role' => 'owner'
        ]);
    }
}
