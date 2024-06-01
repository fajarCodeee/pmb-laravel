<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gelombang>
 */
class GelombangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'namaGelombang' => 'Gelombang Satu',
            'tanggalMulai' => '11-7-2014',
            'tanggalAkhir' => '11-7-2015',
        ];
    }
}
