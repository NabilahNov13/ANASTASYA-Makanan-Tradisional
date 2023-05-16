<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MakananTradisionalRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'jenis_makanan' => 'required',
            'asal_daerah' => 'required',
            
        ];
    }

    public function messages()
    {
        return[
            'jenis_makanan.required' => 'Jenis Makanan tidak boleh kosong',
            'asal_daerah.required' => 'Asal Daerah tidak boleh kosong',
            
            
        ];
    }
}
