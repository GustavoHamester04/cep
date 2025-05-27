<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CepController;

Route::get('/', [CepController::class, 'index'])->name('ceps.index');
Route::post('/buscar', [CepController::class, 'buscar'])->name('ceps.buscar');
Route::get('/listar', [CepController::class, 'listar'])->name('ceps.listar');
Route::post('/salvar', [CepController::class, 'store'])->name('ceps.store');
