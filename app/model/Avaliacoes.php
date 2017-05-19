<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Avaliacoes extends Model
{
    protected $table = 'avaliacoes';
    protected $fillable = [
    	'data',
    	'semestre_id',
    	'semana_id',
    	'dia',
    	'materia_id',
    	'pdf_nome'
    ];

    public function avaliacoesAgendadas(Avaliacoes $avaliacoes){

    	$Dados = DB::table('avaliacoes')->select('avaliacoes.id','avaliacoes.data','semestre_avaliacoes.semestre','semanas_avaliacoes.semana,avaliacoes.dia','materias.nome','avaliacoes.pdf_nome')
    	->join('semestre_avaliacoes','avaliacoes.semestre_id','semestre_avaliacoes.id')
    	->join('semanas_avaliacoes','avaliacoes.semana_id','semanas_avaliacoes.id');

    	if(!empty($Dados) ){
    		return $Dados;	
    	}else{
    		echo 'erro ao fazer a busca';
    	}
    	
    }


}
