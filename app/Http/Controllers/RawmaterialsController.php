<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\Models\RawMaterial;
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

    public function update(Request $request)
    {
	$rawmaterial = null;
	if ($request->id > 0) {
            $rawmaterial = Rawmaterial::findOrFail($request->id);
        } else { 
            $rawmaterial = new Rawmaterial;
	}
        $rawmaterial->id = $request->id ? : 0;
        $rawmaterial->reference = $request->reference;
        $rawmaterial->value = (float) str_replace(',', '.', $request->value);
        $rawmaterial->valueicms = (float) str_replace(',', '.', $request->value_icms);
        $rawmaterial->provider_cod = !empty($request->provider_cod) ? $request->provider_cod : '';
        $rawmaterial->description = !empty($request->description) ? $request->description : '';
        $rawmaterial->basecomponent = !empty($request->base_component) ? $request->base_component : '';
        $rawmaterial->cables = !empty($request->cables) ? $request->cables : 0;
        $rawmaterial->dtex = !empty($request->dtex) ? $request->dtex : 0;
        $rawmaterial->filaments = !empty($request->filaments) ? $request->filaments : 0;
        $rawmaterial->finishing = !empty($request->finishing) ? $request->finishing : '';
        $rawmaterial->save();
        return redirect('/rawmaterials');
    }

    public function store(Request $request)
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