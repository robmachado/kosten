<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use DB;
use App\Models\Bom;
use App\Models\RawMaterial;
use App\Models\Destination;
use App\Models\Criteria;
use App\Models\Dyeing;
use App\Models\Knitting;

class AnaliseController extends Controller
{
    public $template = '<div class="modal fade" id="{{ nome }}" tabindex="-1" role="dialog" aria-labelledby="{{ nome }}">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" id="myModalLabel">{{ artigo }}</h2>
        </div>
        <div class="modal-body">
            <h2>Detalhamento de Calculo</h2>
                <h3>Custos Indiretos</h3>
                <table>
                    <tbody>
                        <tr>
                            <td>Custos Operacionais</td><td align="right">R$ {{ custooperacioal }}</td>
                        </tr>
                    <tr>
                        <td align="center">+</td>
                    </tr>
                    <tr>
                        <td>Custos Financeiros</td><td align="right">R$ {{ custofinanceiro }}</td>
                    </tr>
                    <tr>
                        <td align="center">=</td>
                    </tr>    
                    <tr>
                        <td>Sub-total</td><td align="right">R$ {{ custoindiretototal }}</td>  
                    </tr>
                    <tr>
                        <td>Forma de Rateio (Média de produção mensal em kg)</td>
                    </tr> 
                    <tr>
                        <td>Rateio</td><td align="right">{{ rateio }} kg</td>
                    </tr>
                    <tr>
                        <td>Custo indireto (por kg): R$ {{ custoindiretototal }} / {{ rateio }} kg</td><td align="right"> =  <strong>R$ {{ custoindireto }}/kg</strong></td>
                    </tr>
                </tbody>
            </table>
            <h3>Custos Diretos</h3>
                <p><strong>Custo das Materias-primas(Fios)</strong></p>
                <table>
                    <tbody>
                        <tr>
                            <td>MP1 {{ referencia1 }}: R$ {{ valor1 }} * {{ p1 }}%</td><td align="right"> = R$ {{ preco1 }}/kg</td>
                        </tr>
                        <tr>
                            <td>MP2 {{ referencia2 }}: R$ {{ valor2 }} * {{ p2 }}%</td><td align="right"> = R$  {{ preco2 }}/kg</td>
                        </tr>
                        <tr>
                            <td>MP3 {{ referencia3 }}: R$ {{ valor3 }} * {{ p3 }}%</td><td align="right"> = R$  {{ preco3 }}/kg</td>
                        </tr>                        
                        <tr>
                            <td>Custo FIOS</td><td align="right"><strong>R$ {{ precomp }}/kg</strong></td>
                        </tr>
                    </tbody>
                </table>
                <p><strong>Custo de Malharia</strong></p>
                <table>
                    <tbody>
                        <tr>
                            <td>Malharia {{ cod }}: R$ {{ valorkni }}/kg</td><td>Perda em malharia: 1%</td>
                        </tr>
                        <tr>
                            <td>Sub-total: (R$ {{ precomp }} + R$ {{ valorkni }})/(100% - 1%)</td><td align="right"> = <strong>R$ {{ mpmal }}/kg</strong></td> 
                        </tr>    
                    <tbody>
                </table>
                <p><strong>Custo Tinturaria</strong></p>
                <table>
                    <tbody>
                        <tr>
                            <td>{{ tipo }}: R$ {{ valortint }}/kg</td><td>Perda Tinturaria: {{ losses }}%</td>
                        </tr>
                        <tr>
                            <td>Sub-total: (R$ {{ mpmal }} + R$ {{ valortint }}) / (100% - {{ losses }}%)</td><td align="right"> = <strong>R$ {{ custodir }}/kg</strong></td>
                        </tr>
                    <tbody>
                </table>
                <h3>Custo de Produção</h3>
                <table>
                    <tbody>
                        <tr>
                            <td>Custos Indiretos</td><td align="right">R$ {{ custoindireto }}/kg</td>
                        </tr>
                        <tr>
                            <td align="center">+</td>
                        </tr>
                        <tr>
                            <td>Custos Diretos</td><td align="right">R$ {{ custodir }}/kg</td>
                        </tr>
                        <tr>
                            <td align="center">=</td>
                        </tr>
                        <tr>
                            <td>Custo de Produção = R$ {{ custoindireto }} + R$ {{ custodir }}</td><td align="right"> =  <strong>R$ {{ custoprod }}/kg</strong></td>
                        </tr>    
                    <tbody>
                </table>
                <h3>Markup (Impostos e outras inclusões)</h3>
                <table>
                    <tbody>
                        <tr>
                            <td>ICMS</td><td align="right">{{ icms }}%</td>
                        </tr>
                        <tr>
                            <td>IPI</td><td align="right">{{ ipi }}%</td>
                        </tr>
                        <tr>
                            <td>PIS</td><td align="right">{{ pis }}%</td>	
                        </tr>
                        <tr>
                            <td>CONFINS</td><td align="right">{{ cofins }}%</td>
                        </tr>
                        <tr>
                            <td>CSLL</td><td align="right">{{ csll }}%</td>
                        </tr>
                        <tr>
                            <td>IR</td><td align="right">{{ ir }}%</td>
                        </tr>
                        <tr>
                            <td>Comissão</td><td align="right">{{ comiss }}%</td>
                        </tr>
                        <tr>
                            <td>Lucro</td><td align="right">{{ lucro }}%</td>
                        </tr>    
                    <tbody>
                </table>
                <p><strong>Markup:  {{ icms }}% + {{ ipi }}% + {{ pis }}% + {{ cofins }}% + {{ csll }}% + {{ ir }}% + {{ comiss }}% + {{ lucro }}% = {{ markup }}%</strong></p>
                <h3>Preço de Venda (a vista)</h3> 
                <table>
                    <tbody>
                        <tr>
                            <td>Custo de Produção</td><td>R$ {{ custoprod }}/kg</td>
                        </tr>
                        <tr>
                            <td align="center">/</td>
                        </tr>
                        <tr>
                            <td>Complementer markup: (100% - {{ markup }}%)</td><td align="right"> =  {{ complementar }}%</td>
                        <tr>    
                            <td align="center">=</td>
                        </tr>
                    <tbody>
                </table>
                <h3>Preço de Venda (a vista): R$ {{ final }}/kg</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>';
    
