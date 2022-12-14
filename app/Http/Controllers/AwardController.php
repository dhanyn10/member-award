<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Award;
use Illuminate\Support\Facades\DB;

class AwardController extends Controller
{
    public function show(Request $request)
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

    public function delete(Request $request)
    {
        $id = $request->id;
        $delete = Award::where('id', $id)->delete();
        if($delete)
        {
            flash('data deleted', 'success');
        }
        else
        {
            flash('failed deleting data', 'danger');
        }
        return redirect()->route('award');
    }
}
