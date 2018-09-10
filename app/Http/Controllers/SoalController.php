<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function index($id){
        $data['result'] = \App\Matalomba::where('id_matalomba', $id)->first();

        if($data['result'] != "") return view('materi.form_soal')->with($data);
        else return redirect('/kematerian/'. $id);
    }

    public function store(Request $request, $id){
        $rules = [
            'id_matalomba' => 'required',
            'soal' => 'required',
            'opsi1' => 'required',
            'opsi2' => 'required',
            'opsi3' => 'required',
            'opsi4' => 'required',
            'opsi5' => 'required',
            'jawaban_benar' => 'required',
            'gambar' => 'mimes:jpeg,png|max:1024'
        ];
        $this->validate($request, $rules);
        $input_soal = [
            'id_matalomba' => $request->id_matalomba,
            'jawaban_benar' => $request->jawaban_benar,
            'soal' => $request->soal
        ];
        $save = \App\Soal::create($input_soal);

        if($request->hasFile('gambar') && $request->file('gambar')->isValid()){
            $result2 = \DB::table('t_soal')->select('id_soal')->orderBy('created_at', 'desc')->first();
             $id_soal = $result2->id_soal;

            $filename =  $id_soal . "." . $request->file('gambar')->getClientOriginalExtension();
    		$request->file('gambar')->storeAs('', $filename);
            
            $input['gambar'] = $filename;
            
            $goingToUpdate = \App\Soal::where('id_soal', $result2->id_soal)->first()->update($input);
        }

        $query = \App\Soal::where('id_matalomba', $id)->orderBy('updated_at', 'desc')->first();
        
        $opsi = [$request->opsi1, $request->opsi2, $request->opsi3, $request->opsi4, $request->opsi5]; 
        
        for($i = 0; $i < 5; $i++){
            $input_opsi = [
                'id_soal' => $query->id_soal,
                'opsi_ke' => ($i+1),
                'teks_opsi' => $opsi[$i]
            ];
            $save = \App\Opsi::create($input_opsi);
        }

        if($save) return redirect('/kematerian/'.$id.'/add')->with('success', 'Data berhasil ditambahkan.');
        else return redirect('/kematerian/'.$id.'/add')->with('error', 'Data gagal ditambahkan.');
    }

    public function edit($id, $id_soal){
        $data['result'] = \DB::table('t_soal')
                        ->join('t_matalomba', 't_soal.id_matalomba', 't_matalomba.id_matalomba')
                        ->where(['t_soal.id_matalomba' => $id, 't_soal.id_soal' => $id_soal])
                        ->first();
        $data['options'] = \App\Opsi::where('id_soal', $id_soal)->orderby('opsi_ke', 'asc')->get(); 
        if($data['result'] != "" && count($data['options']) != 0) return view('materi.form_soal')->with($data);
        else return redirect('/kematerian/'.$id)->with('error', "Data tidak ditemukan");
    }

    public function update(Request $request, $id, $id_soal){
        $rules = [
            'id_matalomba' => 'required',
            'soal' => 'required',
            'opsi1' => 'required',
            'opsi2' => 'required',
            'opsi3' => 'required',
            'opsi4' => 'required',
            'opsi5' => 'required',
            'jawaban_benar' => 'required',
            'gambar' => 'mimes:jpeg,png|max:1024'
        ];
        $this->validate($request, $rules);

        $input_soal = [
            'id_soal' => $id_soal,
            'id_matalomba' => $request->id_matalomba,
            'jawaban_benar' => $request->jawaban_benar,
            'soal' => $request->soal
        ];

        $save = \App\Soal::where('id_soal', $id_soal)->update($input_soal);
        if($request->hasFile('foto') && $request->file('foto')->isValid()){
			$filename = $id . "." . $request->file('foto')->getClientOriginalExtension();
            
            $request->file('foto')->storeAs('', $filename);
    		$input['foto'] = $filename;
    	}
        if($request->hasFile('gambar') && $request->file('gambar')->isValid()){
            
            $filename =  $id_soal . "." . $request->file('gambar')->getClientOriginalExtension();
            \Storage::disk('upload')->delete('' . $filename);
    		$request->file('gambar')->storeAs('', $filename);
            $input['gambar'] = $filename;
            
            $goingToUpdate = \App\Soal::where('id_soal', $id_soal)->first()->update($input);
        }

        $query = \App\Soal::where('id_matalomba', $id)->orderBy('updated_at', 'desc')->first();
        
        $opsi = [$request->opsi1, $request->opsi2, $request->opsi3, $request->opsi4, $request->opsi5]; 
        
        for($i = 0; $i < 5; $i++){
            $input_opsi = [
                'opsi_ke' => ($i+1),
                'teks_opsi' => $opsi[$i]
            ];
            $save = \App\Opsi::where(['id_soal' => $id_soal, 'opsi_ke' => ($i+1)])->update($input_opsi);
        }

        if($save) return redirect('/kematerian/'.$id)->with('success', 'Data berhasil diubah.');
        else return redirect('/kematerian/'.$id)->with('error', 'Data gagal diubah.');
    }
    
    public function delete($id, $id_soal){
        $result = \App\Soal::find($id_soal);
        $delete = $result->delete();
        if($delete) return redirect('/kematerian/'.$id)->with('success', 'Data berhasil dihapus.');
        else return redirect('/kematerian/'.$id)->with('error', 'Data gagal dihapus.');
    }
    
}
