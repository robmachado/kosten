<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Models\RawMaterial;
use App\Models\Bom;
use App\Http\Requests\RawmaterialRequest;
use DB;

class RawmaterialsController extends Controller
{
    public function index(Request $request)
    {
        return View::make('rawmaterials.index')        
            ->with('raws', RawMaterial::all());
    }

    public function create(Request $request)
    {
        return view('rawmaterials.add', [
            []
        ]);
    }

    public function edit(Request $request, $id)
    {
    	$rawmaterial = Rawmaterial::findOrFail($id);
        /*
        if (empty($rawmaterial->valueorigin)) {
            $rawmaterial->valueorigin = round($rawmaterial->valueicms/(1-0.0925),2);
            $rawmaterial->icms = round((($rawmaterial->valueicms - $rawmaterial->value)/$rawmaterial->valueorigin)*100,0);
        }
         * 
         */
        return view('rawmaterials.add', [
            'model' => $rawmaterial
        ]);
    }

    public function show(Request $request, $id)
    {
        $rawmaterial = Rawmaterial::findOrFail($id);
	return view('rawmaterials.show', [
	   'model' => $rawmaterial
        ]);
    }
    
    /*
    public function overprice(Request $request)
    {
        if(!$request->has('_token')) {
            $baselist = DB::table('rawmaterials')->select('basecomponent')->distinct()->orderBy('basecomponent')->pluck('basecomponent');
            return View::make('rawmaterials.overprice', compact(['baselist']));
        }
        $perc = (float) str_replace(',', '.', $request->percent);
        if ($perc > 0 && $perc < 2) {
            $sqlComm = "UPDATE rawmaterials SET value=value*" . $perc . ", valueicms=valueicms*" . $perc . " WHERE basecomponent='" . $request->basecom . "';";
            DB::statement($sqlComm);
        }
        return redirect()->route('rawmaterials.index');
    }
     * 
     */
    
    public function update(RawmaterialRequest $request)
    {
	$rawmaterial = null;
	if ($request->id > 0) {
            $rawmaterial = Rawmaterial::findOrFail($request->id);
            if ($rawmaterial->reference !== $request->reference) {
                //alterar os BOM
                $b = Bom::where('raw1', '=', $rawmaterial->reference)->update(['raw1' => $request->reference]);
                $b = Bom::where('raw2', '=', $rawmaterial->reference)->update(['raw2' => $request->reference]);
                $b = Bom::where('raw3', '=', $rawmaterial->reference)->update(['raw3' => $request->reference]);
            }
        } else { 
            $rawmaterial = new Rawmaterial;
	}
        $rawmaterial->id = $request->id ? : 0;
        $rawmaterial->reference = $request->reference;
        $rawmaterial->valueorigin = $request->valueorigin;
        $rawmaterial->icms = $request->icms;
        //$rawmaterial->value = $request->value;
        //$rawmaterial->valueicms = $request->valueicms;
        $rawmaterial->provider_cod = !empty($request->provider_cod) ? $request->provider_cod : '';
        $rawmaterial->description = !empty($request->description) ? $request->description : '';
        $rawmaterial->basecomponent = !empty($request->basecomponent) ? $request->basecomponent : '';
        $rawmaterial->cables = !empty($request->cables) ? $request->cables : 0;
        $rawmaterial->dtex = !empty($request->dtex) ? $request->dtex : 0;
        $rawmaterial->filaments = !empty($request->filaments) ? $request->filaments : 0;
        $rawmaterial->finishing = !empty($request->finishing) ? $request->finishing : '';
        $rawmaterial->save();
        
        return redirect('/rawmaterials');
    }

    public function store(RawmaterialRequest $request)
    {
	return $this->update($request);
    }

    public function destroy(Request $request, $id)
    {
	$rawmaterial = Rawmaterial::findOrFail($id);
	$rawmaterial->delete();
	session()->flash('success', 'Registro removido!');
	return back();
    }
}