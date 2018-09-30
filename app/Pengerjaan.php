<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengerjaan extends Model
{
    protected $table = "t_pengerjaan";
    protected $fillable = [
        'username', 'id_soal', 'jawaban_peserta'
    ];
}
