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
/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', 'rendicionesController@index'); 
Route::get('/boletas', 'boletasController@index');
Route::get('/rendiciones', 'rendicionesController@index'); 
*/

Route::get('/', function () { 
    return view('welcomeIndex');
});

Route::resource('boletas', 'boletasController');
Route::resource('rendiciones', 'rendicionesController');