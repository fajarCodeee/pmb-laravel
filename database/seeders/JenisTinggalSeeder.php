<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisTinggalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis_tinggals')->insert([
            ['value' => 1, 'name' => 'Bersama orang tua'],
            ['value' => 2, 'name' => 'Wali'],
            ['value' => 3, 'name' => 'Kost'],
            ['value' => 4, 'name' => 'Asrama'],
            ['value' => 5, 'name' => 'Panti Asuhan'],
            ['value' => 10, 'name' => 'Rumah Sendiri'],
            ['value' => 99, 'name' => 'Lainnya'],
        ]);
    }
}
