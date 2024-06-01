<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pendidikans')->insert([
            ['value' => 0, 'name' => 'Tidak sekolah'],
            ['value' => 1, 'name' => 'PAUD'],
            ['value' => 2, 'name' => 'TK / sederajat'],
            ['value' => 3, 'name' => 'Putus SD'],
            ['value' => 4, 'name' => 'SD / sederajat'],
            ['value' => 5, 'name' => 'SMP / sederajat'],
            ['value' => 6, 'name' => 'SMA / sederajat'],
            ['value' => 7, 'name' => 'Paket A'],
            ['value' => 8, 'name' => 'Paket B'],
            ['value' => 9, 'name' => 'Paket C'],
            ['value' => 20, 'name' => 'D1'],
            ['value' => 21, 'name' => 'D2'],
            ['value' => 22, 'name' => 'D3'],
            ['value' => 23, 'name' => 'D4'],
            ['value' => 30, 'name' => 'S1'],
            ['value' => 31, 'name' => 'Profesi'],
            ['value' => 32, 'name' => 'Sp-1'],
            ['value' => 35, 'name' => 'S2'],
            ['value' => 36, 'name' => 'S2 Terapan'],
            ['value' => 37, 'name' => 'Sp-2'],
            ['value' => 40, 'name' => 'S3'],
            ['value' => 41, 'name' => 'S3 Terapan'],
            ['value' => 90, 'name' => 'Non formal'],
            ['value' => 91, 'name' => 'Informal'],
            ['value' => 99, 'name' => 'Lainnya'],
        ]);
    }
}
