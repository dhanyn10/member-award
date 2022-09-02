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
        $image = $request->input('image');
        $type = (int) $request->input('type');
        $poin = (int) $request->input('poin');

        $create = Award::create([
            'name' => $name,
            'image' => $image,
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

    public function autoAdd()
    {
        for($j = 0; $j < 10; $j++)
        {
            $create = Award::create([
                'name' => fake()->company(),
                'image' => 'https://picsum.photos/300/150?grayscale&random='.rand(10**4, 15**4),
                'type' => rand(1,3),
                'poin' => rand(200, 500000)
            ]);
        }
        return redirect()->route('award');
    }
}
