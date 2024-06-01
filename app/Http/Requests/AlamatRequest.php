<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlamatRequest extends FormRequest
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
            'kewarganegaraan' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'dusun' => 'required',
            'jalan' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'jenisTinggal' => 'required',
            'kodePos' => 'required',
        ];
    }


    public function messages()
    {
        return [
            'kewarganegaraan.required' => 'Kolom :attribute Wajib diisi!',
            'provinsi.required' => 'Kolom :attribute Wajib diisi!',
            'kabupaten.required' => 'Kolom :attribute Wajib diisi!',
            'kecamatan.required' => 'Kolom :attribute Wajib diisi!',
            'kelurahan.required' => 'Kolom :attribute Wajib diisi!',
            'dusun.required' => 'Kolom :attribute Wajib diisi!',
            'jalan.required' => 'Kolom :attribute Wajib diisi!',
            'rt.required' => 'Kolom :attribute Wajib diisi!',
            'rw.required' => 'Kolom :attribute Wajib diisi!',
            'kodePos.required' => 'Kolom :attribute Wajib diisi!',
            'jenisTinggal.required' => 'Kolom :attribute Wajib diisi!',
        ];
    }
}
