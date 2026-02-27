<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:60|confirmed'
        ];
    }

    public function messages() :array
    {
        return [
            'name.required' => 'O campo nome é obrigratório',
            'name.max' => 'O nome deve ter no maximo 255 caracteres',
            'name.string' => 'O nome deve ser um texto válido',

            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O campo email dev ser um enreço de email válido',
            'email.unique' => 'O email já esta em uso.',

            'password.required' => 'O campo senha é Obrigatório.',
            'password.min' => 'A senha deve ter no minimo 6 caracteres',
            'password.max' =>  'A senha deve ter no maximo 60 caracteres',
            'password.confirmed' =>  'As senhas não coincidem',
        ];
    }
}
