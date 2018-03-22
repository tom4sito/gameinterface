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

// Route::get('/', function () {
//     return view('principal');
// });

Route::get('', 'GameSearchController@index');
Route::get('/crear', 'GameSearchController@create');
Route::get('/buscar', 'GameSearchController@buscar');
Route::get('/obtenerjuego', "GameSearchController@obtener");
Route::get('/infojuego/{id}', "GameSearchController@info");
Route::get('/subir', 'UploadController@index');
Route::post('/guardar', 'UploadController@store');
Route::get('/show/{id}', 'UploadController@show');


