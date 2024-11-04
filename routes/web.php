<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MikroTikController;

Route::get('/mikrotik/info', [MikroTikController::class, 'getRouterInfo']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/inicio', function () {
    return view('inicio');
})->name('Inicio');
