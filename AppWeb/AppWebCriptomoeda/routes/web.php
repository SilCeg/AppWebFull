<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CriptomoedaController;

Route::get('/', [CriptomoedaController::class,'index'])->name('criptomoedas.index');

Route::get('/create', [CriptomoedaController::class,'create'])->name('criptomoedas.create');

Route::post('/store', [CriptomoedaController::class,'store'])->name('criptomoedas.store');

Route::get('/edit/{id}' , [CriptomoedaController::class, 'edit'])->name('criptomoedas.edit');

Route::post('/update/{id}', [CriptomoedaController::class, 'update'])->name('criptomoedas.update');

Route::get('/delete/{id}', [CriptomoedaController::class, 'destroy'])->name('criptomoedas.destroy');