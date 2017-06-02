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

    	
    	$dados = DB::table('avaliacoes as a')->select('a.dia','ag.usuario_id','ag.avaliacoes_id as avaAgendada_id','ag.materia_id as materiaAgendada','a.id','a.data','sme.semestre','sma.semana','a.materia_id','a.pdf_nome','a.semana_id','a.semestre_id','m.nome')
    	->join('semestre_avaliacoes as sme','a.semestre_id','sme.id')
    	->join('semanas_avaliacoes as sma','a.semana_id','sma.id')
    	->join('materias as m','a.materia_id','m.id')
    	->leftjoin('avaliacoes_agendadas as ag','a.id','ag.avaliacoes_id')
    	->orderBy('a.data')
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
