<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{	
    protected $table = 'materias';
    public $timestamps = false;
    protected $fillable = ['id','nome'];
}
