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
// Beranda
Route::get('/','user\HomeController@index');


// Resos
Route::get('/konten-resos-kemiskinan', 'user\ResosController@kemiskinan');
Route::get('/konten-resos-korbanbencana', 'user\ResosController@korban');
Route::get('/konten-resos-keterlantaran', 'user\ResosController@keterlantaran');
Route::get('/konten-resos-ketunaansosial', 'user\ResosController@ketunaan');
Route::get('/konten-resos-kedisabilitasan', 'user\ResosController@kedisabilitasan');
Route::get('/konten-resos-ktk', 'user\ResosController@ktk');
Route::get('/data-resos-uap', 'user\ResosController@dataUap');
Route::get('/data-resos-anak', 'user\ResosController@dataAnak');
Route::get('/data-resos-lansia', 'user\ResosController@dataLansia');
Route::get('/data-resos-abc', 'user\ResosController@dataAbc');


// Dayasos
Route::get('/dayasos&fpm-keseluruhan', 'user\DayasosController@index');
Route::get('/dayasos&fpm-rincian', 'user\DayasosController@rinci');


//linjamsos 
Route::get('/linjamsos', 'user\LinjamsosController@index');