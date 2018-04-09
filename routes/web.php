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

Route::get('prueba', function(){
	return "Hola mundo route.php";
});

Route::get('/', 'PagesController@index');
Route::get('/Empresas', 'PagesController@EmpresasEmpleadorasView');
Route::get('controlador','PruebaController@index');

Route::resource('egresados','EgresadosController');
