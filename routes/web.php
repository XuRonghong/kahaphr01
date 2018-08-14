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

Route::get('/',  'indexController@index');
Route::get('add',  'indexController@add');
Route::post('doadd',  'indexController@doAdd');
Route::post('dodel',  'indexController@doDel');
Route::get('edit/{id}',  'indexController@edit');
Route::post('dosave',  'indexController@doSave');
