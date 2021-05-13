<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------
| API Routes
|--------------------------------------------
*/

Route::apiResources([
    'clients' => ClientController::class
]);