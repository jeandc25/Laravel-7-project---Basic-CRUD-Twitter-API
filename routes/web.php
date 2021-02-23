<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','Guestcontroller@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/entries/create', 'EntryController@create')->name('entrycreate');
Route::post('/entries', 'EntryController@store');

Route::get('/entries/{entry}', 'Guestcontroller@show');
Route::get('/entries/{entry}/edit', 'EntryController@edit');
Route::put('/entries/{entry}', 'EntryController@update');

Route::get('/users/{user}', 'UserController@show');

Route::get('/categorias/crear', 'CategoriasController@create')->name('crearcategoria');
Route::post('/categorias', 'CategoriasController@store');

Route::get('/categorias/mostrar', 'listcatcontroller@show');

