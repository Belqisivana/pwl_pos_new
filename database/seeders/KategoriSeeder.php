<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_kategori')->insert([
            [
                'kategori_kode' => 'ELK',
                'kategori_nama' => 'Elektronik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_kode' => 'PKN',
                'kategori_nama' => 'Pakaian',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_kode' => 'MKN',
                'kategori_nama' => 'Makanan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_kode' => 'MNM',
                'kategori_nama' => 'Minuman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_kode' => 'ALP',
                'kategori_nama' => 'Alat Tulis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
