<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggans')->insert([
            'id' => '2',
            'nama' => 'Adi',
            'jenis_kelamin' => 'Pria',
            'alamat' => 'Malang',
            'nohp' => '0878-6483-5043'
        ]);
    }
}
