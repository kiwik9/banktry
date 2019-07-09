<?php
use App\Cuenta;
use Carbon\Carbon;
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

Route::get('/tarjeta', function () {

    $time = Carbon::now();
    Cuenta::create([
        'nrmcuenta' => Str::random(12),
        'propietario'=> Auth::user()->id,
        'saldo' => 500.0,
        'creado' => $time,
        'vence' => '2021-10-28 00:00:00',
    ]);
    return view('home');

    return view('home');
})->name('creartarjeta');
