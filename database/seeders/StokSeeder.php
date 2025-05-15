<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('t_stok')->insert([
                'barang_id' => $i,
                'user_id' => 1, // Asumsikan user_id 1 ada di m_user
                'stok_tanggal' => now()->subDays(rand(1, 10)),
                'stok_jumlah' => rand(10, 50),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
