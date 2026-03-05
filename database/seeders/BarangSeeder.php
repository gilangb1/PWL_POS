<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // Kategori Elektronik (1), Supplier (1)
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 
            'TV LED 32 Inch', 'harga_beli' => 1500000, 'harga_jual' => 2000000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BRG002', 'barang_nama' => 
            'Kipas Angin', 'harga_beli' => 150000, 'harga_jual' => 250000],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_kode' => 'BRG003', 'barang_nama' => 
            'Setrika Listrik', 'harga_beli' => 100000, 'harga_jual' => 150000],
            ['barang_id' => 4, 'kategori_id' => 1, 'barang_kode' => 'BRG004', 'barang_nama' => 
            'Blender', 'harga_beli' => 200000, 'harga_jual' => 300000],
            ['barang_id' => 5, 'kategori_id' => 1, 'barang_kode' => 'BRG005', 'barang_nama' => 'Rice Cooker', 'harga_beli' => 300000, 'harga_jual' => 450000],
            
            // Kategori Pakaian (2), Supplier (2)
            ['barang_id' => 6, 'kategori_id' => 2, 'barang_kode' => 'BRG006', 'barang_nama' => 'Kemeja Pria', 'harga_beli' => 50000, 'harga_jual' => 100000],
            ['barang_id' => 7, 'kategori_id' => 2, 'barang_kode' => 'BRG007', 'barang_nama' => 'Kaos Polos', 'harga_beli' => 25000, 'harga_jual' => 50000],
            ['barang_id' => 8, 'kategori_id' => 2, 'barang_kode' => 'BRG008', 'barang_nama' => 'Celana Jeans', 'harga_beli' => 80000, 'harga_jual' => 150000],
            ['barang_id' => 9, 'kategori_id' => 2, 'barang_kode' => 'BRG009', 'barang_nama' => 'Jaket Hoodie', 'harga_beli' => 100000, 'harga_jual' => 200000],
            ['barang_id' => 10, 'kategori_id' => 2, 'barang_kode' => 'BRG010', 'barang_nama' => 'Topi Baseball', 'harga_beli' => 15000, 'harga_jual' => 35000],

            // Kategori Makanan/Minuman (3 & 4), Supplier (3)
            ['barang_id' => 11, 'kategori_id' => 3, 'barang_kode' => 'BRG011', 'barang_nama' => 'Indomie Goreng', 'harga_beli' => 2500, 'harga_jual' => 3500],
            ['barang_id' => 12, 'kategori_id' => 3, 'barang_kode' => 'BRG012', 'barang_nama' => 'Biskuit Roma', 'harga_beli' => 8000, 'harga_jual' => 12000],
            ['barang_id' => 13, 'kategori_id' => 4, 'barang_kode' => 'BRG013', 'barang_nama' => 'Teh Pucuk Harum', 'harga_beli' => 3000, 'harga_jual' => 4500],
            ['barang_id' => 14, 'kategori_id' => 4, 'barang_kode' => 'BRG014', 'barang_nama' => 'Kopi Kenangan 200ml', 'harga_beli' => 7000, 'harga_jual' => 10000],
            ['barang_id' => 15, 'kategori_id' => 3, 'barang_kode' => 'BRG015', 'barang_nama' => 'Keripik Kentang', 'harga_beli' => 5000, 'harga_jual' => 8000],
        ];
        DB::table('m_barang')->insert($data);
    }
}