<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawais')->insert([
            'nama' => 'Muhaimin',
            'ttl' => 'Lamongan, 08-08-2001',
            'jenis_kelamin' => 'Pria',
            'alamat' => 'Lamongan',
            'nohp' => '0888-0382-0248'
        ]);
        DB::table('pegawais')->insert([
            'nama' => 'Nanang',
            'ttl' => 'Sumenep, 24-03-2001',
            'jenis_kelamin' => 'Pria',
            'alamat' => 'Sumenep',
            'nohp' => '0878-6483-5022'
        ]);
    }
}
