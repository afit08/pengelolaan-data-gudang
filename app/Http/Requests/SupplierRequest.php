<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
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
            'kode_supplier' => 'required',
            'nama_supplier' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'no_tlp' => 'required',
       ];
    }

    public function messages()
    {
        return [
            'kode_supplier.required'    => 'Kode Supplier Belum Diisi',
            'nama_supplier.required'     => 'Nama Supplier Belum Diisi',
            'alamat.required'     => 'Alamat Belum Diisi',
            'email.required'     => 'Email Belum Diisi',
            'no_tlp.required'     => 'Nomor Telepon Belum Diisi',
        ];
    }
}
