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

Route::get('/estado', function () {
    return view('estado');
});

Route::get('/historial', function () {
    return view('historial');
});

Route::get('/tranferencia', function () {
    return view('tranferencia');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
