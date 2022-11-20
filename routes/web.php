<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\DetalleController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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


Route::view('login', 'login')->name('login')->middleware('guest');
Route::resource('categorias', CategoriaController::class)->middleware('auth');
Route::resource('tipos', TipoController::class)->middleware('auth');
Route::resource('departamentos', DepartamentoController::class)->middleware('auth');
Route::resource('clientes', ClienteController::class)->middleware('auth');
Route::resource('marcas', MarcaController::class)->middleware('auth');
Route::resource('sucursals', SucursalController::class)->middleware('auth');
Route::resource('empleados', EmpleadoController::class)->middleware('auth');
Route::resource('ventas', VentaController::class)->middleware('auth');
Route::resource('detalles', DetalleController::class)->middleware('auth');
Route::resource('productos', ProductoController::class)->middleware('auth');
Route::resource('user', UserController::class)->middleware('auth');

Route::post('login', [UserController::class, 'login']);
Route::post('logout', [UserController::class, 'logout']);
