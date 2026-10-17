<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// Hapus import User dan WithoutModelEvents agar tidak bentrok

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil seeder khusus E-Perpustakaan
        $this->call([
            EPerpusSeeder::class,
        ]);
    }
}