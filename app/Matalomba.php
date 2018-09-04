<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matalomba extends Model
{  
    protected $table = 't_matalomba';
    public $primaryKey = 'id_matalomba';

    protected $fillable = [
        'id_matalomba', 'nama_matalomba', 'tingkat', 'access_code'
    ];

}
