<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','User\HomeController@index');
Route::get('/home','User\HomeController@index');

// Resos
Route::get('/konten-resos-kemiskinan', 'User\ResosController@kemiskinan');
Route::get('/konten-resos-korbanbencana', 'User\ResosController@korban');
Route::get('/konten-resos-keterlantaran', 'User\ResosController@keterlantaran');
Route::get('/konten-resos-ketunaansosial', 'User\ResosController@ketunaan');
Route::get('/konten-resos-kedisabilitasan', 'User\ResosController@kedisabilitasan');
Route::get('/konten-resos-ktk', 'User\ResosController@ktk');
Route::get('/konten-resos-pmks', 'User\ResosController@pmks');
Route::get('/konten-resos-psks', 'User\ResosController@psks');
Route::get('/data-resos-uep', 'User\ResosController@dataUep');
Route::get('/data-resos-anak', 'User\ResosController@dataAnak');
Route::get('/data-resos-lansia', 'User\ResosController@dataLansia');
Route::get('/data-resos-abc', 'User\ResosController@dataAbc');



// Dayasos
Route::get('/dayasos&fpm-keseluruhan', 'User\DayasosController@index');
Route::get('/dayasos&fpm-rincian', 'User\DayasosController@rinci');


//linjamsos 
Route::get('/linjamsos', 'User\LinjamsosController@index');
