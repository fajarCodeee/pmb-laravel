<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FormPendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('form_pendaftarans')->insert([
            [
                'id' => Str::uuid(),
                'prodi_id' => 1,
                'kelas_id' => 1,
                'namaLengkap' => 'Budi Santoso',
                'tempatLahir' => 'Jakarta',
                'tanggalLahir' => '2000-01-01',
                'jenisKelamin' => 'L',
                'agama' => '1',
                'nomerWhatsapp' => '081234567890',
                'email' => 'budi@example.com',
                'nik' => '1234567890123456',
                'nisn' => '1234567890',
                'npwp' => null,
                'kewarganegaraan' => 'Indonesia',
                'kecamatan' => 'Kecamatan A',
                'kelurahan' => 'Kelurahan B',
                'dusun' => 'Dusun C',
                'rt' => '001',
                'rw' => '002',
                'jalan' => 'Jalan Merdeka',
                'kodePos' => '12345',
                'jenisTinggal' => 'Bersama orang tua',
                'alatTransportasi' => 'Motor',
                'telpRumah' => null,
                'nikAyah' => '2345678901234567',
                'namaAyah' => 'Slamet Santoso',
                'tempatLahirAyah' => 'Surabaya',
                'tanggalLahirAyah' => '1970-02-01',
                'pendidikanAyah' => 4,
                'pekerjaanAyah' => 'Petani',
                'penghasilanAyah' => 'Rp. 1,000,000 - Rp. 1,999,999',
                'nikIbu' => '3456789012345678',
                'namaIbu' => 'Siti Aminah',
                'tempatLahirIbu' => 'Bandung',
                'tanggalLahirIbu' => '1975-03-01',
                'pendidikanIbu' => 4,
                'pekerjaanIbu' => 'Ibu Rumah Tangga',
                'penghasilanIbu' => 'Tidak bekerja',
                'namaWali' => null,
                'tempatLahirWali' => null,
                'tanggalLahirWali' => null,
                'pendidikanWali' => null,
                'pekerjaanWali' => null,
                'penghasilanWali' => null,
                'kk' => 'kk_budi.pdf',
                'ktp' => 'ktp_budi.pdf',
                'ijazah' => 'ijazah_budi.pdf',
                'foto' => 'foto_budi.jpg',
                'akte' => 'akte_budi.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}
