<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('t_penjualan')->insert([
                'user_id' => 1, // Asumsikan user_id 1 ada
                'pembeli' => 'Pembeli ' . $i,
                'penjualan_kode' => 'PNJ' . str_pad($i, 4, '0', STR_PAD_LEFT),
                'penjualan_tanggal' => now()->subDays(rand(1, 10)),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
