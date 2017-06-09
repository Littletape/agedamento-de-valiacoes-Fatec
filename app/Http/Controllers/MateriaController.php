<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Materia;
use Illuminate\Support\Facades\Response;

class MateriaController extends Controller
{
     public function listarMaterias(Materia $materiaCad){
    	$materias = $materiaCad->all();

    	return response::json($materias);


    }
}
