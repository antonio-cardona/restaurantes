<?php

use App\Http\Controllers\RestaurantesController;
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

Route::get('/', function () {
    return view('restaurantes.lista');
})->name('home');

Route::prefix('restaurantes')->group(function () {
    Route::get('crear', [RestaurantesController::class, 'create']);
    Route::post('store', [RestaurantesController::class, 'store']);
    Route::get('eliminar', [RestaurantesController::class, 'destroy']);
    Route::get('actualizar', [RestaurantesController::class, 'edit']);

    Route::get('lista', [RestaurantesController::class, 'index']);
});

Route::get('reservas/lista', function () {
    return view('reservas.lista');
});
