<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'SUP01', 'supplier_nama' => 
            'PT Maju Bersama', 'supplier_alamat' => 'Jl. Sudirman No. 1, Jakarta'],
            ['supplier_id' => 2, 'supplier_kode' => 'SUP02', 'supplier_nama' => 
            'CV Sumber Makmur', 'supplier_alamat' => 'Jl. Merdeka No. 45, Bandung'],
            ['supplier_id' => 3, 'supplier_kode' => 'SUP03', 'supplier_nama' => 
            'Toko Laris Jaya', 'supplier_alamat' => 'Jl. Pahlawan No. 99, Surabaya'],
        ];
        DB::table('m_supplier')->insert($data);
    }
}