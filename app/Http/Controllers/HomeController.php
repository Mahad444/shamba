<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.about');
    }
    
    public function services()
    {
        return view('home.services');
    }
    
    public function products()
    {
        return view('home.products');
    }

    public function contact()
    {
        return view('home.contact');
    }
}
