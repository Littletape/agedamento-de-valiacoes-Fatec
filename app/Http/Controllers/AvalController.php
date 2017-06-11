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
		date_default_timezone_set("America/Sao_Paulo");
		$pdf_nome = $request->verProva;
		$file = $pdf_nome;
		$post = $request->all();
		$busca = $avaliacao->find($post['idAva']);
		$dataAtual = date("Y-m-d h:i:sa");
		$dataAtual= strtotime($dataAtual);
		$dataAgendada = $busca->data;
		$dataAgendada =  strtotime($dataAgendada);

		// echo $dataAtual.'<br>'.$dataAgendada.'<br>';
		// só permite fazer o download da prova caso a data e hora atual seja mior do que a data e hora definida para a prova
		if($dataAtual  <= $dataAgendada){
			$erro = 2;
			return redirect()->route('provasAgendadas',compact('erro'));
		}else{
			if($busca['prova_id'] != null || $busca['prova_id'] > 0 || $busca['prova_id'] != ''){
				return Response::download(public_path().DIRECTORY_SEPARATOR.'files/uploads/'.$post['pdf_nome']);
			}else{
				// pdf não enviado pelo professor
				$erro = 1;
				return redirect()->route('provasAgendadas',compact('erro'));
			}
			
		}
		

		
		
		

	}

	public function editarAvaliacao($id,$materia_id,Avaliacoes $avaliacao){
		$resposta = $avaliacao->where('id',$id)->update(['materia_id' => $materia_id]);

		return response::json($resposta);
	}

	public function listarAvaliacoes(Avaliacoes $avaliacoes, Semestre $semestre, Semana $semana, Curso $curso, Materia $materia){

		$permissao_id = session()->get('permissao_id');
	 	$semanas = $semana->all();
		$semestres = $semestre->all();
		$idUsu = session()->get('id');
		$semestre = session()->get('semestre_id');
		$nameRoute = Route::currentRouteName();
		// retorna a view de agendamento de avaliacoes
		if($nameRoute == 'agendar'){
			$semestre = session()->get('semestre_id');
			$operador = '=';
			$aval = $avaliacoes->avaliacoesCadastradas($operador,$semestre);
			if($permissao_id != 2){
	 		return redirect('/acessoNegado');
	 		}else{
	 			return view('alunos.agendamento',compact('aval','semestre','semanas','idUsu'));
	 		}	
			
		// se não retorna a view de cadastro das provas 		
		}else{
		$materias =  $materia->all();	
		$semestre = 0;
		$operador = '>=';
		$aval = $avaliacoes->avaliacoesCadastradas($operador,$semestre);
		$cursos = $curso->all();

		if($permissao_id != 1){
	 		return redirect('/acessoNegado');
	 		}else{
				return view('admin.provas',compact('aval','semestres','semanas','cursos','materias'));
			}	
		// echo '<pre>';
		// echo print_r($aval);
		// echo '</pre>';
		
		}
	}

	public function agendarAvaliacao($materia_id,$id,$status,$semestre,$semana, AvaliacaoAgendada $avaliacao){
		$idUsu = session()->get('id');
		// verifica se a avaliação ja está agendada
						
		if($status == 'true'){
			$busca = $avaliacao->where('semestre_id',$semestre)
			->where('semana_id',$semana)
			->where('materia_id',$materia_id)	
			->get();	
			if(isset($busca[0]) ){
				$result = $busca[0];	
				
				if($result->semestre_id == $semestre && $result->semana_id == $semana && $result->materia_id == $materia_id && $result->usuario_id == $idUsu){
					// Indica que o agendamento da avaliação dessa materia ja foi realizado na semana e semestre selecionado
					$resposta = 'erro';
					return Response::json($resposta);
				}
			}else{
				$avaliacao->create(['avaliacoes_id' => $id, 'usuario_id' => $idUsu, 'materia_id' => $materia_id, 'semestre_id' => $semestre, 'semana_id' => $semana]);
				$resposta = true;
				return Response::json($resposta);
			}

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
