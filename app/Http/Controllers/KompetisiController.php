<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KompetisiController extends Controller
{
    public function index(){
        $tingkat = \Auth::user()->level;

        if($tingkat == 2){
            $tingkat = 'sd';
        } else if ($tingkat == 3){
            $tingkat = 'smp';
        } else if ($tingkat == 4){
            $tingkat = 'sma';
        } else {
            $tingkat = '';
        }
        $data['tingkat'] = $tingkat;
        $data['result'] = \App\Matalomba::select('id_matalomba', 'nama_matalomba')->where('tingkat', $tingkat)->get();
        return view('materi.pengerjaan')->with($data);
    }

    public function detail($id){
        //checking if its already being done before
        // $check = \App\Pengerjaan::where(['username' => \Auth::user()->username, 'id_matalomba' ])

        $data['result'] = \DB::table('t_matalomba')
                            ->join('t_soal', 't_matalomba.id_matalomba', 't_soal.id_matalomba')
                            ->select('t_matalomba.*', 't_soal.*')
                            ->where('t_soal.id_matalomba', $id)
                            ->get();
        return view('materi.detail_materi')->with($data);            
    }

    public function store(Request $request){
        $kunci = \App\Soal::select(['id_soal', 'jawaban_benar'])->where('id_matalomba', $request->id_matalomba)->orderBy('id_soal', 'asc')->get();
        $input = $request->all();
        $input['username'] = \Auth::user()->username;

        //Perhitungan nilai
        $nilai = 0;
        $satuan = 100 / count($kunci);

        foreach($kunci as $row){
            if($row->jawaban_benar == $input[$row->id_soal]){
                $nilai += $satuan;
            }
        }
        $arr = ['username' => \Auth::user()->username,'id_matalomba' => $request->id_matalomba,'nilai' => $nilai];
        $save = \App\Nilai::create($arr);

        //Menyimpan jawaban peserta
        $filter = [];
        $arr_keys = array_keys($input);
        $len = count($input);
        for($i = 2; $i < $len - 1; $i++){
            $filter = [
                "username" => \Auth::user()->username,
                "id_soal" => $arr_keys[$i],
                "jawaban_peserta" => $input[$arr_keys[$i - 1]] 
            ];
            $save = \App\Pengerjaan::create($filter);
        }

        if($save) return redirect('/kompetisi')->with('success', 'Jawaban anda telah disimpan.');
        else return redirect('/kompetisi/' . $request->id_matalomba)->with('error', 'Jawaban anda gagal disimpan.');
    }
}
