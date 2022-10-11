<?php

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

use \App\Models\Habitacion;

Route::get('/', [App\Http\Controllers\HotelController::class , 'index'])->name('home');
Route::get('/detalle/{id}', [App\Http\Controllers\HotelController::class , 'detalle'])->name('detalle');
Route::get('/reservar/{habitacion}', [App\Http\Controllers\HotelController::class , 'reservar'])->name('reservar.index');
Route::post('/reservar', [App\Http\Controllers\HotelController::class , 'guardar'])->name('reserva.guardar');

    /*
    |--------------------------------------------------------------------------
    | Rutas solo para el usuario autenticados
    |--------------------------------------------------------------------------
    */
Route::prefix('admin')->group(function () {
    Route::group(['middleware' => 'auth'], function () {
        Route::prefix('/platform')->group(function () {
            Route::get('ventas', 
            		[App\Http\Controllers\Admin\AdminController::class ,'index'])->name('admin.ventas');
            Route::get('reportes', 
            		[App\Http\Controllers\Admin\AdminController::class,'reporteView'])->name('admin.reportes.show');
            Route::post('reportes', 
                    [App\Http\Controllers\Admin\AdminController::class,'report'])->name('admin.reportes.generar');
        });
 
    });
});


Auth::routes();