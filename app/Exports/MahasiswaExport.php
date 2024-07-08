<?php

namespace App\Exports;

use App\Models\MahasiswaBaru;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class MahasiswaExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return MahasiswaBaru::with('prodi')->latest()->get();
    }

    public function headings(): array
    {
        return [
            'NIM',
            'Nama',
            'Tempat Lahir',
            'Tanggal Lahir',    'Jenis Kelamin',    'NIK',    'Agama',    'NISN',    'Jalur Pendaftaran',    'NPWP',
            'Kewarganegaraan',    'Jenis Pendaftaran',    'Tanggal Masuk Kuliah',    'Mulai Semester',    'Jalan',
            'RT',    'RW',    'Nama Dusun',    'Kelurahan',    'Kecamatan',    'Kode Pos',
            'Jenis Tinggal',    'Alat Transportasi',    'Telp Rumah',    'No HP',
            'Email',    'Terima KPS',
            'No KPS',    'NIK Ayah',    'Nama Ayah',
            'Tanggal Lahir Ayah',    'Pendidikan Ayah',    'Pekerjaan Ayah',
            'Penghasilan Ayah',    'NIK Ibu',    'Nama Ibu',    'Tanggal Lahir Ibu',    'Pendidikan Ibu',
            'Pekerjaan Ibu',    'Penghasilan Ibu',
            'Nama Wali',    'Tanggal Lahir Wali',    'Pendidikan Wali',
            'Pekerjaan Wali',    'Penghasilan Wali',    'Kode Prodi',
            'Nama Prodi',    'SKS Diakui',
            'Kode PT Asal',    'Nama PT Asal',
            'Kode Prodi Asal',
            'Nama Prodi Asal',    'Jenis Pembiayaan',    'Jumlah Biaya Masuk'
        ];
    }

    public function map($mahasiswa): array
    {
        return [
            "'" . $mahasiswa->nim,
            $mahasiswa->namaLengkap,
            $mahasiswa->tempatLahir,
            $mahasiswa->tanggalLahir,
            $mahasiswa->jenisKelamin,
            "'" . $mahasiswa->nik,
            $mahasiswa->agama,
            "'" . $mahasiswa->nisn,
            "12",
            $mahasiswa->npwp,
            $mahasiswa->kewarganegaraan,
            "1",
            "yyyy-mm-dd",
            "'000000",
            $mahasiswa->jalan,
            $mahasiswa->rt,
            $mahasiswa->rw,
            $mahasiswa->dusun,
            $mahasiswa->kelurahan,
            "'" . $mahasiswa->kecamatan,
            "'" . $mahasiswa->kodePos,
            $mahasiswa->jenisTinggal,
            "",
            "'" . $mahasiswa->telpRumah,
            "'" . $mahasiswa->nomerWhatsapp,
            $mahasiswa->email,
            "'0",
            "",
            "'" . $mahasiswa->nikAyah,
            $mahasiswa->namaAyah,
            $mahasiswa->tanggalLahirAyah,
            $mahasiswa->pendidikanAyah,
            $mahasiswa->pekerjaanAyah,
            $mahasiswa->penghasilanAyah,
            "'" . $mahasiswa->nikIbu,
            $mahasiswa->namaIbu,
            $mahasiswa->tanggalLahirIbu,
            $mahasiswa->pendidikanIbu,
            $mahasiswa->pekerjaanIbu,
            $mahasiswa->penghasilanIbu,
            $mahasiswa->namaWali,
            $mahasiswa->tanggalLahirWali,
            $mahasiswa->pendidikanWali,
            $mahasiswa->pekerjaanWali,
            $mahasiswa->penghasilanWali,
            $mahasiswa->kodeProdi,
            $mahasiswa->prodi->namaProdi,
            "",
            "",
            "",
            "",
            "",
            "",
            "1",
            "'100000",

        ];
    }

    // NIM	Nama	Tempat Lahir	Tanggal Lahir	Jenis Kelamin	NIK	Agama	NISN	Jalur Pendaftaran	NPWP	Kewarganegaraan	Jenis Pendaftaran	Tanggal Masuk Kuliah	Mulai Semester	Jalan	RT	RW	Nama Dusun	Kelurahan	Kecamatan	Kode Pos	Jenis Tinggal	Alat Transportasi	Telp Rumah	No HP	Email	Terima KPS	No KPS	NIK Ayah	Nama Ayah	Tanggal Lahir Ayah	Pendidikan Ayah	Pekerjaan Ayah	Penghasilan Ayah	NIK Ibu	Nama Ibu	Tanggal Lahir Ibu	Pendidikan Ibu	Pekerjaan Ibu	Penghasilan Ibu	Nama Wali	Tanggal Lahir Wali	Pendidikan Wali	Pekerjaan Wali	Penghasilan Wali	Kode Prodi	Nama Prodi	SKS Diakui	Kode PT Asal	Nama PT Asal	Kode Prodi Asal	Nama Prodi Asal	Jenis Pembiayaan	Jumlah Biaya Masuk

}
