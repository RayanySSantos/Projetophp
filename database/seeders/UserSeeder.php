<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Rayany Silva',
            'email' => 'rayany@gmail.com',
            'password' => '123456'
        ]);
    }
}
