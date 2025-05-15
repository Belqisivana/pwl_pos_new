<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_barang')->insert([
            [
                'kategori_id' => 1, // Elektronik
                'barang_kode' => 'TV001',
                'barang_nama' => 'Televisi LED 32 inch',
                'harga_beli' => 1500000,
                'harga_jual' => 1750000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'HP001',
                'barang_nama' => 'Handphone Android',
                'harga_beli' => 2000000,
                'harga_jual' => 2300000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2, // Pakaian
                'barang_kode' => 'PK001',
                'barang_nama' => 'Kemeja Lengan Panjang',
                'harga_beli' => 80000,
                'harga_jual' => 120000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'PK002',
                'barang_nama' => 'Celana Jeans',
                'harga_beli' => 100000,
                'harga_jual' => 150000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3, // Makanan
                'barang_kode' => 'MK001',
                'barang_nama' => 'Roti Tawar',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'MK002',
                'barang_nama' => 'Biskuit Coklat',
                'harga_beli' => 7000,
                'harga_jual' => 10000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 4, // Minuman
                'barang_kode' => 'MN001',
                'barang_nama' => 'Air Mineral 600ml',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'MN002',
                'barang_nama' => 'Teh Botol',
                'harga_beli' => 4000,
                'harga_jual' => 6000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 5, // Alat Tulis
                'barang_kode' => 'AT001',
                'barang_nama' => 'Pulpen Biru',
                'harga_beli' => 2000,
                'harga_jual' => 3500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'AT002',
                'barang_nama' => 'Buku Tulis 38 Lembar',
                'harga_beli' => 2500,
                'harga_jual' => 4000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
