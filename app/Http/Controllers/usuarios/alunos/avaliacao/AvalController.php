<?php

namespace App\Http\Controllers\usuarios\alunos\avaliacao;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use App\model\AvaliacaoAgendada;
use App\Model\Avaliacoes;
use App\Model\Semestre;
use App\Model\Semana;
use App\Model\Curso;
use App\Model\Materia;
use App\Model\Provas;

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

	public function verPdf(Request $request, Avaliacoes $avaliacao){
		$idAva = $request->all();
		$busca = $avaliacoes->find($idAva->idAva);
		echo json_encode($busca);

		$pdf_nome = $request->verProva;
		return 'teste';
		$file = $pdf_nome;
		// return Response::download('provas/'.$file);

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

		// echo '<pre>';
		// echo print_r($aval);
		// echo '</pre>';
		
		}
	}

	public function agendarAvaliacao($materia_id,$id,$status, AvaliacaoAgendada $avaliacao){
		$idUsu = session()->get('id');

		if($status == 'true'){
			$avaliacao->create(['avaliacoes_id' => $id, 'usuario_id' => $idUsu, 'materia_id' => $materia_id]);
			$resposta = true;
			return Response::json($resposta); 
		}else{
			$avaliacao->where('avaliacoes_id', $id)->delete();
			$resposta = false;
			return Response::json($resposta); 
		}
	}

	public function excluirAvaliacao($id,Avaliacoes $avaliacoes){
		$delete = $avaliacoes->where('id', $id)->delete();

		if($delete){
			return Response::json($delete); 
		}


	}

	
	public function uploadPdf(Request $request, Materia $materia, Provas $prova, Avaliacoes $avaliacao){
		$pdf = $request->file('pdf');
		$idAva = $request->idAva;
		$materia_id = $request->materia_id;
		$semestre_id = $request->semestre_id; 
		$semana_id = $request->semana_id;

		$buscaProva = $prova->select('id')
		->where('materia_id',$materia_id)
		->where('semana_id',$semana_id)
		->where('semestre_id',$semestre_id)
		->get();

		echo json_encode($buscaProva);

		
		$destinationPath = public_path().DIRECTORY_SEPARATOR.'files/uploads';
		if($pdf->isValid()){
			$fileName = $pdf->getClientOriginalName();
			$upload = $pdf->move($destinationPath, $fileName);

			if($upload){
				if(isset($buscaProva[0]) ){
					echo 'prova existe';
					$prova->where('materia_id',$materia_id)
					->where('semana_id',$semana_id)
					->where('semestre_id',$semestre_id)
					->update(['pdf_nome' => $fileName]);	
				}else{
					echo 'prova não existe';
					$insert =	$prova->create(['materia_id' => $materia_id, 'semestre_id' => $semestre_id, 'semana_id' => $semana_id, 'pdf_nome' => $fileName]);

					$avaliacao->where('materia_id',$materia_id)
					->where('semana_id',$semana_id)
					->where('semestre_id',$semestre_id)
					->update(['prova_id' => $insert->id]);
				}
				
				return redirect()->route('avaliacoes');
			}
		}else{
			echo 'erro';
		}	
	}
}
