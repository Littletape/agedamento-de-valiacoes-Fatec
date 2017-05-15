<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Pessoa;
use Illuminate\Support\Facades\DB;

class PessoasController extends Controller
{	
	// função de validação de login
	public function login(Request $request, Pessoa $pessoa){
		// variavel que recebe os dados inseridos no formulario de login
		$login =  $request->all();
		// variavel que recebe o resultado da busca feita utilizando o email logado como chave da consulta
		$search = $pessoa->where('email', $login['email'])->get();
		$erro;
		// verifica se a busca retornou resultado
		if(isset($search[0]) ){
			
			// verifica se asenha esta correta
			if($search[0]['senha'] == $login['senha']){
				return view('alunos.agendadas');
			}else{
				$erro = 2;
				return view('login',compact('erro'));
			}

		}else{
			$erro = 1;
			return view('login',compact('erro'));
		}
	}
}
