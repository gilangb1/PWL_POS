<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        $detail_id = 1;
        
        for ($penjualan = 1; $penjualan <= 10; $penjualan++) {
            for ($barang = 1; $barang <= 3; $barang++) {
                $harga_jual_asumsi = rand(3000, 200000); 
                $data[] = [
                    'detail_id' => $detail_id,
                    'penjualan_id' => $penjualan,
                    'barang_id' => rand(1, 15), 
                    'harga' => $harga_jual_asumsi,
                    'jumlah' => rand(1, 5), 
                ];
                $detail_id++; 
            }
        }
        DB::table('t_penjualan_detail')->insert($data);
    }
}