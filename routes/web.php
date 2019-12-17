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
    return view('empleados.index');
});

Route::resource('empleados','EmpleadoController');

// Route::get('listado','EmpleadoController@listado');

// ruta para buscador en tiempo real
Route::get('buscador', 'EmpleadoController@buscador');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
