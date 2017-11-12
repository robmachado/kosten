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
            $custoIndireto = (float) ($criterios->operational_cost + $criterios->financial_cost) / $criterios->apportionment;
            $custoDireto = 0;
            if ($destino->icms == 0) {
                //venda SP, usar os custos com ICMS
                $custoMP = (float) $artigo->perc1 * $raw1->valueicms
                    + $artigo->perc2 * $raw2->valueicms
                    + $artigo->perc3 * $raw3->valueicms;
            } else {
                //venda !SP, usar os custos sem ICMS
                $custoMP = (float) $artigo->perc1 * $raw1->value
                    + $artigo->perc2 * $raw2->value
                    + $artigo->perc3 * $raw3->value;
            }
            
            $custoMalha = (float) ($custoMP + $malharia->price)/0.99; //1% de perda
            $custoDireto = (float) ($custoMalha + $tingimento->value) / (1-$artigo->losses);
            $markup = (float) $destino->icms
                + $criterios->profit 
                + $criterios->commission 
                + $criterios->ipi
                + $criterios->pis
                + $criterios->cofins
                + $criterios->csll
                + $criterios->ir;
            
            $custoTotal = ($custoDireto+$custoIndireto)/(1-$markup);
            $custo = [];
            foreach ($pgtos as $pgto) {
                $custoTotal = ($custoDireto+$custoIndireto)/(1-$markup);
                $juros = (1 + $criterios->financial_rate)**($pgto/30);
                $custoFinal = (float) $custoTotal * $juros;
                $custo[$pgto] = round($custoFinal, 2);
            }
            
            $tab[] = [
                'artigo' => $artigo->article,
                'descricao' => $artigo->description,
                'composicao' => $artigo->composition,
                'custo' => $custo
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
