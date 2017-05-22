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

Route::group(['prefix' => 'client'], function (){

    Route::get('/',['as' => 'app.clients.index', 'uses' => 'MSClientsController@index']);
    Route::get('/create', ['as' => 'app.clients.create', 'uses' => 'MSClientsController@create']);
    Route::post('/create', [ 'uses' => 'MSClientsController@store']);

    Route::group(['prefix' => '{id}'], function () {

		Route::get('/',['uses' => 'MSClientsController@show']);
		Route::get('/edit', ['as' => 'app.clients.edit', 'uses' => 'MSClientsController@edit']);
		Route::post('/edit', [  'uses' => 'MSClientsController@update']);
		Route::delete('/delete', ['as' => 'app.clients.destroy', 'uses' => 'MSClientsController@destroy']);

    });

});
