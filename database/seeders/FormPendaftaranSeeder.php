<?php

namespace Database\Seeders;

use App\Models\FormPendaftaran;
use Illuminate\Database\Seeder;

class FormPendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FormPendaftaran::factory()->count(10)->create();
    }
}
