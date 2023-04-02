<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CartController;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');

Route::post('/cart/add/{id}', [CartController::class, 'cartAdd'])->name('cart-add');
Route::post('/cart/remove/{id}', [CartController::class, 'cartRemove'])->name('cart-remove');
Route::post('/cart/detach/{id}', [CartController::class, 'cartDetach'])->name('cart-detach');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/{category}', [MainController::class, 'category'])->name('category');
Route::get('/{category}/{product?}', [MainController::class, 'product'])->name('product');





