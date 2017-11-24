<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RawmaterialRequest extends FormRequest
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
            'reference' => 'required|min:3|max:50|unique:rawmaterials,reference,'.$this->id,
            'value' => 'required|numericbr',
            'valueicms' => 'required|numericbr|greaterthan:value',
            'provider_cod' => 'nullable|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'basecomponent' => 'required|min:2|max:255',
            'cables' => 'required|integer',
            'dtex' => 'required|integer',
            'filaments' => 'required|integer',
            'finishing' => 'required|min:3|max:255'
        ];
    }
    
    public function messages()
    {
        return [
            'reference.required'=>'O nome da classificação é necessário.',
            'reference.min'=>'Use pelo menos tres caracteres.',
            'reference.max'=>'No máximo coloque 50 caracteres',
            'reference.unique'=>'A denominação da matéria-prima deve ser única,'. $this->reference .' já existe e não pode haver repetição.',
            'value.required'=>'O valor é necessário.',
            'value.numericbr'=>'O valor deve conter apenas numeros.',
            'valueicms.required'=>'O valor do tingimento é necessário.',
            'valueicms.numericbr'=>'O valor deve conter apenas numeros.',
            'valueicms.greaterthan'=>'O valor com ICMS deve ser maior que o valor SEM o ICMS.',
            'provider_cod.min'=>'Use pelo menos tres caracteres.',
            'provider_cod.max'=>'No máximo coloque 255 caracteres',
            'description.required'=>'A descrição é necessária.',
            'description.min'=>'Use pelo menos tres caracteres.',
            'description.max'=>'No máximo coloque 255 caracteres',
            'basecomponent.required'=>'A indicação do componente básico é necessária.',
            'basecomponent.min'=>'Use pelo menos tres caracteres.',
            'basecomponent.max'=>'No máximo coloque 255 caracteres',
            'cables.required'=>'A indicação do numero de cabos por fio é necessária.',
            'cables.integer'=>'Deve ser um numero inteiro.',
            'dtex.required'=>'A indicação do numero dtex é necessária.',
            'dtex.integer'=>'Deve ser um numero inteiro.',
            'filaments.required'=>'A indicação do numero de filamentos por cabo é necessária.',
            'filaments.integer'=>'Deve ser um numero inteiro.',
            'finishing.required'=>'A indicação de acabamento é necessária.',
            'finishing.min'=>'Use pelo menos tres caracteres.',
            'finishing.max'=>'No máximo coloque 255 caracteres'
        ];
    }    
}
