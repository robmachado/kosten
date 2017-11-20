<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CriteriaRequest extends FormRequest
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
            'operational' => 'required|integer',
            'financial' => 'required|integer',
            'apportionment' => 'required|integer',
            'profit'=>['required',new \App\Rules\NumericBR],
            'commission'=>['required',new \App\Rules\NumericBR],
            'rate'=>['required',new \App\Rules\NumericBR],
            'ipi'=>['required',new \App\Rules\NumericBR],
            'pis'=>['required',new \App\Rules\NumericBR],
            'cofins'=>['required',new \App\Rules\NumericBR],
            'csll'=>['required',new \App\Rules\NumericBR],
            'ir'=>['required',new \App\Rules\NumericBR]
        ];
    }
    
    public function messages()
    {
        return [
            'operational.required'=>'O custo operacional é necessário.',
            'operational.integer'=>'O custo operacional é um numero inteiro.',
            'financial.required'=>'O custo financeiro é necessário.',
            'financial.integer'=>'O custo financeiro é um numero inteiro.',
            'apportionment.required'=>'A quantidade para o rateio é necessária.',
            'apportionment.integer'=>'A quantidade para o rateio é um numero inteiro.',
            'profit.required'=>'A margem de lucro é necessária.',
            'commission.required'=>'A margem de comissão é necessária.',
            'rate.required'=>'A taxa de juros para venda a prazo é necessária.',
            'ipi.required'=>'A aliquota de IPI é necessária.',
            'pis.required'=>'A aliquota de PIS é necessária.',
            'cofins.required'=>'A aliquota de COFINS é necessária.',
            'csll.required'=>'A aliquota de CSLL é necessária.',
            'ir.required'=>'A aliquota de IR é necessária.'
        ];
    }    
}
