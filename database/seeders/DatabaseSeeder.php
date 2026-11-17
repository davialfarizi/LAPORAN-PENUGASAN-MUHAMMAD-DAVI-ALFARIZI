<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin Akademik',
            'email' => 'admin@akademik.test',
            'password' => 'password123',
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Dosen PAW',
            'email' => 'dosen@akademik.test',
            'password' => 'password123',
            'role' => 'dosen',
        ]);

        User::create([
            'name' => 'Davi Mahasiswa',
            'email' => 'mahasiswa@akademik.test',
            'password' => 'password123',
            'role' => 'mahasiswa',
        ]);
    }
}