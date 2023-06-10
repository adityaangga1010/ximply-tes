<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('petugas')->insert([
            [
                'nama_petugas' => 'Mas Andi',
                'username' => 'Petugass',
                'password' => Hash::make('1234'),
            ],
        ]);
    }
}
