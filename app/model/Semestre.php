<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    protected $table ='semestre_avaliacoes';
    protected $fillable = [
    'semestre'
    ];
}
