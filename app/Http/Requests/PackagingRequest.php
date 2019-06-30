<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackagingRequest extends FormRequest
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
            'pack'=>'required|min:3|max:25|unique:packagings,pack,'.$this->id,
            'description'=>'required|min:3|max:255',
            'value'=>'required|numeric',
            'quota'=>'required|numeric'
        ];
    }
    public function messages()
    {
        return [
            'pack.require'=>'O nome da forma de embalagem é necessário.',
            'pack.min'=>'No mínimo devem ser passados 3 caracteres.',
            'pack.max'=>'No máximo são permitidos 25 caracteres.',
            'pack.unique'=>'Já existe uma forma de embalagem com esse nome.',
            'description.require'=>'A descrição é necessária.',
            'description.min'=>'No mínimo devem ser passados 3 caracteres.',
            'description.max'=>'No máximo são permitidos 255 caracteres.',
            'value.require'=>'O valor de custo é necessário.',
            'quota.require'=>'A proporção é necessária.'
        ];
    }
}
