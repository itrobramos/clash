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

Route::get('/type','TypeController@index');
Route::get('/type/create','TypeController@create');
Route::post('/type', 'TypeController@store');
Route::delete('/type/{id}', 'TypeController@destroy');
Route::get('/type/{id}/edit', 'TypeController@edit');
Route::patch('/type/{id}','TypeController@update');