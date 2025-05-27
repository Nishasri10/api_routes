<?php

use App\Http\Controllers\drController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/drData',[drController::class,'store']);
Route::get('/drlist',[drController::class,'index']);
Route::put('/updatelist',[drController::class,'update']);
Route::delete('/deletedr',[drController::class,'delete']);
Route::get('/drfetch/{Department}',[drController::class,'fetch']);