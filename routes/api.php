<?php

use App\Http\Controllers\PorfolioController;

use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('porfolios', PorfolioController::class );
Route::apiResource('posts', PostController::class);