<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DestinationRequest extends FormRequest
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
            'destination' => 'required|min:3|max:25|unique:destinations,destination,'.$this->id,
            'icms' => ['required',new \App\Rules\NumericBR]
        ];
    }
    
    public function messages()
    {
        return [
            'destination.required'=>'O nome do destino é necessário.',
            'destination.min'=>'Use pelo menos tres caracteres.',
            'destination.max'=>'No máximo coloque 25 caracteres',
            'destination.unique'=>'A denominação do destino deve ser única,'. $this->destination .' já existe e não pode haver repetição.',
            'icms.required'=>'O valor do ICMS para o destino é necessário.'
        ];
    }
}
