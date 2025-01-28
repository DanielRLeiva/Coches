<?php

use App\Http\Controllers\CochesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coches', [CochesController::class, 'index'])->name('listacoches');
Route::get('/coches/{id}', [CochesController::class, 'show'])->name('mostrarcoche');
Route::get('/crearcoche', [CochesController::class, 'create'])->name('crearcoche');
Route::post('/coches', [CochesController::class, 'store'])->name('guardarcoche');

Route::get('/editarcoche/{id}', [CochesController::class, 'edit'])->name('editarcoche');

Route::put('/editarcoche/{id}', [CochesController::class, 'update'])->name('actualizarcoche');

Route::delete('/coches/{id}', [CochesController::class, 'destroy'])->name('eliminarcoche');
