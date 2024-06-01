<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenghasilanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penghasilans')->insert([
            ['value' => 11, 'name' => 'Kurang dari Rp. 500,000'],
            ['value' => 12, 'name' => 'Rp. 500,000 - Rp. 999,999'],
            ['value' => 13, 'name' => 'Rp. 1,000,000 - Rp. 1,999,999'],
            ['value' => 14, 'name' => 'Rp. 2,000,000 - Rp. 4,999,999'],
            ['value' => 15, 'name' => 'Rp. 5,000,000 - Rp. 20,000,000'],
            ['value' => 16, 'name' => 'Lebih dari Rp. 20,000,000'],
        ]);
    }
}
