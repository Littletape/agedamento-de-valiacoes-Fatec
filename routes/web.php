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

Route::get('/agendadas','usuarios\alunos\AlunoController@avaliacoesAgendadas' );

Route::get('/agendar/{materia_id}/{id}/{status}', 'usuarios\alunos\avaliacao\AvalController@agendarAvaliacao');

Route::get('/excluir/avaliacao/{id}', 'usuarios\alunos\avaliacao\AvalController@excluirAvaliacao');

Route::get('/agendamento','usuarios\alunos\avaliacao\AvalController@listarAvaliacoes')->name('agendar');

Route::get('provas/pdf', 'usuarios\alunos\avaliacao\AvalController@verPdf')->name('verProva');

//Area do admin
Route::get('/definirProvas','usuarios\alunos\avaliacao\AvalController@listarAvaliacoes')->name('avaliacoes');

Route::post('/cadastrar/avaliacao','usuarios\alunos\avaliacao\AvalController@cadastrarAvaliacao')->name('cadAvaliacao');

Route::get('/relatorio', function(){
	return view('admin.relatorio');
});

Route::get('/relatorio/agendadasHoje', 'usuarios\admin\AdminController@agendadasHoje');

Route::get('/relatorio/qtdHoje', 'usuarios\admin\AdminController@qtdHoje');

Route::get('/relatorio/qtdSemestre', 'usuarios\admin\AdminController@qtdSemestre');

Route::get('/relatorio/agendadasSemestre', 'usuarios\admin\AdminController@agendadasSemestre');

//Route::get('/relatoriogerado', 'usuarios\admin\AdminController@relatorioGerado');