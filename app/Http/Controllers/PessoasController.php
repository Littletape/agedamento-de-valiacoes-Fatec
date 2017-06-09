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
			$usuario = $search[0];

			// verifica se asenha esta correta
			if($usuario['senha'] == $login['senha']){
				$request->session()->put('id',$usuario['id']);
				$request->session()->put('senha',$usuario['senha']);
				$request->session()->put('nome',$usuario['nome']);
				$request->session()->put('permissao_id',$usuario['permissao_id']);
				$request->session()->put('semestre_id',$usuario['semestre_id']);
				$request->session()->put('logado',true);
				if($usuario['permissao_id'] == 1){
					return redirect('/definirProvas');
				}elseif($usuario['permissao_id'] == 2){
					return redirect('/agendadas');
				}

				
			}else{
				$erro = 2;
				return view('login',compact('erro'));
			}

		}else{
			$erro = 1;
			return view('login',compact('erro'));
		}
	}

	// função que desconecta o usuario 
	public function logout(){
		session()->flush();
		return redirect('/');
	}
}
