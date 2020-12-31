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
Route::get('/contenido', function () {
   return view('contenido/contenido');
});

Route::get('cliente/','Clientecontroller@index');
Route::post('/cliente/registrar','Clientecontroller@store');
Route::put('/cliente/actualizar','Clientecontroller@update');
Route::post('/cliente/eliminar','Clientecontroller@destroy');

Route::get('plato/','Platocontroller@index');
Route::post('/plato/registrar','Platocontroller@store');
Route::put('/plato/actualizar','Platocontroller@update');
Route::post('/plato/eliminar','Platocontroller@destroy');

Route::get('pedido/','Pedidocontroller@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
