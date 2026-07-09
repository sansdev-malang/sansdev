<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Guru User',
            'email' => 'guru@example.com',
            'password' => Hash::make('password123'),
            'role' => 'guru',
        ]);

        User::create([
            'name' => 'Siswa User',
            'email' => 'siswa@example.com',
            'password' => Hash::make('password123'),
            'role' => 'siswa',
        ]);

        User::create([
            'name' => 'Orang Tua User',
            'email' => 'ortu@example.com',
            'password' => Hash::make('password123'),
            'role' => 'orangtua',
        ]);
    }
}
