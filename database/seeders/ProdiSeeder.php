<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prodis')->insert([
            [
                'namaProdi' => 'Teknik Informatika',
                'kodeProdi' => 32,
                'gelar' => 'D3',
            ],
            [
                'namaProdi' => 'Akutansi',
                'kodeProdi' => 31,
                'gelar' => 'D3',
            ],
            [
                'namaProdi' => 'Administrasi Bisnis',
                'kodeProdi' => 33,
                'gelar' => 'D3',
            ],
            [
                'namaProdi' => 'Teknologi Rekayasa Perangkat Lunak (TRPL)',
                'kodeProdi' => 41,
                'gelar' => 'D4/S1',
            ],
            [
                'namaProdi' => 'Bisnis Digital (BD)',
                'kodeProdi' => 42,
                'gelar' => 'D4/S1',
            ],
        ]);
    }
}
