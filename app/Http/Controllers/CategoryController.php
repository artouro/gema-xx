<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request){

    	$rules = [
    		'category' => 'required',
    		'tingkat' => 'required'
    	];
    	
    	$input = $request->all();
    	$this->validate($request, $rules);
    	$save = \App\Category::create($input);

    	if($save) return redirect('/materi')->with('success', 'Data berhasil ditambahkan.');
    	else return redirect('/materi')->with('error', 'Data gagal ditambahkan.');
    }

    public function delete($id){

    	$gonnaDeleted = \App\Category::where('id', $id)->first();
    	$delete = $gonnaDeleted->delete();

    	if($delete) return redirect('/materi')->with('success', 'Data berhasil dihapus.');
    	else return redirect('/materi')->with('error', 'Data gagal dihapus.');	
    }

    public function update(Request $request){
    	$rules = [
    		'id' => 'required',
    		'category' => 'required',
    		'tingkat' => 'required'
    	];
    	$input = $request->all();
    	$this->validate($request, $rules);
    	$target = \App\Category::where('id', $request->id)->first();
    	$update = $target->update($input);

    	if($update) return redirect('/materi')->with('success', 'Data berhasil diubah.');
    	else return redirect('/materi')->with('error', 'Data gagal diubah.');	
    }

}
