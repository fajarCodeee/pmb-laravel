<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pekerjaans')->insert([
            ['value' => 1, 'name' => 'Tidak bekerja'],
            ['value' => 2, 'name' => 'Nelayan'],
            ['value' => 3, 'name' => 'Petani'],
            ['value' => 4, 'name' => 'Peternak'],
            ['value' => 5, 'name' => 'PNS/TNI/Polri'],
            ['value' => 6, 'name' => 'Karyawan Swasta'],
            ['value' => 7, 'name' => 'Pedagang Kecil'],
            ['value' => 8, 'name' => 'Pedagang Besar'],
            ['value' => 9, 'name' => 'Wiraswasta'],
            ['value' => 10, 'name' => 'Wirausaha'],
            ['value' => 11, 'name' => 'Buruh'],
            ['value' => 12, 'name' => 'Pensiunan'],
            ['value' => 13, 'name' => 'Peneliti'],
            ['value' => 14, 'name' => 'Tim Ahli / Konsultan'],
            ['value' => 15, 'name' => 'Magang'],
            ['value' => 16, 'name' => 'Tenaga Pengajar /Instruktur / Fasilitator'],
            ['value' => 17, 'name' => 'Pimpinan / Manajerial'],
            ['value' => 98, 'name' => 'Sudah Meninggal'],
            ['value' => 99, 'name' => 'Lainnya'],
        ]);
    }
}
