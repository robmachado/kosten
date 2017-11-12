<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Bom;
use Illuminate\Support\Facades\View;
use DB;

class BomsController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function index(Request $request)
    {
        return View::make('boms.index')        
            ->with('boms', Bom::all());
	//return view('boms.index', []);
    }

	public function create(Request $request)
	{
	    return view('boms.add', [
	        []
	    ]);
	}

	public function edit(Request $request, $id)
	{
		$bom = Bom::findOrFail($id);
	    return view('boms.add', [
	        'model' => $bom	    ]);
	}

	public function show(Request $request, $id)
	{
		$bom = Bom::findOrFail($id);
	    return view('boms.show', [
	        'model' => $bom	    ]);
	}

	public function grid(Request $request)
	{
		$len = $_GET['length'];
		$start = $_GET['start'];

		$select = "SELECT *,1,2 ";
		$presql = " FROM boms a ";
		if($_GET['search']['value']) {	
			$presql .= " WHERE article LIKE '%".$_GET['search']['value']."%' ";
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
		$bom = null;
		if($request->id > 0) { $bom = Bom::findOrFail($request->id); }
		else { 
			$bom = new Bom;
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
		
	    		
					    $bom->created_at = $request->created_at;
		
	    		
					    $bom->updated_at = $request->updated_at;
		
	    	    //$bom->user_id = $request->user()->id;
	    $bom->save();

	    return redirect('/boms');

	}

	public function store(Request $request)
	{
		return $this->update($request);
	}

	public function destroy(Request $request, $id) {
		
		$bom = Bom::findOrFail($id);

		$bom->delete();
		return "OK";
	    
	}

	
}