    public function index()
    {
        $dyes = DB::table('dyeings')->select('id','class')->orderBy('class')->pluck('class', 'id');
        $destinos = DB::table('destinations')->select('id','destination')->orderBy('id')->pluck('destination', 'id');
        $artigos = DB::table('boms')->select('id','article')->orderBy('article')->pluck('article', 'id');
        return View::make('analise',compact(['dyes', 'destinos', 'artigos']));
    }
    
    public function calcular(Request $request)
    {
        if ($request->tabela) {
            $ret = $this->tabela($request);
            $params = $ret['params'];
            $tab = $ret['tab'];
            return View::make('tabela',compact(['params','tab']));
        }
        $artigo_id = $request->artigo;
        $tingimento_id = $request->tingimento;
        $destino_id  = $request->destino;
        $pagamento = $request->pagamento;
        
        
        $artigo = Bom::findOrFail($artigo_id);
        $tingimento = Dyeing::findOrFail($tingimento_id);
        $destino = Destination::findOrFail($destino_id);
        $criterios = Criteria::findOrFail(1);
        $malharia = Knitting::where('cod','=', $artigo->knittings_cod)->firstOrFail();
        
        $raw1 = RawMaterial::where('reference','=', $artigo->raw1)->firstOrFail();
        $raw2 = new \stdClass();
        $raw2->value = 0;
        $raw2->valueicms = 0;
        $raw3 = new \stdClass();
        $raw3->value = 0;
        $raw3->valueicms = 0;
        if (!empty($artigo->raw2)) {
            $raw2 = RawMaterial::where('reference','=', $artigo->raw2)->firstOrFail();
        }
        if (!empty($artigo->raw3)) {
            $raw3 = RawMaterial::where('reference','=', $artigo->raw3)->firstOrFail();
        }
        $custoIndireto = ($criterios->operational_cost + $criterios->financial_cost) / $criterios->apportionment;
        
        $custoDireto = 0;
        if ($destino->icms == 0) {
            //venda SP, usar os custos com ICMS
            $custoMP = $artigo->perc1 * $raw1->valueicms
                + $artigo->perc2 * $raw2->valueicms
                + $artigo->perc3 * $raw3->valueicms;
        } else {
            //venda !SP, usar os custos sem ICMS
            $custoMP = $artigo->perc1 * $raw1->value
                + $artigo->perc2 * $raw2->value
                + $artigo->perc3 * $raw3->value;
        }
        
        $custoMalha = ($custoMP + $malharia->price)/0.99; //1% de perda
        
        $custoDireto = ($custoMalha + $tingimento->value) / (1-$artigo->losses);
        
        $markup = $destino->icms
            + $criterios->profit 
            + $criterios->commission 
            + $criterios->ipi
            + $criterios->pis
            + $criterios->cofins
            + $criterios->csll
            + $criterios->ir;
        
        $custoTotal = ($custoDireto+$custoIndireto)/(1-$markup);
        $juros = (1 + $criterios->financial_rate)**($request->pagamento/30);
        $custoFinal = (float) $custoTotal * $juros;
        $j = ($juros-1)*100;
        $perda = $artigo->losses*100;
        $icms = $destino->icms*100;
        $custo = [
            'ci'=>$custoIndireto,
            'cm'=> $custoMalha,
            'cd'=>$custoDireto,
            'mup'=>$markup,
            'ct'=>$custoTotal,
            'cf'=> $custoFinal,
            'perda'=>$perda,
            'juros'=>$j,
            'icms'=>$icms
        ];
        $tab[] = [
           'artigo' => $artigo->article,
           'descricao' => $artigo->description,
           'composition' => $artigo->composition,
           'custo' => $custo
        ];
        $params = [
            'destino' => $destino->destination,
            'tingimento'=>$tingimento->class,
            'icms'=>$icms
        ];
        return View::make('retorno',compact(['params','tab']));
        
    }
    
