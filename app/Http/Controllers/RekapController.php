<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekapController extends Controller
{
    public function index(){
        $data['result'] = \DB::table('t_nilai')
                        ->join('t_matalomba', 't_nilai.id_matalomba', 't_matalomba.id_matalomba')
                        ->where('username', \Auth::user()->username)
                        ->get();
        return view('rekap.index')->with($data);
    }
}
