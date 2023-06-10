<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'judul' => 'One Piece: East Blue Saga',
                'penulis' => 'Eiichiro Oda',
                'pengarang' => 'Eiichiro Oda',
                'tahun_terbit' => '2002',
                'jumblah_halaman' => 200,
                'kategori' => 'manga',
            ],
            [
                'judul' => 'Naruto, Vol. 1: Uzumaki Naruto',
                'penulis' => 'Masashi Kishimoto',
                'pengarang' => 'Masashi Kishimoto',
                'tahun_terbit' => '1999',
                'jumblah_halaman' => 192,
                'kategori' => 'manga',
            ],
            [
                'judul' => 'Attack on Titan: Before the Fall',
                'penulis' => 'Hajime Isayama',
                'pengarang' => 'Hajime Isayama',
                'tahun_terbit' => '2011',
                'jumblah_halaman' => 192,
                'kategori' => 'manga',
            ],
            [
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'pengarang' => 'Andrea Hirata',
                'tahun_terbit' => '2005',
                'jumblah_halaman' => 529,
                'kategori' => 'novel',
            ],
            [
                'judul' => 'Sang Pemimpi',
                'penulis' => 'Andrea Hirata',
                'pengarang' => 'Andrea Hirata',
                'tahun_terbit' => '2006',
                'jumblah_halaman' => 368,
                'kategori' => 'novel',
            ],
        ]);
    }
}
