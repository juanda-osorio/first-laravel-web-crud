<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MotoRequest extends FormRequest
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
            "marca" => "required|max:15|min:3",
            "modelo" => "required|max:15|min:2",
            // "cilindrada" => "required|max:4",
            // "potencia" => "required|max:4",
            "anyo" => "required|min:4",
        ];
    }

    public function attributes()
    {
        return [
            "marca" => " 'Marca' ",
            "modelo" => " 'Modelo' ",
            "anyo" => " 'Año' ",
        ];
    }

    public function messages()
    {
        return [
            "marca.required" => "El campo :attribute es Obligatorio chaval"
        ];
    }
}
