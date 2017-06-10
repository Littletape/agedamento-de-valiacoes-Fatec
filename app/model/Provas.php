<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Provas extends Model
{
    protected $table = 'provas';
    public $timestamps = false;
    protected $fillable = ['materia_id','semestre_id','semana_id','pdf_nome'];
}
