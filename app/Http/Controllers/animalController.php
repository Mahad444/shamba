<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class animalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $animals = \App\Models\animals::all();
        // $this->authorize('viewAny', $animals);
        // $this->authorize('view', $animals);
        return view('category.animal.index', ['animals'=>$animals ]);
    }

    public function create()
    {
        
        return view('category.animal.create');
    }
    
    // store animal data

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required','min:2','max:100'],
            'quantity' => ['required','min:1','max:100'],
            'farmers_note' => ['required','min:2','max:255']
        ]);
        
        $animal = new \App\Models\animals;
        $animal->user_id = auth()->user()->id;
        $animal->name = $request->name;
        $animal->quantity = $request->quantity;
        $animal->farmers_note = $request->farmers_note;
        $animal->save();
        
        return redirect()->route('animal.index');
    }
    
    // edit animal data

    public function edit($id)
    {
        $animal = \App\Models\animals::findorFail($id);
        
        return view('category.animal.edit', ['animal'=>$animal]);
    }

    //update animal record

    public function update(Request $request, $id)
    {
        $animal = \App\Models\animals::findorFail($id);
        $request->validate([
            'name' => ['required','min:2','max:100'],
            'quantity' => ['required','min:1','max:100'],
            'farmers_note' => ['required','min:2','max:255']
        ]);
        
        $animal->user_id = auth()->user()->id;
        $animal->name = $request->name;
        $animal->quantity = $request->quantity;
        $animal->farmers_note = $request->farmers_note;
        
        $animal->update();
        
        return redirect()->route('animal.index')->with('updateMsg', 'Record successfully Updated');
    }

    //delete animal data

    public function destroy($id)
    {
        $animal = \App\Models\animals::findorFail($id);
        $animal->delete();
        return redirect()->route('animal.index')->with('delMsg', 'animal record deleted!');
    }
}
