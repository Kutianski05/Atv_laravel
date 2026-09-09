<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'jeferson@gmail.com'],
            [
                'name' => 'Jeferson',
                'password' => Hash::make('123456'),
                'role' => 'admin',
            ]
        );

        User::updateOrCreate(
            ['email' => 'professor@gmail.com'],
            [
                'name' => 'Professor Teste',
                'password' => Hash::make('123456'),
                'role' => 'professor',
            ]
        );
    }
}