    public function tabela(Request $request)
    {
        $pgtos = ['0', '15', '30', '45', '60'];
        
        $tingimento_id = $request->tingimento;
        $destino_id  = $request->destino;
        $tingimento = Dyeing::findOrFail($tingimento_id);
        $destino = Destination::findOrFail($destino_id);
        $criterios = Criteria::findOrFail(1);
        $artigos = Bom::all();
        
        foreach ($artigos as $artigo) {
            
            $malharia = Knitting::where('cod','=', $artigo->knittings_cod)->firstOrFail();
            //$raw1 = RawMaterial::where('reference','=', $artigo->raw1)->firstOrFail();
            try {
                $raw1 = RawMaterial::where('reference','=', $artigo->raw1)->firstOrFail();
            } catch (\Exception $e) {
                
            }
            $raw2 = new \stdClass();
            $raw2->value = 0;
            $raw2->valueicms = 0;
            $raw3 = new \stdClass();
            $raw3->value = 0;
            $raw3->valueicms = 0;
            if (!empty($artigo->raw2)) {
                try {
                    $raw2 = RawMaterial::where('reference','=', $artigo->raw2)->firstOrFail();
                } catch (\Exception $e) {
                    dd($artigo->article.'' .$artigo->raw2 .'<br>');
                }
            }
            if (!empty($artigo->raw3)) {
                try {
                    $raw3 = RawMaterial::where('reference','=', $artigo->raw3)->firstOrFail();
                } catch (\Exception $e) {
                    dd($artigo->article.'' .$artigo->raw3 .'<br>');
                }
            }
            $tmp = str_replace('{{ artigo }}',$artigo->article,$this->template);
            $tmp = str_replace('{{ nome }}',$artigo->article,$tmp);
            $tmp = str_replace('{{ custooperacioal }}',number_format($criterios->operational_cost, 2, ',', '.'),$tmp);
            $tmp = str_replace('{{ custofinanceiro }}',number_format($criterios->financial_cost, 2, ',', '.'),$tmp);
            $tmp = str_replace('{{ custoindiretototal }}',number_format($criterios->operational_cost + $criterios->financial_cost, 2, ',', '.'),$tmp);
            $tmp = str_replace('{{ rateio }}',number_format($criterios->apportionment, 0, ',', '.'),$tmp);
            $tmp = str_replace('{{ custoindireto }}',number_format(($criterios->operational_cost + $criterios->financial_cost)/$criterios->apportionment, 2, ',', '.'),$tmp);
            
            $custoIndireto = (float) ($criterios->operational_cost + $criterios->financial_cost) / $criterios->apportionment;
            $custoDireto = 0;
            if ($destino->icms == 0) {
                $v1 = $raw1->valueicms;
                $v2 = $raw2->valueicms;
                $v3 = $raw3->valueicms;
                //venda SP, usar os custos com ICMS
                $custoMP = (float) $artigo->perc1 * $raw1->valueicms
                    + $artigo->perc2 * $raw2->valueicms
                    + $artigo->perc3 * $raw3->valueicms;
            } else {
                $v1 = $raw1->value;
                $v2 = $raw2->value;
                $v3 = $raw3->value;
                //venda !SP, usar os custos sem ICMS
                $custoMP = (float) $artigo->perc1 * $raw1->value
                    + $artigo->perc2 * $raw2->value
                    + $artigo->perc3 * $raw3->value;
            }
            $tmp = str_replace('{{ referencia1 }}',$artigo->raw1,$tmp);
            $tmp = str_replace('{{ referencia2 }}',$artigo->raw2,$tmp);
            $tmp = str_replace('{{ referencia3 }}',$artigo->raw2,$tmp);
            $tmp = str_replace('{{ valor1 }}',number_format($v1, 2, ',', '.'),$tmp);
            $tmp = str_replace('{{ valor2 }}',number_format($v2, 2, ',', '.'),$tmp);
            $tmp = str_replace('{{ valor3 }}',number_format($v3, 2, ',', '.'),$tmp);
            $tmp = str_replace('{{ p1 }}',number_format($artigo->perc1 * 100, 2, ',', '.'),$tmp);
            $tmp = str_replace('{{ p2 }}',number_format($artigo->perc2 * 100, 2, ',', '.'),$tmp);
            $tmp = str_replace('{{ p3 }}',number_format($artigo->perc3 * 100, 2, ',', '.'),$tmp);
            $tmp = str_replace('{{ preco1 }}',number_format($artigo->perc1 * $v1, 2, ',', '.'),$tmp);
            $tmp = str_replace('{{ preco2 }}',number_format($artigo->perc2 * $v2, 2, ',', '.'),$tmp);
            $tmp = str_replace('{{ preco3 }}',number_format($artigo->perc3 * $v3, 2, ',', '.'),$tmp);
            $tmp = str_replace('{{ precomp }}',number_format($custoMP, 2, ',', '.'),$tmp);
            $tmp = str_replace('{{ cod }}',$artigo->knittings_cod,$tmp);
            $tmp = str_replace('{{ valorkni }}',number_format($malharia->price, 2, ',', '.'),$tmp);
            
            $custoMalha = (float) ($custoMP + $malharia->price)/0.99; //1% de perda
            $custoDireto = (float) ($custoMalha + $tingimento->value) / (1-$artigo->losses);
            
            $tmp = str_replace('{{ mpmal }}',number_format($custoMalha, 2, ',', '.'),$tmp);
            $tmp = str_replace('{{ tipo }}',$tingimento->class,$tmp);
            $tmp = str_replace('{{ valortint }}',number_format($tingimento->value, 2, ',', '.'),$tmp);
            $tmp = str_replace('{{ losses }}',number_format($artigo->losses*100, 2, ',', '.'),$tmp);
            $tmp = str_replace('{{ custodir }}',number_format($custoDireto, 2, ',', '.'),$tmp);
            $tmp = str_replace('{{ custoprod }}',number_format($custoDireto+$custoIndireto, 2, ',', '.'),$tmp);
            
            $tmp = str_replace('{{ icms }}',number_format($destino->icms*100, 2, ',', '.'),$tmp);
            $tmp = str_replace('{{ ipi }}',number_format($criterios->ipi*100, 2, ',', '.'),$tmp);
            $tmp = str_replace('{{ pis }}',number_format($criterios->pis*100, 2, ',', '.'),$tmp);
            $tmp = str_replace('{{ cofins }}',number_format($criterios->cofins*100, 2, ',', '.'),$tmp);
            $tmp = str_replace('{{ csll }}',number_format($criterios->csll*100, 2, ',', '.'),$tmp);
            $tmp = str_replace('{{ ir }}',number_format($criterios->ir*100, 2, ',', '.'),$tmp);
            $tmp = str_replace('{{ comiss }}',number_format($criterios->commission*100, 2, ',', '.'),$tmp);
            $tmp = str_replace('{{ lucro }}',number_format($criterios->profit*100, 2, ',', '.'),$tmp);
            
            
            $markup = (float) $destino->icms
                + $criterios->profit 
                + $criterios->commission 
                + $criterios->ipi
                + $criterios->pis
                + $criterios->cofins
                + $criterios->csll
                + $criterios->ir;
            
            $tmp = str_replace('{{ markup }}',number_format($markup*100, 2, ',', '.'),$tmp);
            $tmp = str_replace('{{ complementar }}',number_format((1-$markup)*100, 2, ',', '.'),$tmp);
            
            $custoTotal = ($custoDireto+$custoIndireto)/(1-$markup);
            $tmp = str_replace('{{ final }}',number_format($custoTotal, 2, ',', '.'),$tmp);

            $custo = [];
            foreach ($pgtos as $pgto) {
                $juros = (1 + $criterios->financial_rate)**($pgto/30);
                $custoFinal = (float) $custoTotal * $juros;
                $custo[$pgto] = round($custoFinal, 2);
            }
            $tab[] = [
                'artigo' => $artigo->article,
                'descricao' => $artigo->description,
                'composicao' => $artigo->composition,
                'custo' => $custo,
                'explain'=>$tmp
            ];
        }
        $icms = $destino->icms*100;
        $params = [
            'destino' => $destino->destination,
            'tingimento'=>$tingimento->class,
            'icms'=>$icms
        ];
        return ['params'=>$params, 'tab'=>$tab];
    }
}
