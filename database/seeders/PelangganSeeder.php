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
            'nama' => 'As`ad',
            'jenis_kelamin' => 'Pria',
            'alamat' => 'Lamongan',
            'nohp' => '0812-3518-4908'
        ]);
        DB::table('pelanggans')->insert([
            'nama' => 'Adi',
            'jenis_kelamin' => 'Pria',
            'alamat' => 'Malang',
            'nohp' => '0878-6483-5043'
        ]);
    }
}
