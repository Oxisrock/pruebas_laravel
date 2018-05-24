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
// definicion de rutas
Route::get('/users',	function()
{
				return	'¡Ruta para la vista de usuarios!';
});
Route::get('/users/add',	function()
{
				return	view('add');
});
