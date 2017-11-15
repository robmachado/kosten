<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Knitting;
use Illuminate\Support\Facades\View;
use DB;

class KnittingsController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(Request $request)
    {
        return View::make('knittings.index')        
            ->with('knittings', Knitting::all());
    }

    public function create(Request $request)
    {
        return view('knittings.add', [
            []
        ]);
    }

    public function edit(Request $request, $id)
    {
    	$knitting = Knitting::findOrFail($id);
        return view('knittings.add', [
            'model' => $knitting
        ]);
    }

    public function show(Request $request, $id)
    {
    	$knitting = Knitting::findOrFail($id);
        return view('knittings.show', [
            'model' => $knitting
        ]);
    }

    public function update(Request $request)
    {
	$knitting = null;
	if ($request->id > 0) {
            $knitting = Knitting::findOrFail($request->id);
        } else { 
            $knitting = new Knitting;
	}
        $knitting->id = $request->id?:0;
	$knitting->cod = $request->cod;
	$knitting->price = $request->price;
	$knitting->save();
        return redirect('/knittings');
    }

    public function store(Request $request)
    {
    	return $this->update($request);
    }

    public function destroy(Request $request, $id)
    {
	$knitting = Knitting::findOrFail($id);
	$knitting->delete();
        session()->flash('success', 'Registro removido!');
	return back();
    }
}