<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistracionFormRequest extends FormRequest
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
            'inputApellido' => 'required|min:2',
            'inputNombre' => 'required|min:2',
            'inputEmail' => 'required|min:2',
            'inputPassword' => 'required|min:2',
            'inputDomicilio' => 'required|min:2',
            'inputLocalidad' => 'required|min:2',
            'inputCP' => 'numeric|min:2|max:10000',
        ];
    }
}
