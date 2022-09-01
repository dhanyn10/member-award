<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AwardController extends Controller
{
    public function show()
    {
        if(session()->has('email'))
        {
            return view('award');
        }
        else
        {
            return redirect()->route('welcome');
        }
    }
}
