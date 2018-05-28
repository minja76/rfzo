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



Route::get('/', 'RadnikController@searchall');
Route::get('/searchall', 'RadnikController@searchall');
Route::get('/show/{id}', 'RadnikController@show');




Route::get('/dokument/create/{id}', ['as' => 'dokumentinsert', 'uses' =>'DokumentController@create']);

Route::post('/dokument/store', 'DokumentController@store');
Route::delete('/dokument/{id}', 'DokumentController@destroy');



