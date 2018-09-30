<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 't_nilai';
    public $primaryKey = 'id';
    protected $fillable = [
        'username', 'id_matalomba', 'nilai'
    ];
}
