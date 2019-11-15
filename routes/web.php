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

Auth::routes();

Route::get('/', 'HomeController@inicio')->name('inicio');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/loginCustom', 'CustomLoginController@login')->name('custom.login');

Route::prefix('ofertas')->middleware('auth')->group(function (){
    Route::get('/' , 'OfertasController@ofertas')->name('ofertas.admin');
    Route::get('/crear' , 'OfertasController@crearOferta')->name('ofertas.crear');
    Route::post('/registrar' , 'OfertasController@registrarOferta')->name('ofertas.registrar');
    Route::get('/editar/{id}' , 'OfertasController@editarOferta')->name('ofertas.editar');
    Route::post('/actualizar/{id}' , 'OfertasController@actualizarOferta')->name('ofertas.actualizar');
    Route::get('/categoria/{cat}' , 'OfertasController@ofertasCategoria')->name('ofertas.admin.categoria');
 });

Route::prefix('usuarios')->middleware('auth')->group(function (){
    Route::get('/' , 'UsuariosController@usuarios')->name('usuarios.admin');
 });

Route::prefix('empresas')->middleware('auth')->group(function (){
    Route::get('/' , 'EmpresasController@empresas')->name('empresas.admin');
 });

Route::prefix('reservas')->middleware('auth')->group(function (){
    Route::get('/' , 'ReservasController@reservas')->name('reservas.admin');
 });
