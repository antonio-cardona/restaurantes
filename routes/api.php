<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'prefix' => 'restaurantes'
], function (){
    // Mapeamos "/api/restaurantes/lista" a la acción "lista" del controlador.
    Route::post('lista', [RestaurantesController::class, 'lista']);

    // Mapeamos "/api/restaurantes/reservar_mesa" a la acción "reservar_mesa" del controlador.
    Route::post('reservar_mesa', [RestaurantesController::class, 'reservarMesa']);
});
