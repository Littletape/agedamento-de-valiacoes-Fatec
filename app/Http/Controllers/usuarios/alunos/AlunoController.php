<?php

namespace App\Http\Controllers\usuarios\alunos;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Model\Avaliacoes;
use App\Model\Semestre;
use App\Model\Semana;

class AlunoController extends Controller
{
 
 public function listarAvaliacoes(Avaliacoes $avaliacoes, Semestre $semestre, Semana $semana){

 		$aval = $avaliacoes->avaliacoesAgendadas();
 		$semestres = $semestre->all();
 		$semanas = $semana->all();

 		// echo "<pre>"; 
 		// 	print_r($aval);
 		// echo "<pre>";

 		// retorna a view de agendamento de avaliacoes
 		return view('alunos.agendamento',compact('aval','semestres','semanas'));
 }

 }

?> 
