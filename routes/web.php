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

Route::get('/', 'HomeController@inicio')->name('inicio')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
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
    Route::get('/editar/{id}' , 'UsuariosController@editar')->name('usuarios.admin.editar');
    Route::post('/actualizar/{id}' , 'UsuariosController@actualizar')->name('usuarios.admin.actualizar');
 });

Route::prefix('empresas')->middleware('auth')->group(function (){
    Route::get('/' , 'EmpresasController@empresas')->name('empresas.admin');
    Route::get('/editar/{id}' , 'EmpresasController@editar')->name('empresas.admin.editar');
    Route::post('/actualizar/{id}' , 'EmpresasController@actualizar')->name('empresas.admin.actualizar');
 });

Route::prefix('reservas')->middleware('auth')->group(function (){
    Route::get('/' , 'ReservasController@reservas')->name('reservas.admin');
 });

Route::prefix('codigos')->middleware('auth')->group(function (){
    Route::get('/' , 'CodigosController@codigos')->name('codigos.admin');
    Route::get('/cargar' , 'CodigosController@cargar')->name('codigos.cargar.admin');
 });

Route::prefix('banners')->middleware('auth')->group(function (){
    Route::get('/' , 'BannersController@banners')->name('banners.admin');
 });

Route::prefix('mailing')->middleware('auth')->group(function (){
    Route::get('/' , 'MailingController@mailing')->name('mailing.admin');
 });

Route::prefix('api')->middleware('cors')->group(function (){
    Route::get('/ofertas' , 'ApiController@ofertas')->name('api.ofertas');
    Route::get('/oferta/{id}' , 'ApiController@getOferta')->name('api.get.oferta');
    Route::get('/categorias' , 'ApiController@categorias')->name('api.categorias');
    Route::get('/userlog' , 'ApiController@iniciarSesion')->name('api.login');
    Route::get('/userconsulta' , 'ApiController@consultarUsuario')->name('api.usuario');
    Route::get('/reservas/{user}' , 'ApiController@getReservasUser')->name('api.reservas.usuario');
    Route::get('/reservar' , 'ApiController@reservar')->name('api.reservar');
 });
