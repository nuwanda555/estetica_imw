<?php

// mysql -h localhost -u root estetica < estetica.sql

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth'])
    ->name('dashboard');

require __DIR__ . '/auth.php';

Route::resource('/clientes', ClienteController::class);
Route::resource('/proveedores', ProveedorController::class);
/*

Route::get('/clientes/create', [ClienteController::class, 'create'])->name(
    'crear_cliente'
);

Route::get('/clientes', [ClienteController::class, 'index'])->name(
    'listado_clientes'
);
Route::get('/clientes/{cliente}', [ClienteController::class, 'destroy'])->name(
    'borrar_cliente'
);

Route::post('/clientes', [ClienteController::class, 'store'])->name(
    'guardar_cliente'
);

Route::get('/clientes/{cliente}/edit', [
    ClienteController::class,
    'edit',
])->name('editar_cliente');


*/
