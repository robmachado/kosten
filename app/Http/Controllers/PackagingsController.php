<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Packaging;
use Illuminate\Support\Facades\View;
use DB;

class PackagingsController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(Request $request)
    {
        return View::make('packagings.index')        
            ->with('pack', Packaging::all());
    }

    public function create(Request $request)
    {
        return view('packagings.add', [
            []
        ]);
    }

    public function edit(Request $request, $id)
    {
        $pack = Packaging::findOrFail($id);
        return view('packagings.add', [
            'model' => $pack
        ]);
    }
    
    public function show(Request $request, $id)
    {
        $pack = Packaging::findOrFail($id);
	return view('packagings.show', [
            'model' => $pack
        ]);
    }

    public function update(Request $request)
    {
	$pack = null;
	if( $request->id > 0 ) {
            $pack = Packaging::findOrFail($request->id);
        } else { 
            $pack = new Packaging;
	}
        $pack->id = $request->id ? : 0;
        $pack->pack = $request->pack;
        $pack->description = $request->description;
        $pack->value = $request->value;
        $pack->quota = $request->quota;
        $pack->save();
        return redirect('/packagings');
    }

    public function store(Request $request)
    {
        return $this->update($request);
    }
    
    public function delete(Request $request, $id) {
        $this->destroy($request, $id);
    }

    public function destroy(Request $request, $id)
    {
    	$pack = Packaging::findOrFail($id);
	$pack->delete();
        session()->flash('success', 'Registro removido!');
	return back();
    }
}