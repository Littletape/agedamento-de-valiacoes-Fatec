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
		$dompdf = new Dompdf();
		$dompdf->loadHtml(view('admin.relatoriogerado'));
		$dompdf->render();
		$dompdf->stream();
		//return view('admin.relatoriogerado');
	}

	public function qtdHoje(){
		$dompdf = new Dompdf();
		$dompdf->loadHtml(view('admin.relatoriogerado'));
		$dompdf->render();
		$dompdf->stream();
		//return view('admin.relatoriogerado');
	}

	public function qtdSemestre(){
		$dompdf = new Dompdf();
		$dompdf->loadHtml(view('admin.relatoriogerado'));
		$dompdf->render();
		$dompdf->stream();
		//return view('admin.relatoriogerado');
	}

	public function agendadasSemestre(){
		$dompdf = new Dompdf();
		$dompdf->loadHtml(view('admin.relatoriogerado'));
		$dompdf->render();
		$dompdf->stream();
		//return view('admin.relatoriogerado');
	}	
}

?> 