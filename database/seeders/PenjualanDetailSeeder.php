<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run()
    {
        $barangIds = range(1, 10); // Barang ID 1–10
        $hargaBarang = array_combine($barangIds, array_map(function () {
            return rand(10000, 500000); // Harga acak
        }, $barangIds));

        for ($penjualanId = 1; $penjualanId <= 10; $penjualanId++) {
            // Ambil 3 barang acak per transaksi
            $barangDipilih = collect($barangIds)->shuffle()->take(3);

            foreach ($barangDipilih as $barangId) {
                DB::table('t_penjualan_detail')->insert([
                    'penjualan_id' => $penjualanId,
                    'barang_id' => $barangId,
                    'harga' => $hargaBarang[$barangId],
                    'jumlah' => rand(1, 5),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
