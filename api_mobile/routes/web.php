<?php

use App\Http\Controllers\Api\CustomerApiController;
use App\Http\Controllers\Api\ProductApiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductApiController::class, 'index']);

Route::get('/customer', [CustomerApiController::class, 'index']);


