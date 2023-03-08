<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cropController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $crops = \App\Models\crops::all();
        return view('category.crop.index', compact('crops'));
    }

    public function create()
    {
        return view('category.crop.create');
    }


    // store new crop

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'crop_duration' => 'required',
            'farmers_note' => 'required',
        ]);

        $crop = new \App\Models\crops;
        $crop->user_id = auth()->user()->id;
        $crop->name = $request->name;
        $crop->crop_duration = $request->crop_duration;
        $crop->farmers_note = $request->farmers_note;
        $crop->save();

        return redirect()->route('crop.index');
    }
}
