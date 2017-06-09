<?php

namespace App\Http\Controllers\usuarios\alunos\avaliacao;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use App\model\AvaliacaoAgendada;
use App\Model\Avaliacoes;
use App\Model\Semestre;
use App\Model\Semana;
use App\Model\Curso;
use App\Model\Materia;

class AvalController extends Controller
{
	public function cadastrarAvaliacao(Request $request, Avaliacoes $avaliacoes){
		$avaliacao = $request->except('_token');

		$insert = $avaliacoes->create($avaliacao);

		if($insert){
			$msg = 1;
			return redirect()->route('avaliacoes',compact('msg'));
		}else{

			$msg = 2;
			return redirect()->route('avaliacoes',compact('msg'));
		}


	}

	public function editarAvaliacao($id,$materia_id,Avaliacoes $avaliacao){
		$resposta = $avaliacao->where('id',$id)->update(['materia_id' => $materia_id]);

		return response::json($resposta);
	}

	public function listarAvaliacoes(Avaliacoes $avaliacoes, Semestre $semestre, Semana $semana, Curso $curso, Materia $materia){

		$semanas = $semana->all();
		$semestres = $semestre->all();
		$idUsu = session()->get('id');
		$semestre = session()->get('semestre_id');
		$nameRoute = Route::currentRouteName();

		if($nameRoute == 'agendar'){
			$semestre = session()->get('semestre_id');
			$operador = '=';
			$aval = $avaliacoes->avaliacoesCadastradas($operador,$semestre);
		// retorna a view de agendamento de avaliacoes
			return view('alunos.agendamento',compact('aval','semestre','semanas','idUsu'));
		// se não retorna a view de cadastro das provas 		
		}else{
		$materias =  $materia->all();	
		$semestre = 0;
		$operador = '>=';
		$aval = $avaliacoes->avaliacoesCadastradas($operador,$semestre);
		$cursos = $curso->all();
		return view('admin.provas',compact('aval','semestres','semanas','cursos','materias'));
		
		}
	}

	public function agendarAvaliacao($materia_id,$id,$status, AvaliacaoAgendada $avaliacao){
		$idUsu = session()->get('id');

		if($status == 'true'){
			$avaliacao->create(['avaliacoes_id' => $id, 'usuario_id' => $idUsu, 'materia_id' => $materia_id]);
		}else{
			$avaliacao->where('avaliacoes_id', $id)->delete();

		}
	}

	public function excluirAvaliacao($id,Avaliacoes $avaliacoes){
		$delete = $avaliacoes->where('id', $id)->delete();

		if($delete){
			return Response::json($delete); 
		}


	}
}
