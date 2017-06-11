<?php

namespace App\Http\Controllers\usuarios\alunos;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\model\AvaliacaoAgendada;
use App\model\Avaliacoes;

class AlunoController extends Controller
{
 
	 public function avaliacoesAgendadas (AvaliacaoAgendada $avaliacoes, Avaliacoes $avaAg){
	 	$permissao_id = session()->get('permissao_id');
	 	if($permissao_id == 2){
	 		$result = $avaAg->avaliacoesAgendadas();
	 		return view('alunos.agendadas',compact('result'));	
	 	}else{
	 		return redirect('/acessoNegado');
	 	}
	 	
	 }

 }

?> 
