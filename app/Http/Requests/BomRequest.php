<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BomRequest extends FormRequest
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
            'article'=>'required|min:4|max:10|unique:boms,article,'.$this->id,
            'description'=>'required|min:4|max:255',
            'composition'=>'required|min:4|max:255',
            'knittings_cod'=>'required|exists:knittings,cod',
            'raw1' => 'required|exists:rawmaterials,reference',
            'raw2' => 'nullable|exists:rawmaterials,reference',
            'raw3' => 'nullable|exists:rawmaterials,reference',
            'perc1'=>'required|numericbr',
            'perc2'=>'required_with:raw2|numericbr',
            'perc3'=>'required_with:raw3|numericbr',
            'losses'=>'required|numericbr'
        ];
    }
    
    public function messages()
    {
        return [
            'article.required'=>'O codigo do artigo é necessário.',
            'article.min'=>'Use pelo menos quatro caracteres.',
            'article.max'=>'No máximo coloque 10 caracteres',
            'article.unique'=>'A artigo deve ser único,'. $this->article .' já existe e não pode haver repetição.',
            'description.required'=>'A descrição é necessária.',
            'composition.required'=>'A composição é necessária.',
            'knittings_cod.required'=>'O codigo de malharia é necessário.',
            'knittings_cod.exists'=>'O codigo de malharia deve estar cadastrado.',
            'raw1.required'=>'A materia prima deve ser indicada.',
            'raw1.exists'=>'A materia prima deve estar cadastrada.',
            'raw2.exists'=>'A materia prima deve estar cadastrada.',
            'raw2.exists'=>'A materia prima deve estar cadastrada.',
            'perc1.required'=>'A proporção de material deve ser indicada.',
            'perc2.required_with'=>'A proporção de material deve ser indicada.',
            'perc3.required_with'=>'A proporção de material deve ser indicada.'
        ];
    }
}
