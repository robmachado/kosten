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
use App\Models\Packaging;

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
            <br/>
                <h3>Custos Indiretos</h3>
                <table>
                    <tbody>
                        <tr>
                            <td>Custos Operacionais</td><td align="right">R$ {{ custooperacional }}</td>
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
            <br/>
                <p><strong>Custo das Materias-primas (Fios)  (sem PIS/COFINS)</strong></p>
                <table>
                    <tbody>
                        <tr>
                            <td>MP1 {{ referencia1 }}: R$ {{ valor1 }} x {{ p1 }}%</td><td align="right"> = R$ {{ preco1 }}/kg</td>
                        </tr>
                        <tr>
                            <td>MP2 {{ referencia2 }}: R$ {{ valor2 }} x {{ p2 }}%</td><td align="right"> = R$  {{ preco2 }}/kg</td>
                        </tr>
                        <tr>
                            <td>MP3 {{ referencia3 }}: R$ {{ valor3 }} x {{ p3 }}%</td><td align="right"> = R$  {{ preco3 }}/kg</td>
                        </tr>                        
                        <tr>
                            <td>Custo FIOS</td><td align="right"><strong>R$ {{ precomp }}/kg</strong></td>
                        </tr>
                    </tbody>
                </table>
                <br/>
                <p><strong>Custo de Malharia (sem PIS/COFINS)</strong></p>
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
                <br/>
                <p><strong>Custo Tinturaria (sem PIS/COFINS)</strong></p>
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
                <br/>
                <p><strong>Custo de Embalagem (sem PI/COFINS)</strong></p>
                <table>
                    <tbody>
                        <tr>
                            <td>{{ pack }}: R$ {{ packvalue }}</td><td>Proporção por kg: {{ packquota }}%/kg</td>
                        </tr>
                        <tr>
                            <td>Sub-total: (R$ {{ custodir }} + R$ {{ custoembalagem }})</td><td align="right"> = <strong>R$ {{ custodirtotal }}/kg</strong></td>
                        </tr>
                    <tbody>
                </table>
                <br/>
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
                            <td>Custos Diretos</td><td align="right">R$ {{ custodirtotal }}/kg</td>
                        </tr>
                        <tr>
                            <td align="center">=</td>
                        </tr>
                        <tr>
                            <td>Custo de Produção = R$ {{ custoindireto }} + R$ {{ custodirtotal }}</td><td align="right"> =  <strong>R$ {{ custoprod }}/kg</strong></td>
                        </tr>    
                    <tbody>
                </table>
                <br/>
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
                <br/>
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
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>';
    
    public $pgtos = ['0', '15', '30', '45', '60'];
    
    public function index()
    {
        $dyes = DB::table('dyeings')->select('id','class')->orderBy('class')->pluck('class', 'id');
        $destinos = DB::table('destinations')->select('id','destination')->orderBy('id')->pluck('destination', 'id');
        $artigos = DB::table('boms')->select('id','article', 'description')->orderBy('article')->get();//->pluck('article','id');
        $package = DB::table('packagings')->select('id','pack')->orderBy('pack')->pluck('pack', 'id');
        return View::make('analise',compact(['dyes', 'destinos', 'artigos', 'package']));
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
        $embalagem_id = $request->embalagem;
        
        $artigo = Bom::findOrFail($artigo_id);
        $tingimento = Dyeing::findOrFail($tingimento_id);
        $destino = Destination::findOrFail($destino_id);
        $criterios = Criteria::findOrFail(1);
        //dd($criterios);
        $pack = Packaging::findOrFail($embalagem_id);
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
        $custoIndireto = ($criterios->operational + $criterios->financial) / $criterios->apportionment;
        
        $custoDireto = 0;
        if ($destino->icms == 0) {
            $v1 = $raw1->valueicms;
            $v2 = $raw2->valueicms;
            $v3 = $raw3->valueicms;
            //venda SP, usar os custos com ICMS
            $custoMP = $artigo->perc1 * $raw1->valueicms
                + $artigo->perc2 * $raw2->valueicms
                + $artigo->perc3 * $raw3->valueicms;
        } else {
            $v1 = $raw1->value;
            $v2 = $raw2->value;
            $v3 = $raw3->value;
            //venda !SP, usar os custos sem ICMS
            $custoMP = $artigo->perc1 * $raw1->value
                + $artigo->perc2 * $raw2->value
                + $artigo->perc3 * $raw3->value;
        }
        
        $custoMalha = ($custoMP + $malharia->price)/0.99; //1% de perda
        $losses = $artigo->losses;
        if ($tingimento->value == 0) {
            $losses = 0;
        }
        $custoDireto = ($custoMalha + $tingimento->value) / (1-$losses);
        $custoEmbalagem = $pack->value * $pack->quota;
        $custoDiretoTotal =  $custoDireto + $custoEmbalagem;
        
        $markup = $destino->icms
            + $criterios->profit 
            + $criterios->commission 
            + $criterios->ipi
            + $criterios->pis
            + $criterios->cofins
            + $criterios->csll
            + $criterios->ir;
        
        $custoTotal = ($custoDiretoTotal+$custoIndireto)/(1-$markup);
     
        $custo = [];
        foreach ($this->pgtos as $pgto) {
            $juros = (1 + $criterios->rate)**($pgto/30);
            $custoFinal = (float) $custoTotal * $juros;
            $custo[$pgto] = round($custoFinal, 2);
        }
            
        $std = new \stdClass();
        $std->article = $artigo->article;
        $std->operational = $criterios->operational;
        $std->financial = $criterios->financial;
        $std->apportionment = $criterios->apportionment;
        $std->raw1=$artigo->raw1;
        $std->raw2=$artigo->raw2;
        $std->raw3=$artigo->raw3;
        $std->v1 = $v1;
        $std->v2 = $v2;
        $std->v3 = $v3;
        $std->perc1 = $artigo->perc1;
        $std->perc2 = $artigo->perc2;
        $std->perc3 = $artigo->perc3;
        $std->custoMP = $custoMP;
        $std->knittings_cod = $artigo->knittings_cod;
        $std->price = $malharia->price;
        $std->custoMalha = $custoMalha;
        $std->class = $tingimento->class;
        $std->value = $tingimento->value;
        $std->losses = $losses;
        $std->custoDireto = $custoDireto;
        $std->pack = $pack->pack;
        $std->packvalue = $pack->value;
        $std->packquota = $pack->quota*100;
        $std->custoEmbalagem = $custoEmbalagem;
        $std->custoIndireto = $custoIndireto;
        $std->custoDiretoTotal = $custoDiretoTotal;
        $std->icms = $destino->icms;
        $std->ipi = $criterios->ipi;
        $std->pis = $criterios->pis;
        $std->cofins = $criterios->cofins;
        $std->csll = $criterios->csll;
        $std->ir = $criterios->ir;
        $std->commission = $criterios->commission;
        $std->profit = $criterios->profit;
        $std->markup = $markup;
        $std->custoTotal = $custoTotal;
        $explain = "";
        if (\Auth::check()) {
            $explain = $this->explain($std);
        }
        
        $tab = [
           'artigo' => $artigo->article,
           'descricao' => $artigo->description,
           'composition' => $artigo->composition,
           'custo' => $custo,
           'explain' => $explain
        ];
        $params = [
            'destino' => $destino->destination,
            'tingimento'=> $tingimento->class,
            'icms'=> $destino->icms,
            'markup' => $markup,
            'custoindireto' => $custoIndireto,
            'custodireto' => $custoDiretoTotal,
            'embalagem' => $pack->pack
        ];
        return View::make('retorno',compact(['params','tab']));
    }
    
    public function tabela(Request $request)
    {
        $pgtos = $this->pgtos;
        
        $tingimento_id = $request->tingimento;
        $destino_id  = $request->destino;
        $embalagem_id = $request->embalagem;
        
        $tingimento = Dyeing::findOrFail($tingimento_id);
        $destino = Destination::findOrFail($destino_id);
        $criterios = Criteria::findOrFail(1);
        $pack = Packaging::findOrFail($embalagem_id);
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
                    
                }
            }
            if (!empty($artigo->raw3)) {
                try {
                    $raw3 = RawMaterial::where('reference','=', $artigo->raw3)->firstOrFail();
                } catch (\Exception $e) {
                    
                }
            }
            
            $custoIndireto = (float) ($criterios->operational + $criterios->financial) / $criterios->apportionment;
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
                        
            $custoMalha = (float) ($custoMP + $malharia->price)/0.99; //1% de perda
            $losses = $artigo->losses;
            if ($tingimento->value == 0) {
                $losses = 0;
            }
            $custoDireto = (float) ($custoMalha + $tingimento->value) / (1-$losses);
            $custoEmbalagem = $pack->value * $pack->quota;
            $custoDiretoTotal =  $custoDireto + $custoEmbalagem;
            
            $markup = (float) $destino->icms
                + $criterios->profit 
                + $criterios->commission 
                + $criterios->ipi
                + $criterios->pis
                + $criterios->cofins
                + $criterios->csll
                + $criterios->ir;
                        
            $custoTotal = ($custoDiretoTotal+$custoIndireto)/(1-$markup);

            $custo = [];

            foreach ($pgtos as $pgto) {
                $juros = (1 + $criterios->rate)**($pgto/30);
                $custoFinal = (float) $custoTotal * $juros;
                $custo[$pgto] = round($custoFinal, 2);
            }

            $std = new \stdClass();
            $std->article = $artigo->article;
            $std->operational = $criterios->operational;
            $std->financial = $criterios->financial;
            $std->apportionment = $criterios->apportionment;
            $std->raw1=$artigo->raw1;
            $std->raw2=$artigo->raw2;
            $std->raw3=$artigo->raw3;
            $std->v1 = $v1;
            $std->v2 = $v2;
            $std->v3 = $v3;
            $std->perc1 = $artigo->perc1;
            $std->perc2 = $artigo->perc2;
            $std->perc3 = $artigo->perc3;
            $std->custoMP = $custoMP;
            $std->knittings_cod = $artigo->knittings_cod;
            $std->price = $malharia->price;
            $std->custoMalha = $custoMalha;
            $std->class = $tingimento->class;
            $std->value = $tingimento->value;
            $std->losses = $losses;
            $std->custoDireto = $custoDireto;
            $std->pack = $pack->pack;
            $std->packvalue = $pack->value;
            $std->packquota = $pack->quota*100;
            $std->custoEmbalagem = $custoEmbalagem;
            $std->custoIndireto = $custoIndireto;
            $std->custoDiretoTotal = $custoDiretoTotal;
            $std->icms = $destino->icms;
            $std->ipi = $criterios->ipi;
            $std->pis = $criterios->pis;
            $std->cofins = $criterios->cofins;
            $std->csll = $criterios->csll;
            $std->ir = $criterios->ir;
            $std->commission = $criterios->commission;
            $std->profit = $criterios->profit;
            $std->markup = $markup;
            $std->custoTotal = $custoTotal;
            $explain = "";
            if (\Auth::check()) {
                $explain = $this->explain($std);
            }
            $tab[] = [
                'artigo' => $artigo->article,
                'descricao' => $artigo->description,
                'composicao' => $artigo->composition,
                'custo' => $custo,
                'explain'=>$explain
            ];
        }
        $icms = $destino->icms*100;
        $params = [
            'destino' => $destino->destination,
            'tingimento'=>$tingimento->class,
            'icms'=>$icms,
            'embalagem' => $pack->pack
        ];
        return ['params'=>$params, 'tab'=>$tab];
    }
    
    protected function explain(\stdClass $std)
    {
        $tmp = str_replace('{{ artigo }}',$std->article,$this->template);
        $tmp = str_replace('{{ nome }}',$std->article,$tmp);
        $tmp = str_replace('{{ custooperacional }}',number_format($std->operational, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ custofinanceiro }}',number_format($std->financial, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ custoindiretototal }}',number_format($std->operational + $std->financial, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ rateio }}',number_format($std->apportionment, 0, ',', '.'),$tmp);
        $tmp = str_replace('{{ custoindireto }}',number_format(($std->operational + $std->financial)/$std->apportionment, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ referencia1 }}',$std->raw1,$tmp);
        $tmp = str_replace('{{ referencia2 }}',$std->raw2,$tmp);
        $tmp = str_replace('{{ referencia3 }}',$std->raw3,$tmp);
        $tmp = str_replace('{{ valor1 }}',number_format($std->v1, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ valor2 }}',number_format($std->v2, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ valor3 }}',number_format($std->v3, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ p1 }}',number_format($std->perc1 * 100, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ p2 }}',number_format($std->perc2 * 100, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ p3 }}',number_format($std->perc3 * 100, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ preco1 }}',number_format($std->perc1 * $std->v1, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ preco2 }}',number_format($std->perc2 * $std->v2, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ preco3 }}',number_format($std->perc3 * $std->v3, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ precomp }}',number_format($std->custoMP, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ cod }}',$std->knittings_cod,$tmp);
        $tmp = str_replace('{{ valorkni }}',number_format($std->price, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ mpmal }}',number_format($std->custoMalha, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ tipo }}',$std->class,$tmp);
        $tmp = str_replace('{{ valortint }}',number_format($std->value, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ losses }}',number_format($std->losses*100, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ custodir }}',number_format($std->custoDireto, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ pack }}',$std->pack,$tmp);
        $tmp = str_replace('{{ packvalue }}',number_format($std->packvalue, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ packquota }}',number_format($std->packquota, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ custoembalagem }}',number_format($std->custoEmbalagem, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ custodir }}',number_format($std->custoDireto, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ custoemb }}',number_format($std->custoEmbalagem, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ custodirtotal }}',number_format($std->custoDiretoTotal, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ custoprod }}',number_format($std->custoDiretoTotal + $std->custoIndireto, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ icms }}',number_format($std->icms*100, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ ipi }}',number_format($std->ipi*100, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ pis }}',number_format($std->pis*100, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ cofins }}',number_format($std->cofins*100, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ csll }}',number_format($std->csll*100, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ ir }}',number_format($std->ir*100, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ comiss }}',number_format($std->commission*100, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ lucro }}',number_format($std->profit*100, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ markup }}',number_format($std->markup*100, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ complementar }}',number_format((1-$std->markup)*100, 2, ',', '.'),$tmp);
        $tmp = str_replace('{{ final }}',number_format($std->custoTotal, 2, ',', '.'),$tmp);
        return $tmp;    
    }
    
    public function mpall()
    {
        //retornar custos diretos de fabricação para todos os produtos, com e sem ICMS nos FIOS
        //fios + malharia + tinturaria + embalagem
        //cod
        //mpcom
        //mpsem
        $tings = Dyeing::all();
        $tingimento = Dyeing::findOrFail(1);
        $criterios = Criteria::findOrFail(1);
        $pack = Packaging::findOrFail(3);
        $artigos = Bom::all();
        $resp = [];
        $tg = [];
        foreach ($tings as $t) {
            $tg[$t->class] = $t->value;
        }
        
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
                    
                }
            }
            if (!empty($artigo->raw3)) {
                try {
                    $raw3 = RawMaterial::where('reference','=', $artigo->raw3)->firstOrFail();
                } catch (\Exception $e) {
                    
                }
            }
            //venda SP, usar os custos com ICMS
            $custoMPcom = (float) $artigo->perc1 * $raw1->valueicms
                + $artigo->perc2 * $raw2->valueicms
                + $artigo->perc3 * $raw3->valueicms;
            
            //venda !SP, usar os custos sem ICMS
            $custoMPsem = (float) $artigo->perc1 * $raw1->value
                + $artigo->perc2 * $raw2->value
                + $artigo->perc3 * $raw3->value;
                        
            $custoMalhacom = (float) ($custoMPcom + $malharia->price)/0.99; //1% de perda
            $custoMalhasem = (float) ($custoMPsem + $malharia->price)/0.99; //1% de perda
            
            $custoDiretocom = (float) ($custoMalhacom + $tingimento->value) / (1-$artigo->losses);
            $custoDiretosem = (float) ($custoMalhasem + $tingimento->value) / (1-$artigo->losses);
            $custoEmbalagem = $pack->value * $pack->quota;
            $custoDiretoTotalcom =  $custoDiretocom + $custoEmbalagem;
            $custoDiretoTotalsem =  $custoDiretosem + $custoEmbalagem;
            $pv0 = $custoDiretoTotalcom;
            $pv7 = $custoDiretoTotalsem;
            $pv12 = $custoDiretoTotalsem;
            $resp[] = [
                'cod' => substr($artigo->article,0,4),
                'crawcom' => $custoMPcom,
                'crawsem' => $custoMPsem,
                'malha' => (float) $malharia->price,
                'perda' => 0.01,
                'cmalhcom' =>$custoMalhacom,
                'cmalhsem' =>$custoMalhasem,
                'cembalagem' => $custoEmbalagem,
                'ctint' => (float) $tingimento->value,
                'perdatint' => (float) $artigo->losses,
                'mpcom' => $custoDiretoTotalcom,
                'mpsem' => $custoDiretoTotalsem,
                'tg' => $tg
            ];
        }
        return $resp;
    }
}
