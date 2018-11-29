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

Route::resource('usuarios', 'UsuariosController');

Route::get('create', function () {
    return view('usuarios.create');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});



Route::get('verpdf', 'UsuariosController@verPDF')->name('Registro.pdf');

Route::get('descargarpdf', 'UsuariosController@descargarPDF')->name('Registro.pdf');

Route::resource('estadisticas', 'ChartController');