<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Avaliacoes extends Model
{   public $timestamps = false;
    protected $table = 'avaliacoes';
    protected $fillable = [
        'data',
        'curso_id',
        'semestre_id',
        'semana_id',
        'dia',
        'materia_id'
        
    ];


    public function avaliacoesCadastradas($operador,$condicao){

        $dados = DB::table('avaliacoes as a')->select('a.dia','c.nome as nomeCurso','ag.usuario_id','ag.avaliacoes_id as avaAgendada_id','ag.materia_id as materiaAgendada','a.id','a.data','sme.semestre','sma.semana','a.materia_id','p.pdf_nome','a.prova_id','a.semana_id','a.semestre_id','m.nome as materia')
        ->join('semestre_avaliacoes as sme','a.semestre_id','sme.id')
        ->join('semanas_avaliacoes as sma','a.semana_id','sma.id')
        ->join('materias as m','a.materia_id','m.id')
        ->join('cursos as c','c.id','a.curso_id')
        ->leftjoin('avaliacoes_agendadas as ag','a.id','ag.avaliacoes_id')
        ->leftjoin('provas as p','a.prova_id','p.id')
        ->where('a.semestre_id',''.$operador.'',$condicao)
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

    public function avaliacoesAgendadas(){

        $idUsu = session()->get('id');
        $semestre = session()->get('semestre_id');
        
        $result = DB::table('avaliacoes_agendadas AS ag')->select('m.nome','a.data','a.id','a.pdf_nome')
        ->join('avaliacoes AS a','ag.avaliacoes_id','a.id')
        ->join('materias as m','m.id','a.materia_id')
        ->where('ag.usuario_id',$idUsu)
        ->where('a.semestre_id',$semestre)
        ->orderBy('a.data')
        ->get();

        if(!empty($result) ){
            return $result;
        }else{
            echo 'erro ao fazer a busca';
        }

    }


}
