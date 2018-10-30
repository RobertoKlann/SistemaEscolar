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
Route::group(['prefix' => 'clientes'], function () {
    Route::get('', 'ClientesController@getAllClientes');
    Route::get('{id}', 'ClientesController@getCliente');
    Route::post('', 'ClientesController@saveCliente');
    Route::put('{id}', 'ClientesController@updateCLiente');
    Route::delete('{id}', 'ClientesController@deleteCliente');
});
