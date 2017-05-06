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
    Route::get('/',['as' => 'clients', 'uses' => 'MSClientsController@index']);
    Route::get('/create', ['uses' => 'MSClientsController@create']);
    Route::post('/store', ['as' => 'client.store', 'uses' => 'MSClientsController@store']);
	Route::get('/{id}',['uses' => 'MSClientsController@show']);
	Route::get('/{id}/edit', ['uses' => 'MSClientsController@edit']);
	Route::post('/{id}/edit', [ 'as' => 'client.edit', 'uses' => 'MSClientsController@update']);
	Route::delete('/{id}/delete', ['as' => 'client.destroy', 'uses' => 'MSClientsController@destroy']);
});
