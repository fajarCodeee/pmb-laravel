<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Pendidikan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(KelasSeeder::class);
        $this->call(ProdiSeeder::class);
        $this->call(PendidikanSeeder::class);
        $this->call(PenghasilanSeeder::class);
        $this->call(PekerjaanSeeder::class);
        $this->call(AgamaSeeder::class);
        $this->call(JenisTinggalSeeder::class);
        $this->call(AlatTransportasiSeeder::class);
        $this->call(FormPendaftaranSeeder::class);
        $this->call(UserSeeder::class);
    }
}
