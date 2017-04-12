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

/*Route::get('/header', function () {
    return view('alunos.header');
});
*/

Route::get('/agendadas', function () {
	return view('alunos.agendadas');
});

Route::get('/agendamento', function () {
	return view('alunos.agendamento');
});