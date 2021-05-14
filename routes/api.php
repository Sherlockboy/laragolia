<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
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