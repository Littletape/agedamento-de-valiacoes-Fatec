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

Route::get('/login', function () {
    return view('login');
});

// Route::group(['prefix'=>'pessoa'],function(){

Route::post('/validacao','PessoasController@login');  //COntroller Login

Route::get('/logout','PessoasController@logout');  //COntroller Login


// });

Route::get('/agendadas', function () {
	return view('alunos.agendadas');
});

Route::get('/agendamento', function () {
	return view('alunos.agendamento');
});