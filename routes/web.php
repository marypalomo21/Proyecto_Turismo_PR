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

Route::get('mapa', function(){
	return view('mapa');
});

Route::get('historia', function(){
	return view('historia');
});

 Route::get('lugares', function(){
 	return view('lugares');
 });

 Route::resource('registros', 'RegistrosController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
