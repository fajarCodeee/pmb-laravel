<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    //  [
    //     '1' => 'Islam',
    //     '2' => 'Kristen',
    //     '3' => 'Katholik',
    //     '4' => 'Hindu',
    //     '5' => 'Budha',
    //     '6' => 'Konghuchu',
    //     '99' => 'lainnya',
    // ]
    public function run(): void
    {
        DB::table('agamas')->insert([
            [
                'value' => 1,
                'name' => 'Islam'
            ],
            [
                'value' => 2,
                'name' => 'Kristen'
            ],
            [
                'value' => 3,
                'name' => 'Katholik'
            ],
            [
                'value' => 4,
                'name' => 'Hindu'
            ],
            [
                'value' => 5,
                'name' => 'Budha'
            ],
            [
                'value' => 6,
                'name' => 'Konghuchu'
            ],
            [
                'value' => 99,
                'name' => 'Lainnya'
            ],
        ]);
    }
}
