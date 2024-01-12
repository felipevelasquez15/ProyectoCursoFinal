<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\ResenaController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\CompraController;
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

// Rutas públicas

Route::get('/', function () {
    return view('inicio');
});


Route::get('/inicio', 'App\Http\Controllers\InicioController@index')->name('inicio');
Route::get('/nosotros', 'App\Http\Controllers\NosotrosController@index')->name('nosotros');
Route::get('/catalogo', 'App\Http\Controllers\CatalogoController@mostrarAutos')->name('catalogo');

Route::post('/comprar/{id}', 'App\Http\Controllers\CarritoController@comprar')->name('carritos.comprar');//envía una solicitud POST a '/comprar/{id}', Laravel ejecutará el método comprar en la clase CarritoController.

// Rutas protegidas por autenticación que la da jetstream
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

    // Rutas del administrador

    Route::middleware(['auth:sanctum', 'verified'])->middleware('auth.admin')->prefix('admin')->group(function () {  
        Route::resource('autos', AutoController::class);//Genera automáticamente rutas CRUD (create, read, update, delete) para el recurso 'autos' utilizando el controlador AutoController
        Route::get('/compras', [compraController::class, 'mostrarCompras'])->name('compras');
        Route::get('dashboard', function () {//establece un grupo de rutas con middleware, prefijo y rutas específicas para administrar autos y compras dentro del área administrativa
            return view('dashboard');
        });
    });

    // Rutas del usuario

    Route::middleware(['auth:sanctum', 'verified'])->prefix('user')->group(function () {  
        Route::resource('resenas', ResenaController::class);
        Route::resource('carritos', CarritoController::class);
        Route::get('dashboard', function () {
            return view('dashboard');
        });
    });




    
    
    
