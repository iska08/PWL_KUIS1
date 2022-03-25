<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
            'judul_buku' => 'Tetralogi Pulau Buru',
            'pengarang' => 'Pramoedya Ananta Toer',
            'penerbit' => 'Lentera Dipantara',
            'tahun_terbit' => '1980',
            'harga' => 500000,
            'stok' => 100
        ]);
        DB::table('barangs')->insert([
            'judul_buku' => 'Ziarah',
            'pengarang' => 'Iwan Simatupang',
            'penerbit' => 'Djambatan',
            'tahun_terbit' => '1966',
            'harga' => 30000,
            'stok' => 100
        ]);
        DB::table('barangs')->insert([
            'judul_buku' => 'Lelaki Harimau',
            'pengarang' => 'Eka Kurniawan',
            'penerbit' => 'Gramedia Pustaka Utama',
            'tahun_terbit' => '2004',
            'harga' => 55000,
            'stok' => 100
        ]);
        DB::table('barangs')->insert([
            'judul_buku' => 'Olengka',
            'pengarang' => 'Budi Darma',
            'penerbit' => 'Balai Pustaka',
            'tahun_terbit' => '1983',
            'harga' => 75000,
            'stok' => 100
        ]);
        DB::table('barangs')->insert([
            'judul_buku' => 'Ronggeng Dukuh Paruk',
            'pengarang' => 'Ahmad Tohari',
            'penerbit' => 'Gramedia Pustaka Utama',
            'tahun_terbit' => '2003',
            'harga' => 75000,
            'stok' => 100
        ]);
        DB::table('barangs')->insert([
            'judul_buku' => 'Cantik Itu Luka',
            'pengarang' => 'Eka Kurniawan',
            'penerbit' => 'Gramedia Pustaka Utama',
            'tahun_terbit' => '2004',
            'harga' => 125000,
            'stok' => 100
        ]);
        DB::table('barangs')->insert([
            'judul_buku' => 'Atheis',
            'pengarang' => 'Achdiat K. Mihardja',
            'penerbit' => 'Balai Pustaka',
            'tahun_terbit' => '1950',
            'harga' => 104000,
            'stok' => 100
        ]);
    }
}
