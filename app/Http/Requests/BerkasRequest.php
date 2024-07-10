<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BerkasRequest extends FormRequest
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
            'ktp' => 'required|mimes:png,jpg,jpeg,pdf|max:2048',
            'kk' => 'required|mimes:png,jpg,jpeg,pdf|max:2048',
            'ijazah' => 'required|mimes:png,jpg,jpeg,pdf|max:2048',
            'foto' => 'required|mimes:png,jpg,jpeg,pdf|max:2048',
            'akte' => 'required|mimes:png,jpg,jpeg,pdf|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'ktp.required' => 'KTP wajib diunggah.',
            'ktp.mimes' => 'KTP harus berupa file dengan format: :values',
            'ktp.max' => 'KTP tidak boleh lebih dari 2MB.',

            'kk.required' => 'KK wajib diunggah.',
            'kk.mimes' => 'KK harus berupa file dengan format: :values',
            'kk.max' => 'KK tidak boleh lebih dari 2MB.',

            'ijazah.required' => 'Ijazah wajib diunggah.',
            'ijazah.mimes' => 'Ijazah harus berupa file dengan format: :values',
            'ijazah.max' => 'Ijazah tidak boleh lebih dari 2MB.',

            'foto.required' => 'Foto wajib diunggah.',
            'foto.mimes' => 'Foto harus berupa file dengan format: :values',
            'foto.max' => 'Foto tidak boleh lebih dari 2MB.',

            'akte.required' => 'Akte wajib diunggah.',
            'akte.mimes' => 'Akte harus berupa file dengan format: :values',
            'akte.max' => 'Akte tidak boleh lebih dari 2MB.',
        ];
    }
}
