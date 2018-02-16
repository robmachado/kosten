<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username' => 'required|string|max:15||unique:users,username,'.$this->id,
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$this->id,
            'password' => 'required|string|min:6|confirmed'
        ];
    }
    
    public function messages()
    {
        return [
            'username.required'=>'O nome do usuário é necessário.',
            'username.string'=>'O nome do usuário deve ser uma palavra.',
            'username.max'=>'O nome do usuário deve ter no máximo 15 digitos.',
            'username.unique'=>'O nome do usuário naço pode repetir esse já existe.',
            'name.required'=>'O nome é necessário.',
            'name.string'=>'O nome deve ser uma palavra.',
            'name.max'=>'O nome é deve ter no máximo 255 digitos.',
            'email.required'=>'O email é necessário.',
            'email.max'=>'O email é deve ter no máximo 255 digitos.',
            'email.email'=>'O email deve ser válido.',
            'email.unique'=>'O email não pode repetir, esse já existe.',
            'password.required'=>'A senha é necessária.',
            'password.string'=>'A senha deve ser uma palavra.',
            'password.min'=>'A senha deve ter no mínimo 6 digitos.',
            'password.confirmed'=>'A senha não confirma.',
        ];
    }
}
