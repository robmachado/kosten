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
            'operational' => 'required|numeric',
            'financial' => 'required|numeric',
            'apportionment' => 'required|integer',
            'profit'=>'required|numeric',
            'commission'=>'required|numeric',
            'rate'=>'required|numeric',
            'ipi'=>'required|numeric',
            'pis'=>'required|numeric',
            'cofins'=>'required|numeric',
            'csll'=>'required|numeric',
            'ir'=>'required|numeric'
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
