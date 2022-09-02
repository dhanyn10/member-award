<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Award;
use Illuminate\Support\Facades\DB;

class AwardController extends Controller
{
    public function show(Request $request)
    {
        if(session()->has('email'))
        {
            $data = null;
            $poin = (int) $request->input('poin');
            $type = $request->input('type');
            if($poin != "" && $type != "")
            {
                $type = explode(",", $type);
    
                $valtype = [];
                for($i = 0; $i < count($type); $i++)
                {
                    if(strtolower($type[$i]) =='voucher')
                        array_push($valtype, 1);
                    elseif(strtolower($type[$i]) =='product')
                        array_push($valtype, 2);
                    elseif(strtolower($type[$i]) =='giftcard')
                        array_push($valtype, 3);
                }
        
                $data = DB::table('award')
                        ->where('poin', '>=', $poin)
                        ->whereIn('type', $valtype)->paginate(6);
            }
            else
            {
                $data = Award::paginate(6);
            }
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
