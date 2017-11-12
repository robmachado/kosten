<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Support\Facades\View;
use DB;

class DestinationsController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(Request $request)
    {
        return View::make('destinations.index')        
            ->with('destinations', Destination::all());
    }

	public function create(Request $request)
	{
	    return view('destinations.add', [
	        []
	    ]);
	}

	public function edit(Request $request, $id)
	{
		$destination = Destination::findOrFail($id);
	    return view('destinations.add', [
	        'model' => $destination	    ]);
	}

	public function show(Request $request, $id)
	{
		$destination = Destination::findOrFail($id);
	    return view('destinations.show', [
	        'model' => $destination	    ]);
	}

	public function grid(Request $request)
	{
		$len = $_GET['length'];
		$start = $_GET['start'];

		$select = "SELECT *,1,2 ";
		$presql = " FROM destinations a ";
		if($_GET['search']['value']) {	
			$presql .= " WHERE destination LIKE '%".$_GET['search']['value']."%' ";
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


    public function update(Request $request)
    {
        $destination = null;
	if ($request->id > 0) {
            $destination = Destination::findOrFail($request->id);
        } else { 
            $destination = new Destination;
        }
        $destination->id = $request->id ? : 0;
        $destination->destination = $request->destination;
	$destination->icms = $request->icms;
        $destination->save();
        return redirect('/destinations');
    }

    public function store(Request $request)
    {
        return $this->update($request);
    }

    public function destroy(Request $request, $id)
    {
	$destination = Destination::findOrFail($id);
	$destination->delete();
	return "OK";
    }
}