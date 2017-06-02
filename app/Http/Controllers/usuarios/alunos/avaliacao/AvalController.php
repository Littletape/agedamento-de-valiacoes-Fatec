<?php

namespace App\Http\Controllers\usuarios\alunos\avaliacao;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\AvaliacaoAgendada;
use App\Model\Avaliacoes;
use App\Model\Semestre;
use App\Model\Semana;

class AvalController extends Controller
{

	public function listarAvaliacoes(Avaliacoes $avaliacoes, Semestre $semestre, Semana $semana){

		$aval = $avaliacoes->avaliacoesCadastradas();
		$semestres = $semestre->all();
		$semanas = $semana->all();
		$idUsu = session()->get('id');
		
		// retorna a view de agendamento de avaliacoes
 		return view('alunos.agendamento',compact('aval','semestres','semanas','idUsu'));
	}

	public function agendarAvaliacao($materia_id,$id,$status, AvaliacaoAgendada $avaliacao){
		$idUsu = session()->get('id');

		if($status == 'true'){
			$avaliacao->create(['avaliacoes_id' => $id, 'usuario_id' => $idUsu, 'materia_id' => $materia_id]);
		}else{
			$avaliacao->where('avaliacoes_id', $id)->delete();

		}
	}
}
