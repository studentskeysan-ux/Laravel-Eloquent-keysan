<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartemenSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('departemen')->insert([
            [
                'nama_departemen' => 'HRD',
                'keterangan' => 'Human Resource Development',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_departemen' => 'IT',
                'keterangan' => 'Teknologi Informasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_departemen' => 'Keuangan',
                'keterangan' => 'Bagian keuangan perusahaan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}