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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blank');
    }

    public function materi(){
        $data['sd'] = \App\Category::where('tingkat', 'sd')->get();
        $data['smp'] = \App\Category::where('tingkat', 'smp')->get();
        $data['sma'] = \App\Category::where('tingkat', 'sma')->get();
        return view('materi.materi')->with($data);
    }
}
