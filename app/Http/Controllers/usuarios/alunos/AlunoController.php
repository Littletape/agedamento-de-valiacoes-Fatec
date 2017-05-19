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

 		echo $avaliacoes->avaliacoesAgendadas;
 		$Semestre = $semestre->all();
 		$Semana = $semana->all();
 }

 }

?> 
