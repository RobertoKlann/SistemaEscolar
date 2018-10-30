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
    return view('welcome');
});

Route::get('/consultaPadrao', function () {
    return view('ViewPadrao');
});

Route::get('/consultaAlunos', function () {
    return view('ViewConsultaAlunos');
});

Route::get('/cadastroAlunos', function () {
    return view('ViewManutencaoAluno');
});

Route::get('/alterarAluno', function () {
    return view('ViewAlteracaoAluno');
});

Route::get('/consultaTurma', function () {
    return view('ViewConsultaTurma');
});

Route::get('/cadastroTurma', function () {
    return view('ViewManutencaoTurma');
});

Route::get('/alterarTurma', function () {
    return view('ViewAlterarTurma');
});

Route::get('/consultaCurso', function () {
    return view('ViewConsultaCurso');
});

Route::get('/cadastroCurso', function () {
    return view('ViewManutencaoCurso');
});

Route::get('/alterarCurso', function () {
    return view('ViewAlterarCurso');
});

Route::get('/consultaProfessor', function () {
    return view('ViewConsultaProfessor');
});

Route::get('/cadastroProfessor', function () {
    return view('ViewManutencaoProfessor');
});

Route::get('/alterarProfessor', function () {
    return view('ViewAlterarProfessor');
});
