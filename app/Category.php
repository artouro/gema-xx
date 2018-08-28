<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 't_category';
    public $primaryKey = 'id';

    protected $fillable = [
    	'id', 'category', 'tingkat'
    ];

    protected $hidden = [
    	'remember_token'
    ];
}
