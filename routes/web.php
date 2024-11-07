<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MikroTikController;

Route::get('/mikrotik/info', [MikroTikController::class, 'getRouterInfo']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () { return view('auth.login'); })->name('login.form'); 

Route::post('/login', [MikroTikController::class, 'login'])->name('login');

Route::get('/inicio', function () {
    return view('inicio');
})->name('Inicio');


Route::get('/mikrotik/address', function () {
    return view('address');
})->name('mikrotik.address.form');

Route::post('', [MikroTikController::class, 'updateIp'])->name('update.ip');




Route::get('/crear/usuario', function () {
    return view('Users.CrearUsuario');
})->name('Usuario');

Route::get('/Internet', function () {
    return view('queues');
})->name('Internet');



//Route::post('/mikrotik/address', [MikrotikController::class, 'updateAddress'])->name('mikrotik.address.update');