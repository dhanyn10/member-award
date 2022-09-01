<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class WelcomeController extends Controller
{
    public function show()
    {
        return view('welcome');
    }
    public function login(Request $request)
    {
        $email = $request->input('email');

        $getUser = User::where('email', $email)->get();
        if(count($getUser) > 0)
        {
            session([
                'email' => $getUser->pluck('email')->first(),
                'role'  => $getUser->pluck('role')->first()
            ]);
            return redirect()->route('award');
        }
        else
        {
            flash('data not found', 'danger');
            return redirect()->route('welcome');
        }
    }
}
