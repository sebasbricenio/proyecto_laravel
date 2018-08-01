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

Route::get('perfil', 'PublicacionesController@index');

Route::post('agregar', 'IndexController@crear');

Route::post('home', 'PublicacionesController@publicar');
Route::get('amigos/{id?}', 'PublicacionesController@amigos');
//Route::get('/home', 'PublicacionesController@publicar');
//Route::get('/home', 'HomeController@amigos')->name('home');

Route::get('preguntas_frecuentes','IndexController@preguntas_frecuentes');

//Route::get('publicar','PublicarController@publicar');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
