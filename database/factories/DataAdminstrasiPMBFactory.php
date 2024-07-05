<?php

namespace Database\Factories;

use App\Models\DataAdminstrasiPMB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataAdministrasiPMB>
 */
class DataAdminstrasiPMBFactory extends Factory
{

    protected $model = DataAdminstrasiPMB::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jenis_administrasi' => $this->faker->randomElement(['Pendaftaran', 'Registrasi']),
            'nama_bank' => $this->faker->randomElement(['Bank BRI', 'Bank BNI', 'Bank Mandiri']),
            'no_rekening' => $this->faker->numerify('##############'),
            'nama_pemilik' => $this->faker->name(),
            'jumlah_administrasi' => $this->faker->randomElement(['200.000', '100.000', '1.000.000'])
        ];
    }
}
