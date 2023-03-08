<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoryController extends Controller
{
    
    public function chooseCategory (Request $request)
    {
        // dd($request);
        if($request->category === 'crop'){
            return redirect('category/crop/create');
        }elseif($request->category === 'animal'){
            return redirect('category/animal/create');
        }else{
            return redirect()->route('home.index');
        }
    }
}
