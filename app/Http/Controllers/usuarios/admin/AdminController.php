<?php

namespace App\Http\Controllers\usuarios\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\model\AvaliacaoAgendada;
use App\Model\Avaliacoes;
use App\Model\Semestre;
use App\Model\Semana;
use App\Model\Materias;
use App\Model\Pessoa;
use Dompdf\Dompdf;

class AdminController extends Controller {

	public function agendadasHoje(){
		$hoje = date("Y-m-d");

		$resultado = DB::table('avaliacoes_agendadas')
		->select('avaliacoes.data','semestre_avaliacoes.semestre','materias.nome as materia','usuarios.nome')
		->join('avaliacoes', 'avaliacoes_agendadas.avaliacoes_id', 'avaliacoes.id')
		->join('materias', 'avaliacoes_agendadas.materia_id', 'materias.id')
		->join('usuarios','avaliacoes_agendadas.usuario_id', 'usuarios.id')
		->join('semestre_avaliacoes', 'avaliacoes.semestre_id', 'semestre_avaliacoes.id')
		->where('avaliacoes.data', '=', $hoje)
		->orderby('semestre')
		->get();

		$n = 0; $qtd = 0;
		//dd($resultado);

		/*$html = view('admin.relatoriogerado', compact('resultado', 'n', 'qtd'));
		$dompdf = new Dompdf();
		$dompdf->loadHtml($html);
		$dompdf->render();
		$dompdf->stream();*/
		return view('admin.relatoriogerado', compact('resultado', 'n', 'qtd'));
	}

	public function qtdHoje(){
		$hoje = date("Y-m-d");

		$resultado = DB::table('materias')
		->select('avaliacoes.data','semestre_avaliacoes.semestre','materias.nome as materia')
		->join('avaliacoes_agendadas', 'avaliacoes_agendadas.materia_id', 'materias.id')
		->join('avaliacoes', 'avaliacoes_agendadas.avaliacoes_id', 'avaliacoes.id')
		->join('semestre_avaliacoes', 'avaliacoes.semestre_id', 'semestre_avaliacoes.id')
		->where('avaliacoes.data', '=', $hoje)
		->orderby('semestre')
		->get();

		$n = 0; $qtd = 1;
		//dd($resultado);

		/*$html = view('admin.relatoriogerado', compact('resultado', 'n', 'qtd'));
		$dompdf = new Dompdf();
		$dompdf->loadHtml($html);
		$dompdf->render();
		$dompdf->stream();*/
		return view('admin.relatoriogerado', compact('resultado', 'n', 'qtd'));
	}

	public function qtdSemestre(){
		$hoje = date("Y-m-d");

		$resultado = DB::table('materias')
		->select('avaliacoes.data','semestre_avaliacoes.semestre','materias.nome as materia')
		->join('avaliacoes_agendadas', 'avaliacoes_agendadas.materia_id', 'materias.id')
		->join('avaliacoes', 'avaliacoes_agendadas.avaliacoes_id', 'avaliacoes.id')
		->join('semestre_avaliacoes', 'avaliacoes.semestre_id', 'semestre_avaliacoes.id')
		->orderby('semestre')
		->get();

		$n = 0; $qtd = 1;
		//dd($resultado);

		/*$html = view('admin.relatoriogerado', compact('resultado', 'n', 'qtd'));
		$dompdf = new Dompdf();
		$dompdf->loadHtml($html);
		$dompdf->render();
		$dompdf->stream();*/
		return view('admin.relatoriogerado', compact('resultado', 'n', 'qtd'));
	}

	public function agendadasSemestre(){
		$hoje = date("Y-m-d");

		$resultado = DB::table('avaliacoes_agendadas')
		->select('avaliacoes.data','semestre_avaliacoes.semestre','materias.nome as materia','usuarios.nome')
		->join('avaliacoes', 'avaliacoes_agendadas.avaliacoes_id', 'avaliacoes.id')
		->join('materias', 'avaliacoes_agendadas.materia_id', 'materias.id')
		->join('usuarios','avaliacoes_agendadas.usuario_id', 'usuarios.id')
		->join('semestre_avaliacoes', 'avaliacoes.semestre_id', 'semestre_avaliacoes.id')
		->orderby('semestre')
		->get();

		$n = 0; $qtd = 0;
		//dd($resultado);

		/*$html = view('admin.relatoriogerado', compact('resultado', 'n', 'qtd'));
		$dompdf = new Dompdf();
		$dompdf->loadHtml($html);
		$dompdf->render();
		$dompdf->stream();*/
		return view('admin.relatoriogerado', compact('resultado', 'n', 'qtd'));
	}	
}

?> 