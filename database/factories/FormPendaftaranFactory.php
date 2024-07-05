<?php

namespace Database\Factories;

use App\Models\FormPendaftaran;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FormPendaftaran>
 */
class FormPendaftaranFactory extends Factory
{

    protected $model = FormPendaftaran::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'prodi_id' => $this->faker->numberBetween(1, 5),
            'kelas_id' => $this->faker->numberBetween(1, 2),
            'namaLengkap' => $this->faker->name,
            'tempatLahir' => $this->faker->city,
            'tanggalLahir' => $this->faker->date,
            'jenisKelamin' => $this->faker->randomElement(['L', 'P']),
            'agama' => $this->faker->numberBetween(1, 6),
            'nomerWhatsapp' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'nik' => $this->faker->numerify('###############'),
            'nisn' => $this->faker->numerify('##########'),
            'npwp' => null,
            'kewarganegaraan' => 'Indonesia',
            'kecamatan' => $this->faker->numerify('########'),
            'kelurahan' => $this->faker->word,
            'dusun' => $this->faker->word,
            'rt' => $this->faker->numerify('###'),
            'rw' => $this->faker->numerify('###'),
            'jalan' => $this->faker->streetName,
            'kodePos' => $this->faker->postcode,
            'jenisTinggal' => $this->faker->randomElement(['Bersama orang tua', 'Kost', 'Asrama']),
            'alatTransportasi' => $this->faker->randomElement(['Motor', 'Mobil', 'Sepeda']),
            'telpRumah' => null,
            'nikAyah' => $this->faker->numerify('###############'),
            'namaAyah' => $this->faker->name('male'),
            'tempatLahirAyah' => $this->faker->city,
            'tanggalLahirAyah' => $this->faker->date,
            'pendidikanAyah' => $this->faker->numberBetween(1, 5),
            'pekerjaanAyah' => $this->faker->jobTitle,
            'penghasilanAyah' => $this->faker->randomElement(['Rp. 1,000,000 - Rp. 1,999,999', 'Rp. 2,000,000 - Rp. 4,999,999']),
            'nikIbu' => $this->faker->numerify('###############'),
            'namaIbu' => $this->faker->name('female'),
            'tempatLahirIbu' => $this->faker->city,
            'tanggalLahirIbu' => $this->faker->date,
            'pendidikanIbu' => $this->faker->numberBetween(1, 5),
            'pekerjaanIbu' => 'Ibu Rumah Tangga',
            'penghasilanIbu' => 'Tidak bekerja',
            'namaWali' => null,
            'tempatLahirWali' => null,
            'tanggalLahirWali' => null,
            'pendidikanWali' => null,
            'pekerjaanWali' => null,
            'penghasilanWali' => null,
            'kk' => 'kk_' . $this->faker->word . '.pdf',
            'ktp' => 'ktp_' . $this->faker->word . '.pdf',
            'ijazah' => 'ijazah_' . $this->faker->word . '.pdf',
            'foto' => 'foto_' . $this->faker->word . '.jpg',
            'akte' => 'akte_' . $this->faker->word . '.pdf',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
