<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------
| API Routes
|--------------------------------------------
*/

Route::apiResources([
    'clients' => ClientController::class,
    'products' => ProductController::class
]);

Route::get('search', [SearchController::class, 'search'])->name('search');