<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Paket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricelistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pakets')->insert([
            'nama_paket' => 'SELF PHOTO FOR SINGLE',
            'deskripsi' => '15 minutes photo session
                            10 minutes photo selection
                            (including printing)
                            1 printed photos
                            all digital soft copy',
            'gambar' => 'contoh1.png',
            'harga' => 40000,
            'created_at' => now(),
        ]);

        DB::table('pakets')->insert([
            'nama_paket' => 'SELF PHOTO FOR DOUBLE',
            'deskripsi' => '15 minutes photo session
                            10 minutes photo selection
                            (including printing)
                            2 printed photos
                            all digital soft copy',
            'gambar' => 'contoh2.jpg',
            'harga' => 75000,
            'created_at' => now(),
        ]);

        DB::table('pakets')->insert([
            'nama_paket' => 'SELF PHOTO FOR GROUP',
            'deskripsi' => '15 minutes photo session
                            10 minutes photo selection
                            (including printing)
                            5 printed photos
                            all digital soft copy',
            'gambar' => 'contoh3.png',
            'harga' => 125000,
            'created_at' => now(),
        ]);
    }
}
