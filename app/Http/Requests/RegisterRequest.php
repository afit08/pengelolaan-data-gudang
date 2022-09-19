<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'address' => 'required',
            'num_phone' => 'required',
            'email' => 'required',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'    => 'Nama Belum Diisi',
            'address.required'     => 'Alamat Belum Diisi',
            'num_phone.required'     => 'Nomor Telepon Belum Diisi',
            'email.required'     => 'Email Belum Diisi',
            'password.required'     => 'Password Belum Diisi',
        ];
    }
}
