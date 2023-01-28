<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuperAdmin\SistemasController;
use Illuminate\Support\Facades\Route;



 Route::view('login', 'Auth/Login')->name('login')->middleware('guest');
 Route::view('/', 'SuperAdmin/Dashboard/Dashboard')->name('dashboard')->middleware('auth');



Route::post('login',[LoginController::class, 'login']);
Route::post('logout',[LoginController::class, 'logout']);

Route::resource('sistemas', SistemasController::class)->middleware('auth');


Route::view('/productos_globales','SuperAdmin/ProductosGloables/ProductosGlobales');
Route::view('/usuarios','SuperAdmin/Usuarios/Usuarios')->name('usuarios');
Route::view('/galerias','SuperAdmin/Galerias/Galerias')->name('galerias');