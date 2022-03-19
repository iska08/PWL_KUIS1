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
            'id' => '7',
            'judul_buku' => 'Atheis',
            'pengarang' => 'Achdiat K. Mihardja',
            'penerbit' => 'Balai Pustaka',
            'tahun_terbit' => '1950',
            'harga' => '104000',
            'stok' => '100'
        ]);
    }
}
