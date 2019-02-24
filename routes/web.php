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
    return view('master');
});

/*
* Rutas para Jugadores
*/
Route::resource('player','PLAYERController');
Route::get('player/info/{id?}', 'PLAYERController@info');
Route::get('player/info/{id?}/{name?}', 'PLAYERController@info');

/*
* Rutas para Monedas
*/
Route::resource('moneda','MONEDAController');
Route::get('moneda/juego/{id?}', 'MONEDAController@game');
Route::get('moneda/info/{id?}', 'MONEDAController@info');

/*
* Rutas para Juegos
*/
Route::resource('juego','JUEGOController');
Route::get('juego/info/{id?}', 'JUEGOController@info');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
