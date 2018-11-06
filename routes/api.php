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
