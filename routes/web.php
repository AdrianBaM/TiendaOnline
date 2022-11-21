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
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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

Route::resource('Admin', AdminController::class)->middleware('auth');
Route::resource('Manager', ManagerController::class)->middleware('auth');

Route::post('login', [UserController::class, 'login']);
Route::post('logout', [UserController::class, 'logout']);

Route::resource('checkout', CheckoutController::class)->middleware('auth');

Route::get('/shop', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');

