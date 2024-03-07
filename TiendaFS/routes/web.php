<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ProductosController;
use app\Http\Controllers\ProveedoresController;


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

Route::resource('productos', ProductosController::class);
Route::resource('proveedores', ProveedoresController::class);

Route::get('/productos', ProductosController::class . '@index')->name('productos.index');
Route::get('/proveedores', ProveedoresController::class . '@index')->name('proveedores.index');
