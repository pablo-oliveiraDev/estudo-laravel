<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateUsuarios extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            
            'nome' => 'required',
            'sobrenome' => 'required',
            'email' => 'required',
            'cpf' => 'required',
            'senha' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Este campo e obrigatorio',
        ];
    }
}
