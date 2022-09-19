<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarangkeluarRequest extends FormRequest
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
            'jlh_brg_keluar' => 'required',
            'tujuan' => 'required',
            'tanggal_keluar' => 'required',
            'operator' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'jlh_brg_keluar.required'    => 'Jumlah Barang Keluar Belum Diisi',
            'tujuan.required'     => 'Tujuan Belum Diisi',
            'tanggal_keluar.required'     => 'Tanggal Keluar Belum Diisi',
            'operator.required'     => 'Operator Belum Diisi',
        ];
    }
}
