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
    return view('auth.login');
});

//Types
Route::get('/type','TypeController@index');
Route::get('/type/create','TypeController@create');
Route::post('/type', 'TypeController@store');
Route::delete('/type/{id}', 'TypeController@destroy');
Route::get('/type/{id}/edit', 'TypeController@edit');
Route::patch('/type/{id}','TypeController@update');

//Targets
Route::get('/target','TargetController@index');
Route::get('/target/create','TargetController@create');
Route::post('/target', 'TargetController@store');
Route::delete('/target/{id}', 'TargetController@destroy');
Route::get('/target/{id}/edit', 'TargetController@edit');
Route::patch('/target/{id}','TargetController@update');

//Quality
Route::get('/quality','QualityController@index');
Route::get('/quality/create','QualityController@create');
Route::post('/quality', 'QualityController@store');
Route::delete('/quality/{id}', 'QualityController@destroy');
Route::get('/quality/{id}/edit', 'QualityController@edit');
Route::patch('/quality/{id}','QualityController@update');

//Speed
Route::get('/speed','SpeedController@index');
Route::get('/speed/create','SpeedController@create');
Route::post('/speed', 'SpeedController@store');
Route::delete('/speed/{id}', 'SpeedController@destroy');
Route::get('/speed/{id}/edit', 'SpeedController@edit');
Route::patch('/speed/{id}','SpeedController@update');

//Card
Route::get('/card','CardController@index');
Route::get('/card/create','CardController@create');
Route::post('/card', 'CardController@store');
Route::delete('/card/{id}', 'CardController@destroy');
Route::get('/card/{id}/edit', 'CardController@edit');
Route::patch('/card/{id}','CardController@update');


Auth::routes(['register'=>false]);
Route::get('/home', 'HomeController@index')->name('home');
