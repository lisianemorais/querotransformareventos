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

Route::get('/evento/{id}', 'EventosController@read');
Route::get('evento/evento_programacao/{id}', 'EventoProgramacaoController@show');
Route::get('home', array("as" => "home", "uses" => 'EventosController@index'));
Route::get('/', 'EventosController@index');
