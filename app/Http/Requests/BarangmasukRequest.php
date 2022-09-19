<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarangmasukRequest extends FormRequest
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
            'jlh_brg_masuk' => 'required',
            'penerima' => 'required',
            'tanggal' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'jlh_brg_masuk.required'    => 'Jumlah Barang Masuk Belum Diisi',
            'penerima.required'     => 'Penerima Belum Diisi',
            'tanggal.required'     => 'Tanggal Masuk Belum Diisi'
        ];
    }
}
