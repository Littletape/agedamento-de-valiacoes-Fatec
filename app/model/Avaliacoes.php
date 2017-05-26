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

    public function avaliacoesCadastradas(){

    	$dados = DB::table('avaliacoes')->select('avaliacoes_agendadas.usuario_id','avaliacoes_agendadas.avaliacoes_id as avaAgendada_id','avaliacoes_agendadas.materia_id as materiaAgendada','avaliacoes.id','avaliacoes.data','semestre_avaliacoes.semestre','semanas_avaliacoes.semana','avaliacoes.materia_id','avaliacoes.materia2_id','avaliacoes.dia','avaliacoes.pdf_nome','avaliacoes.semana_id','avaliacoes.semestre_id',DB::raw('(SELECT nome from materias where id = avaliacoes.materia_id) as materia1' ), DB::raw('(SELECT nome from materias where id = avaliacoes.materia2_id) as materia2' ))
    	->join('semestre_avaliacoes','avaliacoes.semestre_id','semestre_avaliacoes.id')
    	->join('semanas_avaliacoes','avaliacoes.semana_id','semanas_avaliacoes.id')
    	->leftjoin('avaliacoes_agendadas','avaliacoes.id','avaliacoes_agendadas.avaliacoes_id')
    	->orderBy('avaliacoes.data')
    	->distinct()
    	
    	
    	->get();

    	if(!empty($dados) ){
    		$avaliacoesAg = $dados;
    		return $avaliacoesAg;
    	}else{
    		echo 'erro ao fazer a busca';
    	}
    	
    }


}
