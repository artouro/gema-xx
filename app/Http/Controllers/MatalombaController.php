<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatalombaController extends Controller
{
	public function index($id){
		$data['check'] = \App\Matalomba::where('id_matalomba', $id)->first();
		$data['result'] = \DB::table('t_soal')
						  ->join('t_matalomba', 't_soal.id_matalomba', 't_matalomba.id_matalomba')
						  ->select('t_matalomba.*', 't_soal.*')
						  ->where('t_soal.id_matalomba', $id)
						  ->get();
		$data['collection'] = \App\Opsi::where('id_soal', $id)->get();
    	if(!empty($data['check'])) return view('materi.soal')->with($data);
    	else return redirect('/kematerian')->with('error', "Data tidak ditemukan.");
	}

    public function store(Request $request){

    	$rules = [
    		'nama_matalomba' => 'required',
			'tingkat' => 'required'
    	];
    	
    	$input = $request->all();
    	$this->validate($request, $rules);
    	$save = \App\Matalomba::create($input);

    	if($save) return redirect('/kematerian')->with('success', 'Data berhasil ditambahkan.');
    	else return redirect('/kematerian')->with('error', 'Data gagal ditambahkan.');
	}

    public function delete($id){
		$gonnaDeleted = \App\Matalomba::where('id_matalomba', $id)->first();

		if(empty($gonnaDeleted)) return redirect('/kematerian')->with('error', 'Data tidak ditemukan.');

    	$delete = $gonnaDeleted->delete();

    	if($delete) return redirect('/kematerian')->with('success', 'Data berhasil dihapus.');
    	else return redirect('/kematerian')->with('error', 'Data gagal dihapus.');	
    }

    public function update(Request $request){
    	$rules = [
    		'id_matalomba' => 'required',
    		'nama_matalomba' => 'required',
    		'tingkat' => 'required'
    	];
    	$input = $request->all();
    	$this->validate($request, $rules);
    	$target = \App\Matalomba::where('id_matalomba', $request->id_matalomba)->first();
    	$update = $target->update($input);

    	if($update) return redirect('/kematerian')->with('success', 'Data berhasil diubah.');
    	else return redirect('/kematerian')->with('error', 'Data gagal diubah.');	
    }
}
