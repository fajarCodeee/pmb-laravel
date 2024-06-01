<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataDiriRequest extends FormRequest
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
            'namaLengkap' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
            'jenisKelamin' => 'required',
            'agama' => 'required',
            'nik' => 'required',
            'nisn' => 'required',
            'nomerWhatsapp' => 'required',
            'email' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'namaLengkap.required' => 'Kolom :attribute Wajib diisi!',
            'tempatLahir.required' => 'Kolom :attribute Wajib diisi!',
            'tanggalLahir.required' => 'Kolom :attribute Wajib diisi!',
            'jenisKelamin.required' => 'Kolom :attribute Wajib diisi!',
            'agama.required' => 'Kolom :attribute Wajib diisi!',
            'nik.required' => 'Kolom :attribute Wajib diisi!',
            'nisn.required' => 'Kolom :attribute Wajib diisi!',
            'nomerWhatsapp.required' => 'Kolom :attribute Wajib diisi!',
            'email.required' => 'Kolom :attribute Wajib diisi!',
        ];
    }
}
