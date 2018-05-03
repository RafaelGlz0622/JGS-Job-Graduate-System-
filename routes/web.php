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
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/', 'PagesController');
Route::get('/Empresas' , 'PagesController@EmpresasEmpleadorasView');
Route::get('/{id}' , 'PagesController@show');

Route::resource('egresados','EgresadosController');
Route::resource('vacants' , 'VacantController');


