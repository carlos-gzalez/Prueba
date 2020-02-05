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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('cliente','ClienteController');
Route::resource('producto','ProductoController');
Route::resource('provedor','ProvedorController');

Route::get('/cancelar', function (){
    return redirect()->route('cliente.index')->with('cancelar','Accion Cancelada!');
    }
)->name('cancelar');

Route::get('/cliente/{id}/confirm','ClienteController@confirm')->name('cliente.confirm');
