<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Dyeing;
use App\Http\Requests\DyeingsRequest;
use Illuminate\Support\Facades\View;
use DB;

class DyeingsController extends Controller
{
    public function index(Request $request)
    {
        return View::make('dyeings.index')        
            ->with('dyes', Dyeing::all());
    }

    public function create(Request $request)
    {
        return view('dyeings.add', [
            []
        ]);
    }

    public function edit(Request $request, $id)
    {
        $dyeing = Dyeing::findOrFail($id);
        return view('dyeings.add', [
            'model' => $dyeing
        ]);
    }
    
    public function show(Request $request, $id)
    {
        $dyeing = Dyeing::findOrFail($id);
	return view('dyeings.show', [
            'model' => $dyeing
        ]);
    }

    public function update(DyeingsRequest $request)
    {
	$dyeing = null;
	if( $request->id > 0 ) {
            $dyeing = Dyeing::findOrFail($request->id);
        } else { 
            $dyeing = new Dyeing;
	}
        $dyeing->id = $request->id ? : 0;
        $dyeing->class = trim($request->class);
        $dyeing->value = str_replace(',','.',$request->value);
        $dyeing->save();
        return redirect('/dyeings');
    }

    public function store(DyeingsRequest $request)
    {
        return $this->update($request);
    }
    
    public function delete(Request $request, $id) {
        $this->destroy($request, $id);
    }

    public function destroy(Request $request, $id)
    {
    	$dyeing = Dyeing::findOrFail($id);
	$dyeing->delete();
	session()->flash('success', 'Registro removido!');
	return back();
    }
}