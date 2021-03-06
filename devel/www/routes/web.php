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

Route::get('/admin/perfiles/agregar', 'Admin\Usuario\PerfilesController@agregar')->name('adduser');
Route::get('/admin/perfiles/modificar', 'Admin\Usuario\PerfilesController@modificar')->name('moduser');

Route::post('/admin/perfiles/listausr', 'Admin\Usuario\PerfilesController@listausr')->name('getuser');
Route::get('/admin/perfiles/listausr', 'Admin\Usuario\PerfilesController@listausr')->name('getuser');
