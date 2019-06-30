<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DyeingsRequest extends FormRequest
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
            'class'=>'required|regex:/^[\w_]*$/|min:3|max:50|unique:dyeings,class,'.$this->id,
            'code' => 'required|regex:/^[A-Z]{3}/|min:3|max:3',
            'value'=>'required|numeric'
        ];
    }
    
    public function messages()
    {
        return [
            'class.required'=>'O nome da classificação é necessário.',
            'class.min'=>'Use pelo menos tres caracteres.',
            'class.max'=>'No máximo coloque 50 caracteres',
            'class.unique'=>'A denominação deve ser única,'. $this->class .' já existe e não pode haver repetição.',
            'code.required'=>'O código do acabamento é obrigatório.',
            'code.regex'=>'Devem ser usadas apenas 3 letras maiusculas.',
            'code.min'=>'No mínimo são 3 letras.',
            'code.max'=>'No máximo são 3 letras.',
            'value.required'=>'O valor do tingimento é necessário.',
            'value.numeric'=>'O valor deve conter apenas numeros.'
        ];
    }    
}
