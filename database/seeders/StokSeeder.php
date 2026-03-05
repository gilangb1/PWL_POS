<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; // Untuk mengambil waktu saat ini

class StokSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        
        for ($i = 1; $i <= 15; $i++) {
            $supplier_id = ($i <= 5) ? 1 : (($i <= 10) ? 2 : 3);
            $data[] = [
                'stok_id' => $i,
                'supplier_id' => $supplier_id,
                'barang_id' => $i,
                'user_id' => 1,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => rand(10, 50), 
            ];
        }
        DB::table('t_stok')->insert($data);
    }
}