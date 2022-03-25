<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'nama' => 'Iskandar',
            'ttl' => 'Lamongan, 08-08-2001',
            'jenis_kelamin' => 'Pria',
            'alamat' => 'Lamongan',
            'nohp' => '0812-1883-6050'
        ]);
        DB::table('suppliers')->insert([
            'nama' => 'Roni',
            'ttl' => 'Sumenep, 24-03-2001',
            'jenis_kelamin' => 'Pria',
            'alamat' => 'Sumenep',
            'nohp' => '0878-6483-5022'
        ]);
    }
}
