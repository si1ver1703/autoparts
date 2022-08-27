<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'category'], function(){
    Route::get('/', App\Http\Controllers\Category\IndexController::class)->name('category.index');
    Route::get('/create', App\Http\Controllers\Category\CreateController::class)->name('category.create');
    Route::post('/', App\Http\Controllers\Category\StoreController::class)->name('category.store');
    Route::get('/{category}/edit', App\Http\Controllers\Category\EditController::class)->name('category.edit');
    Route::get('/{category}', App\Http\Controllers\Category\ShowController::class)->name('category.show');
    Route::patch('/{category}', App\Http\Controllers\Category\UpdateController::class)->name('category.update');
    Route::delete('/{category}', App\Http\Controllers\Category\DeleteController::class)->name('category.delete');
});

Route::group(['prefix' => 'user'], function(){
    Route::get('/', App\Http\Controllers\User\IndexController::class)->name('user.index');
    Route::get('/create', App\Http\Controllers\User\CreateController::class)->name('user.create');
    Route::post('/', App\Http\Controllers\User\StoreController::class)->name('user.store');
    Route::get('/{user}/edit', App\Http\Controllers\User\EditController::class)->name('user.edit');
    Route::get('/{user}', App\Http\Controllers\User\ShowController::class)->name('user.show');
    Route::patch('/{user}', App\Http\Controllers\User\UpdateController::class)->name('user.update');
    Route::delete('/{user}', App\Http\Controllers\User\DeleteController::class)->name('user.delete');
});

Route::group(['prefix' => 'product'], function(){
    Route::get('/', App\Http\Controllers\Product\IndexController::class)->name('product.index');
    Route::get('/create', App\Http\Controllers\Product\CreateController::class)->name('product.create');
    Route::post('/', App\Http\Controllers\Product\StoreController::class)->name('product.store');
    Route::get('/{product}/edit', App\Http\Controllers\Product\EditController::class)->name('product.edit');
    Route::get('/{product}', App\Http\Controllers\Product\ShowController::class)->name('product.show');
    Route::patch('/{product}', App\Http\Controllers\Product\UpdateController::class)->name('product.update');
    Route::delete('/{product}', App\Http\Controllers\Product\DeleteController::class)->name('product.delete');
});

Route::get('admin', App\Http\Controllers\Main\IndexController::class)->name('main.index');

Route::get('/', function () {
    return view('welcome');
});
