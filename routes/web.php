<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// User Routes
Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'index')->name('users.index');
    Route::get('/users/{user}', 'show')->name('users.show');
    Route::get('/users/create', 'create')->name('users.create');
    Route::post('/users', 'store')->name('users.store');
    Route::get('/users/{user}/edit', 'edit')->name('users.edit');
    Route::put('/users/{user}', 'update')->name('users.update');
    Route::delete('/users/{user}', 'destroy')->name('users.destroy');
});

// Product Routes
Route::controller(ProductController::class)->group(function () {
    Route::get('/products', 'index')->name('products.index');
    Route::get('/products/{product}', 'show')->name('products.show');
    Route::get('/products/create', 'create')->name('products.create');
    Route::post('/products', 'store')->name('products.store');
    Route::get('/products/{product}/edit', 'edit')->name('products.edit');
    Route::put('/products/{product}', 'update')->name('products.update');
    Route::delete('/products/{product}', 'destroy')->name('products.destroy');
});

// Order Routes
Route::controller(OrderController::class)->group(function () {
    Route::get('/orders', 'index')->name('orders.index');
    Route::get('/orders/{order}', 'show')->name('orders.show');
    Route::get('/orders/create', 'create')->name('orders.create');
    Route::post('/orders', 'store')->name('orders.store');
    Route::get('/orders/{order}/edit', 'edit')->name('orders.edit');
    Route::put('/orders/{order}', 'update')->name('orders.update');
    Route::delete('/orders/{order}', 'destroy')->name('orders.destroy');
});

// OrderItem Routes
Route::controller(OrderItemController::class)->group(function () {
    Route::get('/order-items', 'index')->name('order-items.index');
    Route::get('/order-items/{orderItem}', 'show')->name('order-items.show');
    Route::get('/order-items/create', 'create')->name('order-items.create');
    Route::post('/order-items', 'store')->name('order-items.store');
    Route::get('/order-items/{orderItem}/edit', 'edit')->name('order-items.edit');
    Route::put('/order-items/{orderItem}', 'update')->name('order-items.update');
    Route::delete('/order-items/{orderItem}', 'destroy')->name('order-items.destroy');
});

// Cart Routes
Route::controller(CartController::class)->group(function () {
    Route::get('/carts', 'index')->name('carts.index');
    Route::get('/carts/{cart}', 'show')->name('carts.show');
    Route::get('/carts/create', 'create')->name('carts.create');
    Route::post('/carts', 'store')->name('carts.store');
    Route::get('/carts/{cart}/edit', 'edit')->name('carts.edit');
    Route::put('/carts/{cart}', 'update')->name('carts.update');
    Route::delete('/carts/{cart}', 'destroy')->name('carts.destroy');
});

// Review Routes
Route::controller(ReviewController::class)->group(function () {
    Route::get('/reviews', 'index')->name('reviews.index');
    Route::get('/reviews/{review}', 'show')->name('reviews.show');
    Route::get('/reviews/create', 'create')->name('reviews.create');
    Route::post('/reviews', 'store')->name('reviews.store');
    Route::get('/reviews/{review}/edit', 'edit')->name('reviews.edit');
    Route::put('/reviews/{review}', 'update')->name('reviews.update');
    Route::delete('/reviews/{review}', 'destroy')->name('reviews.destroy');
});
