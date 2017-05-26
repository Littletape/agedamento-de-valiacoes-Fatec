<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

// Route::group(['prefix'=>'pessoa'],function(){

Route::post('/validacao','PessoasController@login');  //COntroller Login

Route::get('/logout','PessoasController@logout');  //COntroller Login


// });

Route::get('/agendadas', function () {
	return view('alunos.agendadas');
});

Route::get('/agendamento','usuarios\alunos\AlunoController@listarAvaliacoes');

//Area do admin
Route::get('/provas', function(){
	return view('admin.provas');
});

Route::get('/relatorio', function(){
	return view('admin.relatorio');
});

Route::get('/relatoriogerado', 'usuarios\admin\AdminController@relatorioGerado');