<?php

use App\Http\Controllers\PorfolioController;

use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageDB;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('upload',[ImageDB::class,'saveImage']);
Route::get('list',[ImageDB::class,'dataList']);
Route::get('delete/{id}',[ImageDB::class,'deleteImg']);

Route::apiResource('porfolios', PorfolioController::class );
Route::apiResource('posts', PostController::class);