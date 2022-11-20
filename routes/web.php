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
use App\Http\Controllers\CatmaController;

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

Route::resource('categorias', CategoriaController::class);
Route::resource('tipos', TipoController::class);
Route::resource('departamentos', DepartamentoController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('marcas', MarcaController::class);
Route::resource('sucursals', SucursalController::class);
Route::resource('empleados', EmpleadoController::class);
Route::resource('ventas', VentaController::class);
Route::resource('detalles', DetalleController::class);
Route::resource('productos', ProductoController::class);
Route::resource('catma', CatmaController::class);
