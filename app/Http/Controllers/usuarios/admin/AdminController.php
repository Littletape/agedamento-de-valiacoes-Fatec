<?php

namespace App\Http\Controllers\usuarios\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Dompdf\Dompdf;

class AdminController extends Controller {

	public function relatorioGerado(){
		$dompdf = new Dompdf();
		$dompdf->loadHtml(view('admin.relatoriogerado'));
		$dompdf->render();
		$dompdf->stream();
		//return view('admin.relatoriogerado');
	}
 }

?> 