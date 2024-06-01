<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlatTransportasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        DB::table('alat_transportasis')->insert([
            [
                'value' => 1,
                'name' => 'Jalan Kaki'
            ],
            [
                'value' => 3,
                'name' => 'Angkutan umum/bus/pete-pete'
            ],
            [
                'value' => 4,
                'name' => 'Mobil/bus antar jemput'
            ],
            [
                'value' => 5,
                'name' => 'Kereta api'
            ],
            [
                'value' => 6,
                'name' => 'Ojek'
            ],
            [
                'value' => 7,
                'name' => 'Andong/bendi/sado/dokar/delman/becak'
            ],
            [
                'value' => 8,
                'name' => 'Perahu penyeberangan/rakit/getek'
            ],
            [
                'value' => 11,
                'name' => 'Kuda'
            ],
            [
                'value' => 12,
                'name' => 'Sepeda'
            ],
            [
                'value' => 13,
                'name' => 'Sepeda motor'
            ],
            [
                'value' => 14,
                'name' => 'Mobil pribadi'
            ],
            [
                'value' => 99,
                'name' => 'Lainnya'
            ],
        ]);
    }
}
