<?php

use App\Http\Controllers\SuperAdmin\SistemasController;
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

/* Route::get('/', function () {
    return view('welcome');
});
 */

Route::resource('sistemas', SistemasController::class);

Route::view('/', 'SuperAdmin/Dashboard/Dashboard')->name('Dashboard');

Route::view('/productos_globales','SuperAdmin/ProductosGloables/ProductosGlobales');
Route::view('/usuarios','SuperAdmin/Usuarios/Usuarios')->name('usuarios');
Route::view('/galerias','SuperAdmin/Galerias/Galerias')->name('galerias');