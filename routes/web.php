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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'PerrosController@index');
Route::get('/perros', 'PerrosController@index')->name('perros.index');
Route::post('/perros', 'PerrosController@store')->name('perros.store');
Route::get('/perros/create', 'PerrosController@create')->name('perros.create');
Route::get('/perros/{perro}', 'PerrosController@show')->name('perros.show');
Route::get('/perros/{perro}/edit', 'PerrosController@edit')->name('perros.edit');
Route::put('/perros/{perro}', 'PerrosController@update')->name('perros.update');
Route::delete('/perros/{perro}', 'PerrosController@destroy')->name('perros.destroy');


