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
    //return view('template.inicio');
});

Auth::routes();

Route::get('/home', 'ClienteController@index')->name('home');
//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('cliente','ClienteController');
Route::resource('producto','ProductoController');
Route::resource('provedor','ProvedorController');

Route::get('/cancelar', function (){
    return redirect()->route('cliente.index')->with('cancelar','Accion Cancelada!');
    }
)->name('cancelar');

Route::get('/cliente/{id}/confirm','ClienteController@confirm')->name('cliente.confirm');

Route::get('/producto/{id}/confirm','ProductoController@confirm')->name('producto.confirm');

Route::get('/provedor/{id}/confirm','ProvedorController@confirm')->name('provedor.confirm');

Route::get('/conctacto','RetroPro@contacto')->name('RetroPro.contacto');
Route::get('/galeria','RetroPro@galeria')->name('RetroPro.galeria');
Route::get('/servicios','RetroPro@servicios')->name('RetroPro.servicios');
Route::get('/nosotros','RetroPro@nosotros')->name('RetroPro.nosotros');
