<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FieldRequest extends FormRequest
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
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'stok' => 'required|numeric',
       ];
    }
    
    public function messages()
    {
        return [
            'kode_barang.required'    => 'Kode Barang Belum Diisi',
            'nama_barang.required'     => 'Nama Barang Belum Diisi',
            'stok.required'     => 'Stok Barang Belum Diisi',
        ];
    }
}
