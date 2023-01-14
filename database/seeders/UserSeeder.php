<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'AdminRey',
            'email' => 'reynanda28@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('reynanda28')
        ]);
    }
}
