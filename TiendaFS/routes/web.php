<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\UsersController;
use Illuminate\Foundation\Auth\User;

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

Route::view('/login', 'auth.login');
Route::post('/login', [UsersController::class, 'authenticationLogin']);
Route::get('/register', [UsersController::class, 'create']);
Route::post('/register', [UsersController::class, 'store']);
