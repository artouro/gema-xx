<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function store(Request $request, $id){
        $rules = [
            'id_matalomba' => 'required',
            'soal' => 'required',
            'opsi1' => 'required',
            'opsi2' => 'required',
            'opsi3' => 'required',
            'opsi4' => 'required',
            'opsi5' => 'required',
            'jawaban_benar' => 'required'
        ];
        $this->validate($request, $rules);
        $input_soal = [
            'id_matalomba' => $request->id_matalomba,
            'jawaban_benar' => $request->jawaban_benar,
            'gambar' => $request->gambar,
            'soal' => $request->soal
        ];
        $save = \App\Soal::create($input_soal);

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

        if($save) return redirect('/kematerian/'.$id)->with('success', 'Data berhasil ditambahkan.');
        else return redirect('/kematerian/'.$id)->with('error', 'Data gagal ditambahkan.');
    }
}
