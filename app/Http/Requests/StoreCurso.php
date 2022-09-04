<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'required|max:10',
            'description' => 'required|min:10',
            'categoria' => 'required'
        ];
    }
    public function attributes()
    {
        return [
            'nombre' =>'Nombre del curso'
        ];
    }
    public function messages()
    {
        return [
            'description.required' => 'Debe Ingresar una descripción del curso'
        ];
    }
}
