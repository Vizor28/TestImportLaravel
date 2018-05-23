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

Route::get('/', 'HomeController@index');
Route::post('/import', 'ImportController@import');

Route::post('/make/update/{make}', 'MakeController@update');
Route::post('/make/delete/{make}', 'MakeController@delete');

Route::post('/model/update/{model}', 'ModelController@update');
Route::post('/model/delete/{model}', 'ModelController@delete');
