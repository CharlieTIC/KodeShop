<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\SubcategoriaController;

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::resource('categorias', CategoriaController::class);
Route::resource('subcategorias', SubcategoriaController::class);