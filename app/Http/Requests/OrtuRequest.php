<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrtuRequest extends FormRequest
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
            // ayah
            'nikAyah' => 'required|digits:16|numeric',
            'namaAyah' => 'required',
            'tempatLahirAyah' => 'required',
            'tanggalLahirAyah' => 'required',
            'pendidikanAyah' => 'required',
            'pekerjaanAyah' => 'required',
            'penghasilanAyah' => 'required',

            // ibu
            'nikIbu' => 'required|digits:16|numeric',
            'namaIbu' => 'required',
            'tempatLahirIbu' => 'required',
            'tanggalLahirIbu' => 'required',
            'pendidikanIbu' => 'required',
            'pekerjaanIbu' => 'required',
            'penghasilanIbu' => 'required',
        ];
    }

    public function messages()
    {
        return [
            // ayah
            'nikAyah.required' => 'Kolom :attribute Wajib diisi!',
            'nikAyah.digits' => 'NIK terdiri dari 16 digit angka!',
            'nikAyah.numeric' => 'NIK hanya berupa digit angka!',
            'namaAyah.required' => 'Kolom :attribute Wajib diisi!',
            'tempatLahirAyah.required' => 'Kolom :attribute Wajib diisi!',
            'tanggalLahirAyah.required' => 'Kolom :attribute Wajib diisi!',
            'pendidikanAyah.required' => 'Silahkan pilih salah satu!',
            'pekerjaanAyah.required' => 'Silahkan pilih salah satu!',
            'penghasilanAyah.required' => 'Silahkan pilih salah satu!',

            // ibu
            'nikIbu.required' => 'Kolom :attribute Wajib diisi!',
            'nikIbu.digits' => 'NIK terdiri dari 16 digit angka!',
            'nikIbu.numeric' => 'NIK hanya berupa digit angka!',
            'namaIbu.required' => 'Kolom :attribute Wajib diisi!',
            'tempatLahirIbu.required' => 'Kolom :attribute Wajib diisi!',
            'tanggalLahirIbu.required' => 'Kolom :attribute Wajib diisi!',
            'pendidikanIbu.required' => 'Silahkan pilih salah satu!',
            'pekerjaanIbu.required' => 'Silahkan pilih salah satu!',
            'penghasilanIbu.required' => 'Silahkan pilih salah satu!',

        ];
    }

    protected function prepareForValidation()
    {
        // Berikan nilai default untuk field 'description' jika tidak diisi
        $this->merge([
            'namaWali' => $this->namaWali ?? '',
            'tempatLahirWali' => $this->tempatLahirWali ?? '',
            'tanggalLahirWali' => $this->tanggalLahirWali ?? '',
            'pendidikanWali' => $this->pendidikanWali ?? '',
            'pekerjaanWali' => $this->pekerjaanWali ?? '',
            'penghasilanWali' => $this->penghasilanWali ?? '',
        ]);
    }
}
