<?php

namespace App\Http\Controllers\usuarios\alunos\avaliacao;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\AvaliacaoAgendada;

class AvalController extends Controller
{
    public function agendarAvaliacao($materia_id,$id,$status, AvaliacaoAgendada $avaliacao){
    	$idUsu = session()->get('id');
    	
    	if($status == 'true'){
    		$avaliacao->create(['avaliacoes_id' => $id, 'usuario_id' => $idUsu, 'materia_id' => $materia_id]);
    	}else{
    		$avaliacao->where('avaliacoes_id', $id)->delete();

    	}
    }
}
