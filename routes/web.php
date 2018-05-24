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

Route::get('/', 'UserController@getIndex');
// definicion de rutas
Route::get('/users', 'UserController@getUsers');
Route::get('/users/add', 'UserController@addUser');
Route::post('/users','UserController@postUser');
