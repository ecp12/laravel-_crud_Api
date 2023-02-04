<?php

use App\Http\Controllers\PorfolioController;
use App\Http\Controllers\ImageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('porfolios', PorfolioController::class );
Route::post('images', [ImageController::class, 'upload']);
