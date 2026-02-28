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
                'nama_product'=>'DJI Mavic 3',
                'harga'=>'15999',
                'deskripsi_product'=>'Drone profesional dengan kamera Hasselblad',
                'id_kategori'=>'2',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI Mavic Air 2S',
                'harga'=>'6899',
                'deskripsi_product'=>'Drone kompak 1 inci sensor',
                'id_kategori'=>'2',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI Mini 4 Pro',
                'harga'=>'4199',
                'deskripsi_product'=>'Drone ringan dengan obstacle sensing',
                'id_kategori'=>'2',
                'created_at'=>now()
            ],
            /*
            [
                'nama_product'=>'DJI Mini 3 Pro',
                'harga'=>'3899',
                'deskripsi_product'=>'Drone mini dengan kamera 4K',
                'id_kategori'=>'2',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI Avata',
                'harga'=>'4799',
                'deskripsi_product'=>'FPV drone untuk pengalaman immersive',
                'id_kategori'=>'2',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI Inspire 3',
                'harga'=>'45999',
                'deskripsi_product'=>'Drone sinematik profesional high-end',
                'id_kategori'=>'2',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI Pocket 2',
                'harga'=>'1899',
                'deskripsi_product'=>'Gimbal kamera pocket 4K',
                'id_kategori'=>'3',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI Osmo Action 4',
                'harga'=>'1699',
                'deskripsi_product'=>'Action camera tahan lasak 4K',
                'id_kategori'=>'3',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI Osmo Mobile 6',
                'harga'=>'599',
                'deskripsi_product'=>'Gimbal smartphone stabilizer',
                'id_kategori'=>'3',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI RS 3',
                'harga'=>'3299',
                'deskripsi_product'=>'Gimbal kamera profesional ringan',
                'id_kategori'=>'3',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI RS 3 Pro',
                'harga'=>'4599',
                'deskripsi_product'=>'Gimbal pro untuk kamera berat',
                'id_kategori'=>'3',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI Zenmuse H20N',
                'harga'=>'18999',
                'deskripsi_product'=>'Payload kamera thermal dan zoom',
                'id_kategori'=>'2',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI Zenmuse X9',
                'harga'=>'24999',
                'deskripsi_product'=>'Kamera sinematik untuk Inspire',
                'id_kategori'=>'2',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI Matrice 30',
                'harga'=>'35999',
                'deskripsi_product'=>'Drone enterprise untuk industri',
                'id_kategori'=>'2',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI Matrice 300 RTK',
                'harga'=>'48999',
                'deskripsi_product'=>'Drone industri dengan RTK precision',
                'id_kategori'=>'2',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI Agras T40',
                'harga'=>'69999',
                'deskripsi_product'=>'Drone semburan pertanian kapasiti besar',
                'id_kategori'=>'2',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI Agras T30',
                'harga'=>'59999',
                'deskripsi_product'=>'Drone pertanian generasi sebelumnya',
                'id_kategori'=>'2',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI Transmission',
                'harga'=>'8999',
                'deskripsi_product'=>'Sistem transmisi video profesional',
                'id_kategori'=>'3',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI Care Refresh 1 Year',
                'harga'=>'399',
                'deskripsi_product'=>'Pelan perlindungan setahun',
                'id_kategori'=>'4',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI Care Refresh 2 Years',
                'harga'=>'699',
                'deskripsi_product'=>'Pelan perlindungan dua tahun',
                'id_kategori'=>'4',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI FPV Combo',
                'harga'=>'5299',
                'deskripsi_product'=>'FPV drone lengkap dengan goggles',
                'id_kategori'=>'2',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI Goggles 2',
                'harga'=>'2499',
                'deskripsi_product'=>'Headset untuk pengalaman FPV',
                'id_kategori'=>'3',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI Goggles Integra',
                'harga'=>'2199',
                'deskripsi_product'=>'Goggles ringan dan ergonomik',
                'id_kategori'=>'3',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI RC Pro',
                'harga'=>'4999',
                'deskripsi_product'=>'Remote controller profesional skrin terbina',
                'id_kategori'=>'3',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI RC-N1',
                'harga'=>'499',
                'deskripsi_product'=>'Remote controller standard',
                'id_kategori'=>'3',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI Terra License',
                'harga'=>'7999',
                'deskripsi_product'=>'Software pemprosesan data pemetaan',
                'id_kategori'=>'5',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI Flight Simulator',
                'harga'=>'1999',
                'deskripsi_product'=>'Latihan simulasi penerbangan drone',
                'id_kategori'=>'5',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI Battery Mavic 3',
                'harga'=>'899',
                'deskripsi_product'=>'Bateri tambahan Mavic 3',
                'id_kategori'=>'6',
                'created_at'=>now()
            ],
            [
                'nama_product'=>'DJI Propeller Set',
                'harga'=>'199',
                'deskripsi_product'=>'Set propeller gantian original',
                'id_kategori'=>'6',
                'created_at'=>now()
            ], */
            [
                'nama_product'=>'DJI Charging Hub',
                'harga'=>'299',
                'deskripsi_product'=>'Hub pengecas bateri multi',
                'id_kategori'=>'6',
                'created_at'=>now()
            ]        
        ]);
    }
}
