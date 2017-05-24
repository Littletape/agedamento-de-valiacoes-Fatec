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

    public function avaliacoesAgendadas(){

    	$dados = DB::table('avaliacoes')->select('avaliacoes.id','avaliacoes.data','semestre_avaliacoes.semestre','semanas_avaliacoes.semana','avaliacoes.dia','materias.nome','avaliacoes.pdf_nome','materia2.nome')
    	->join('semestre_avaliacoes','avaliacoes.semestre_id','semestre_avaliacoes.id')
    	->join('semanas_avaliacoes','avaliacoes.semana_id','semanas_avaliacoes.id')
    	->join('materias','materias.id','avaliacoes.materia_id')
    	->join(DB::raw('('.DB::select('select Distinct id,nome from materias').') AS materia2 '),'materia2.id','avaliacoes.materia2_id')
    	->get();

    	if(!empty($dados) ){
    		$avaliacoesAg = $dados;
    		return $avaliacoesAg;
    	}else{
    		echo 'erro ao fazer a busca';
    	}
    	
    }


}
