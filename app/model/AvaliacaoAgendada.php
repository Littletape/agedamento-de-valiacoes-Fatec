<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class AvaliacaoAgendada extends Model
{
    protected $table = 'avaliacoes_agendadas';
    public $timestamps = false;
    protected $fillable = [
    	'id',
    	'avaliacoes_id',
    	'usuario_id',
    	'materia_id',
    	'semestre_id',
    	'semana_id'
    	
    ];
}
