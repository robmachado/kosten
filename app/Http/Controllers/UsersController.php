<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\View;
use App\Http\Requests\UserRequest;
use DB;

class UsersController extends Controller
{
    
    public function index(Request $request)
    {
        return View::make('users.index')        
            ->with('users', User::all());
    }

    public function create(Request $request)
    {
        return view('users.add', [
            []
        ]);
    }

    public function edit(Request $request, $id)
    {
    	$user = User::findOrFail($id);
        return view('users.add', [
            'model' => $user
        ]);
    }

    public function show(Request $request, $id)
    {
	$user = User::findOrFail($id);
        return view('users.show', [
            'model' => $users
        ]);
    }

    public function update(UserRequest $request)
    {
        $user = null;
	if ($request->id > 0) {
            $user = User::findOrFail($request->id);
        } else { 
            $user = new User;
        }
        $user->id = $user->id ? : 0;
        $user->username = $request->username;
        $user->name = $request->name;
	$user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('/users');
    }

    public function store(Request $request)
    {
        return $this->update($request);
    }

    public function destroy(Request $request, $id)
    {
        if ($id === 1) {
            return back();
        }
	$user = User::findOrFail($id);
	$user->delete();
	session()->flash('success', 'Registro removido!');
	return back();
    }
}
