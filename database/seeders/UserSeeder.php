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
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin@gmail.com'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@sports.com',
            'password' => bcrypt('user@sports.com'),
            'role' => 'user'
        ]);

        User::create([
            'name' => 'Owner',
            'email' => 'owner@sports.com',
            'password' => bcrypt('owner@sports.com'),
            'role' => 'owner'
        ]);
    }
}
