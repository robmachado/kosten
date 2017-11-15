<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Criteria;
use Illuminate\Support\Facades\View;
use DB;

class CriteriasController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function index(Request $request)
    {
        return View::make('criterias.index')        
            ->with('crits', Criteria::all());
    }

    public function create(Request $request)
    {
        return view('criterias.add', [
            []
        ]);
    }

    public function edit(Request $request, $id)
    {
    	$criteria = Criteria::findOrFail($id);
        return view('criterias.add', [
            'model' => $criteria
        ]);
    }

    public function show(Request $request, $id)
    {
	$criteria = Criteria::findOrFail($id);
        return view('criterias.show', [
            'model' => $criteria
        ]);
    }

    public function update(Request $request)
    {
	    //
	    /*$this->validate($request, [
	        'name' => 'required|max:255',
	    ]);*/
	$criteria = null;
	if ($request->id > 0) {
            $criteria = Criteria::findOrFail($request->id);
        } else { 
            $criteria = new Criteria;
	}
        $criteria->id = $request->id ? : 0;
        $criteria->operational_cost = $request->operational_cost;
        $criteria->financial_cost = $request->financial_cost;
        $criteria->apportionment = $request->apportionment;
        $criteria->profit = $request->profit;
        $criteria->commission = $request->commission;
        $criteria->financial_rate = $request->financial_rate;
        $criteria->ipi = $request->ipi;
        $criteria->pis = $request->pis;
        $criteria->cofins = $request->cofins;
        $criteria->csll = $request->csll;
        $criteria->ir = $request->ir;
        $criteria->save();
        return redirect('/criterias');
    }

    public function store(Request $request)
    {
    	return $this->update($request);
    }

    public function destroy(Request $request, $id)
    {
        //$criteria = Criteria::findOrFail($id);
	//$criteria->delete();
	//return "OK";
    }
}