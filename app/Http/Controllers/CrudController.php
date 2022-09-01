<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Award;

class CrudController extends Controller
{
    public function showAdd()
    {
        return view('add');
    }
    public function formAdd(Request $request)
    {
        $name = $request->input('name');
        $type = (int) $request->input('type');
        $poin = (int) $request->input('poin');

        $create = Award::create([
            'name' => $name,
            'type' => $type,
            'poin' => $poin
        ]);

        if($create)
        {
            flash('created', 'success');
        }
        else
        {
            flash('error creating data', 'danger');
        }
        return redirect()->route('add');
    }
}
