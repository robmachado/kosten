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
        $rules = [
            'cod' => 'required|min:3|max:10',
            'description'=>'nullable|min:3',
            'price'=> ['required',new \App\Rules\NumericBR]
        ];
    }
    
    public function messages()
    {
        return [
            'cod.required'=>'O campo codigo é necessário.',
            'cod.unique'=>'O codigo deve ser único,'. $this->cod .' já existe e não pode haver repetição.',
            'cod.min'=>'O codigo deve ter no mínimo 3 caracteres.',
            'cod.max'=>'O codigo pode ter no máximo 10 caracteres.',
            'price.required'=>'O preço do serviço é obrigatório.',
            'description.min'=>'Pelo menos 3 caracteres'
        ];
    }
}
