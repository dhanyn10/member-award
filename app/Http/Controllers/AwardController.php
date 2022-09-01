<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Award;

class AwardController extends Controller
{
    public function show()
    {
        if(session()->has('email'))
        {
            $data = Award::all();
            return view('award', [
                'dataAward' => $data
            ]);
        }
        else
        {
            flash('you need to login', 'danger');
            return redirect()->route('welcome');
        }
    }
}
