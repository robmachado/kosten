<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Bom;
use App\Models\RawMaterial;
use App\Http\Requests\BomRequest;
use Illuminate\Support\Facades\View;
use DB;

class BomsController extends Controller
{
    public function index(Request $request)
    {
        return View::make('boms.index')        
            ->with('boms', Bom::all());
    }

    public function create(Request $request)
    {
        $raws = DB::table('rawmaterials')->select('id','reference')->orderBy('reference')->pluck('reference', 'id');
        $knits = DB::table('knittings')->select('id','cod')->orderBy('cod')->pluck('cod', 'id');
        return view('boms.add', [
            '' => [], 'raws' => $raws,'knits' => $knits
        ]);
    }

    public function edit(Request $request, $id)
    {
        $raws = DB::table('rawmaterials')->select('id','reference')->orderBy('reference')->pluck('reference', 'id');
        $knits = DB::table('knittings')->select('id','cod')->orderBy('cod')->pluck('cod', 'id');
	$bom = Bom::findOrFail($id);
        return view('boms.add', [
            'model' => $bom, 'raws' => $raws, 'knits' => $knits
        ]);
    }

    public function show(Request $request, $id)
    {
	$bom = Bom::findOrFail($id);
        return view('boms.show', [
            'model' => $bom
        ]);
    }

    public function update(BomRequest $request)
    {
	$bom = null;
	if ( $request->id > 0 ) {
            $bom = Bom::findOrFail($request->id);
        } else {
            $bom = new Bom;
	}
        $p1 = !empty($request->perc1) ? str_replace(',','.',$request->perc1) : 0.00;
        $p2 = !empty($request->perc2) ? str_replace(',','.',$request->perc2) : 0.00;
        $p3 = !empty($request->perc3) ? str_replace(',','.',$request->perc3) : 0.00;
        $p = $p1+$p2+$p3;
        if ($p != 100.0) {
            return redirect()->back()->withErrors(['As quantidades não correspondem a 100%, verifique as percentagens usadas.']);
        }
        $bom->id = $request->id?:0;
	$bom->article = $request->article;
	$bom->description = $request->description;
	$bom->composition = $request->composition;
	$bom->knittings_cod = $request->knittings_cod;
	$bom->raw1 = $request->raw1;
	$bom->raw2 = $request->raw2;
	$bom->raw3 = $request->raw3;
	$bom->perc1 = $request->perc1;
        $bom->perc2 = $request->perc2;
	$bom->perc3 = $request->perc3;
	$bom->losses = $request->losses;
        try {
            $bom->save();
        } catch (\Illuminate\Database\QueryException $e) {
            $error_code = $e->errorInfo[1];
            if ($error_code == 1062){
                return redirect()->back()->withErrors(["Esse codigo [$bom->article] já existe."]);
            }
        }    
        return redirect('/boms');
    }

    public function store(BomRequest $request)
    {
	return $this->update($request);
    }

    public function destroy(Request $request, $id)
    {
	$bom = Bom::findOrFail($id);
	$bom->delete();
        session()->flash('success', 'Registro removido!');
	return back();
    }
}