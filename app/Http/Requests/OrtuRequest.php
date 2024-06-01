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
            'nikAyah' => 'required',
            'namaAyah' => 'required',
            'tempatLahirAyah' => 'required',
            'tanggalLahirAyah' => 'required',
            'pendidikanAyah' => 'required',
            'pekerjaanAyah' => 'required',
            'penghasilanAyah' => 'required',

            // ibu
            'nikIbu' => 'required',
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
            'namaAyah.required' => 'Kolom :attribute Wajib diisi!',
            'tempatLahirAyah.required' => 'Kolom :attribute Wajib diisi!',
            'tanggalLahirAyah.required' => 'Kolom :attribute Wajib diisi!',
            'pendidikanAyah.required' => 'Kolom :attribute Wajib diisi!',
            'pekerjaanAyah.required' => 'Kolom :attribute Wajib diisi!',
            'penghasilanAyah.required' => 'Kolom :attribute Wajib diisi!',

            // ibu
            'nikIbu.required' => 'Kolom :attribute Wajib diisi!',
            'namaIbu.required' => 'Kolom :attribute Wajib diisi!',
            'tempatLahirIbu.required' => 'Kolom :attribute Wajib diisi!',
            'tanggalLahirIbu.required' => 'Kolom :attribute Wajib diisi!',
            'pendidikanIbu.required' => 'Kolom :attribute Wajib diisi!',
            'pekerjaanIbu.required' => 'Kolom :attribute Wajib diisi!',
            'penghasilanIbu.required' => 'Kolom :attribute Wajib diisi!',

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
