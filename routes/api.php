<?php

use App\Http\Controllers\PorfolioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('porfolios', PorfolioController::class );
