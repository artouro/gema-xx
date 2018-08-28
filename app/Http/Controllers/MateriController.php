<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index($id){
    	$data['result'] = \App\Category::where('id', $id)->first();
    	return view('materi.materi')->with($data);
    }
}
