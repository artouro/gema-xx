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
        $data['sd'] = \App\Matalomba::where('tingkat', 'sd')->get();
        $data['smp'] = \App\Matalomba::where('tingkat', 'smp')->get();
        $data['sma'] = \App\Matalomba::where('tingkat', 'sma')->get();
        
        return view('materi.matalomba')->with($data);
    }
    public function get_data(){
        return response()->json([
            'date' => '25 September 2018',
            'event' => 'Programming' 
        ]);
    }

    public function post_data(Request $request){
        return response()->json([
            'status' => 'success',
            'msg' => "<br>" . $request->msgData
        ]);
    }
}
