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
Route::get('/','User\HomeController@index');


// Resos
Route::get('/konten-resos-kemiskinan', 'User\ResosController@kemiskinan');
Route::get('/konten-resos-korbanbencana', 'User\ResosController@korban');
Route::get('/konten-resos-keterlantaran', 'User\ResosController@keterlantaran');
Route::get('/konten-resos-ketunaansosial', 'User\ResosController@ketunaan');
Route::get('/konten-resos-kedisabilitasan', 'User\ResosController@kedisabilitasan');
Route::get('/konten-resos-ktk', 'User\ResosController@ktk');
Route::get('/data-resos-uap', 'User\ResosController@dataUap');
Route::get('/data-resos-anak', 'User\ResosController@dataAnak');
Route::get('/data-resos-lansia', 'User\ResosController@dataLansia');
Route::get('/data-resos-abc', 'User\ResosController@dataAbc');


// Dayasos
Route::get('/dayasos&fpm-keseluruhan', 'User\DayasosController@index');
Route::get('/dayasos&fpm-rincian', 'User\DayasosController@rinci');


//linjamsos 
Route::get('/linjamsos', 'User\LinjamsosController@index');