<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::controller(ProductoController::class)->group(function() {
    Route::get('/productos', 'index');
    Route::post('/producto', 'store');
    Route::get('/producto/{id}', 'show');
    Route::put('/producto/{id}', 'update');
    Route::delete('/producto/{id}', 'destroy');


});