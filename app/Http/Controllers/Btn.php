<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Btn extends Controller
{
    public static function delete($id, $reference=null)
    {
        return view('layouts.modal', compact(['id', 'reference']))->render();
    }
}
