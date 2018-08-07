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

Route::get('/','user\HomeController@index');
Route::get('/dayasos&fpm', 'user\DayasosController@index');
Route::get('/resos', 'user\ResosController@index');
Route::get('/linjamsos', 'user\LinjamsosController@index');