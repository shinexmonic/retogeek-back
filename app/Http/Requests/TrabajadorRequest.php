<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrabajadorRequest extends FormRequest
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
            'nombres'        => 'required',
            'apellidos'      => 'required',
            'edad'           => 'required|integer',
            'id_cargo'       => 'required|integer',
            'id_dependencia' => 'required|integer',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'messages'  => 'Errores de validación',
            'data'      => $validator->errors()
        ]));
    }
}
