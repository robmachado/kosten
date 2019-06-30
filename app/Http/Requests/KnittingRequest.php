<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KnittingRequest extends FormRequest
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
            'cod'=>'required|min:3|max:10|unique:knittings,cod,'.$this->id,
            'description'=>'nullable|string|min:0|max:255',
            'price'=>'required|numeric'
        ];
    }
    
    public function messages()
    {
        return [
            'cod.required'=>'O codigo de malharia é necessário.',
            'cod.min'=>'Use pelo menos tres caracteres.',
            'cod.max'=>'No máximo coloque 10 caracteres',
            'cod.unique'=>'A denominação da malharia deve ser única,'. $this->cod .' já existe e não pode haver repetição.',
            'description.max'=>'No máximo coloque 255 caracteres.',
            'price.required'=>'O preço do serviço é necessário.',
            'price.numeric'=>'O valor deve conter apenas numeros.'
        ];
    }    
}
