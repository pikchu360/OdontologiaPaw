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

Route::get('/', 'ControladorDePaginas@welcome');

Auth::routes();

Route::resource('turnos','TurnoController');
Route::resource('pacientes','PacienteController');
Route::resource('osociales','OsocialController');
Route::resource('tasks', 'TasksController');

//Route::resource('tasks', 'TasksController@index')->name('tasks.index');
//Route::post('/tasks', 'TasksController@postDate');
Route::get('/registracion', 'ControladorDeRegistraciones@nuevo');
Route::post('/registracion', 'ControladorDeRegistraciones@guardar');

Route::get('{slug}', 'ControladorDePaginas@abrir');

//Route::get('/home', 'HomeController@index')->name('home');