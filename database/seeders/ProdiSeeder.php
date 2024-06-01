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
                'kodeProdi' => rand(300000, 400000),
                'gelar' => 'D3',
            ],
            [
                'namaProdi' => 'Akutansi',
                'kodeProdi' => rand(300000, 400000),
                'gelar' => 'D3',
            ],
            [
                'namaProdi' => 'Administrasi Bisnis',
                'kodeProdi' => rand(300000, 400000),
                'gelar' => 'D3',
            ],
            [
                'namaProdi' => 'Teknologi Rekayasa Perangkat Lunak (TRPL)',
                'kodeProdi' => rand(300000, 400000),
                'gelar' => 'D4/S1',
            ],
            [
                'namaProdi' => 'Bisnis Digital (BD)',
                'kodeProdi' => rand(300000, 400000),
                'gelar' => 'D4/S1',
            ],
        ]);
    }
}
