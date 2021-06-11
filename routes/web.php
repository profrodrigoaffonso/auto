<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/enviar_comando', 'App\Http\Controllers\ComandosController@enviarComando')->name('comandos.enviar');
Route::post('/alterar_comando', 'App\Http\Controllers\ComandosController@alterarComando')->name('comandos.executar');

Route::prefix('horarios')->group(function(){
    Route::get('/', 'App\Http\Controllers\HorariosController@index')->name('horarios.index');
    Route::get('/create', 'App\Http\Controllers\HorariosController@create')->name('horarios.create');
    Route::post('/store', 'App\Http\Controllers\HorariosController@store')->name('horarios.store');
    Route::get('/{id}/edit', 'App\Http\Controllers\HorariosController@edit')->name('horarios.edit');
    Route::post('/update', 'App\Http\Controllers\HorariosController@update')->name('horarios.update');
});