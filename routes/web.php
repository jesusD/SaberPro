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
    return view('index');
});
Route::get('/IniciarSesion', function(){
    return view('user.iniciarSesion');
});
Route::get('/Estudiante',function(){
    return view('estudiante.principal');
});
/*
Route::get('/Administrador',function(){
    return view('admin.principal');
}) */;

Route::get('Administrador','ArchivoController@index');
