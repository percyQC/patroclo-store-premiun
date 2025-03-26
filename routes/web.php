<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\SubCategoriaController;

Route::get('/', function () { return view('welcome'); });

Route::get('/categorias', [CategoriaController::class,'index'])->name('categorias.index');

Route::get('/subcategorias/{id_categoria}', [SubcategoriaController::class, 'index'])->name('subcategorias.index');
