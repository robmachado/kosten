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
	//return view('knittings.index', []);
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
	        'model' => $knitting	    ]);
	}

	public function show(Request $request, $id)
	{
		$knitting = Knitting::findOrFail($id);
	    return view('knittings.show', [
	        'model' => $knitting	    ]);
	}

	public function grid(Request $request)
	{
		$len = $_GET['length'];
		$start = $_GET['start'];

		$select = "SELECT *,1,2 ";
		$presql = " FROM knittings a ";
		if($_GET['search']['value']) {	
			$presql .= " WHERE cod LIKE '%".$_GET['search']['value']."%' ";
		}
		
		$presql .= "  ";

		$sql = $select.$presql." LIMIT ".$start.",".$len;


		$qcount = DB::select("SELECT COUNT(a.id) c".$presql);
		//print_r($qcount);
		$count = $qcount[0]->c;

		$results = DB::select($sql);
		$ret = [];
		foreach ($results as $row) {
			$r = [];
			foreach ($row as $value) {
				$r[] = $value;
			}
			$ret[] = $r;
		}

		$ret['data'] = $ret;
		$ret['recordsTotal'] = $count;
		$ret['iTotalDisplayRecords'] = $count;

		$ret['recordsFiltered'] = count($ret);
		$ret['draw'] = $_GET['draw'];

		echo json_encode($ret);

	}


	public function update(Request $request) {
	    //
	    /*$this->validate($request, [
	        'name' => 'required|max:255',
	    ]);*/
		$knitting = null;
		if($request->id > 0) { $knitting = Knitting::findOrFail($request->id); }
		else { 
			$knitting = new Knitting;
		}
	    

	    		
			    $knitting->id = $request->id?:0;
				
	    		
					    $knitting->cod = $request->cod;
		
	    		
					    $knitting->price = $request->price;
		
	    		
					    $knitting->created_at = $request->created_at;
		
	    		
					    $knitting->updated_at = $request->updated_at;
		
	    	    //$knitting->user_id = $request->user()->id;
	    $knitting->save();

	    return redirect('/knittings');

	}

	public function store(Request $request)
	{
		return $this->update($request);
	}

	public function destroy(Request $request, $id) {
		
		$knitting = Knitting::findOrFail($id);

		$knitting->delete();
		return "OK";
	    
	}

	
}