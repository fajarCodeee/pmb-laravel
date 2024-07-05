<?php

namespace Database\Seeders;

use App\Models\DataAdminstrasiPMB;
use Database\Factories\DataAdministrasiFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataAdministrasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DataAdminstrasiPMB::factory()->count(10)->create();
    }
}
