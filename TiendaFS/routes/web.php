<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ProductosController;
use app\Http\Controllers\ProveedoresController;
use app\Http\Controllers\Detalles_PedidoController;
use app\Http\Controllers\DireccionesController;
use app\Http\Controllers\Ofertas_EspecialesController;
use app\Http\Controllers\PedidosController;
use app\Http\Controllers\Productos_has_Ofertas_EspecialesController;
use app\Http\Controllers\ResenasController;
use app\Http\Controllers\TicketsController;
use app\Http\Controllers\User_has_DireccionesController;
use app\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('productos', ProductosController::class);
Route::resource('proveedores', ProveedoresController::class);
Route::resource('detalles_pedido', Detalles_PedidoController::class);
Route::resource('direcciones', DireccionesController::class);
Route::resource('ofertas_especiales', Ofertas_EspecialesController::class);
Route::resource('pedidos', PedidosController::class);
Route::resource('productos_has_ofertas_especiales', Productos_has_Ofertas_EspecialesController::class);
Route::resource('resenas', ResenasController::class);
Route::resource('tickets', TicketsController::class);
Route::resource('usuarios_has_direcciones', User_has_DireccionesController::class);
Route::resource('user', UserController::class);
