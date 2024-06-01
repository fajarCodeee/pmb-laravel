<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormulirRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // identitas diri
            'namaLengkap' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
            'jenisKelamin' => 'required',
            'agama' => 'required',
            'nomerWhatsapp' => 'required',
            'email' => 'required',
            'nik' => 'required',
            'nisn' => 'required',

            // alamat
            'kewarganegaraan' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'dusun' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'jalan' => 'required',
            'kodePos' => 'required',
            'jenisTinggal' => 'required',
            'alatTransportasi' => 'required',

            // data-ayah
            'nikAyah' => 'required',
            'namaAyah' => 'required',
            'tanggalLahirAyah' => 'required',
            'pendidikanAyah' => 'required',
            'pekerjaaanAyah' => 'required',
            'penghasilanAyah' => 'required',

            // data-ibu
            'nikIbu' => 'required',
            'namaIbu' => 'required',
            'tanggalLahirIbu' => 'required',
            'pendidikanIbu' => 'required',
            'pekerjaaanIbu' => 'required',
            'penghasilanIbu' => 'required',

            // pilihan prodi
            'prodi' => 'required',
            'kelas' => 'required'
        ];
    }
}
