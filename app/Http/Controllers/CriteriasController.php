<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Criteria;
use App\Http\Requests\CriteriaRequest;
use Illuminate\Support\Facades\View;
use DB;

class CriteriasController extends Controller
{
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

    public function update(CriteriaRequest $request)
    {
	$criteria = null;
	if ($request->id > 0) {
            $criteria = Criteria::findOrFail($request->id);
        } else { 
            $criteria = new Criteria;
	}
        $criteria->id = $request->id ? : 0;
        $criteria->operational = number_format($request->operational, 0, '', '');
        $criteria->financial = number_format($request->financial, 0, '', '');
        $criteria->apportionment = number_format($request->apportionment, 0, '', '');
        $criteria->profit = $request->profit;
        $criteria->commission = $request->commission;
        $criteria->rate = $request->rate;
        $criteria->ipi = $request->ipi;
        $criteria->pis = $request->pis;
        $criteria->cofins = $request->cofins;
        $criteria->csll = $request->csll;
        $criteria->ir = $request->ir;
        $criteria->save();
        return redirect('/criterias');
    }

    public function store(CriteriaRequest $request)
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