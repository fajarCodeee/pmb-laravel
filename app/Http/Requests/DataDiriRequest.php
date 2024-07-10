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
            'nik' => 'required|digits:16',
            'nisn' => 'required|min:10',
            'nomerWhatsapp' => 'required',
            'email' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'namaLengkap.required' => ':attribute Wajib diisi!',
            'tempatLahir.required' => ':attribute Wajib diisi!',
            'tanggalLahir.required' => ':attribute Wajib diisi!',
            'jenisKelamin.required' => 'Silahkan pilih salah satu!',
            'agama.required' => 'Silahkan pilih salah satu!',
            'nik.required' => 'NIK Wajib diisi!',
            'nik.digits' => 'NIK terdiri dari 16 digit angka!',
            'nisn.required' => ':attribute Wajib diisi!',
            'nisn.min' => ':attribute terdiri dari 10 digit!',
            'nomerWhatsapp.required' => ':attribute Wajib diisi!',
            'email.required' => ':attribute Wajib diisi!',
            'email.email' => ':attribute yang dimasukan tidak valid!',
        ];
    }
}
