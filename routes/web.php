<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/produk', [ProdukController::class, 'index'])
    ->name('produk.index');

Route::get('/produk/{id}',[ProdukController::class,'show'])
->name('produk.show');
