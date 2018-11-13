<?php

use Illuminate\Http\Request;
header('Access-Control-Allow-Origin: *', false);
header('Access-Control-Allow-Methods: *', false);

Route::middleware('auth:api')->get('/', function (Request $request) {
    return $request->user();
});


/**
 * Rota para os Alunos.
 *
 * @author  Roberto Klann
 * @package Routes
 * @since   30/10/2018
 */
Route::group(['prefix' => 'alunos'], function () {
    Route::get('', 'ControllerAlunos@getAllAlunos');
    Route::get('{id}', 'ControllerAlunos@getAluno');
    Route::post('', 'ControllerAlunos@saveAluno');
    Route::put('{id}', 'ControllerAlunos@updateAluno');
    Route::delete('{id}', 'ControllerAlunos@deleteAluno');
});

/**
 * Rota para os Cursos.
 *
 * @author  Roberto Klann
 * @package Routes
 * @since   13/11/2018
 */
Route::group(['prefix' => 'cursos'], function () {
    Route::get('', 'ControllerCursos@getAllCursos');
    Route::get('{id}', 'ControllerCursos@getCurso');
    Route::post('', 'ControllerCursos@saveCurso');
    Route::put('{id}', 'ControllerCursos@updateCurso');
    Route::delete('{id}', 'ControllerCursos@deleteCurso');
});

/**
 * Rota para os Professores.
 *
 * @author  Roberto Klann
 * @package Routes
 * @since   13/11/2018
 */
Route::group(['prefix' => 'professores'], function () {
    Route::get('', 'ControllerProfessores@getAllProfessores');
    Route::get('{id}', 'ControllerProfessores@getProfessor');
    Route::post('', 'ControllerProfessores@saveProfessor');
    Route::put('{id}', 'ControllerProfessores@updateProfessor');
    Route::delete('{id}', 'ControllerProfessores@deleteProfessor');
});

/**
 * Rota para os Turmas.
 *
 * @author  Roberto Klann
 * @package Routes
 * @since   13/11/2018
 */
Route::group(['prefix' => 'turmas'], function () {
    Route::get('', 'ControllerTurmas@getAllTurmas');
    Route::get('{id}', 'ControllerTurmas@getTurma');
    Route::post('', 'ControllerTurmas@saveTurma');
    Route::put('{id}', 'ControllerTurmas@updateTurma');
    Route::delete('{id}', 'ControllerTurmas@deleteTurma');
});
