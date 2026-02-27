<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Query untuk tambah data product
        DB::table('tb_product')->insert([
            [
                'nama_product'=>'DJI',
                'harga'=>'14564',
                'deskripsi_product'=>'Dummy description',
                'id_kategori'=>'2',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'OSMO',
                'harga'=>'234',
                'deskripsi_product'=>'OSMO DJI Terbaik',
                'id_kategori'=>'3',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'Apple Smart Watch',
                'harga'=>'342',
                'deskripsi_product'=>'Apple Smart Watch 2.0',
                'id_kategori'=>'2',
                'created_at'=>now()
            ]
        ]);
    }
}
