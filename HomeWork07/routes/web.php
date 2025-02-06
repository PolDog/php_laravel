<?php

use App\Http\Controllers\UserHWController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFGenerateController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user_create',[UserHWController::class,'create']);
Route::get('/user',[UserHWController::class,'index']);
Route::get('/user/{id}',[UserHWController::class,'get']);
Route::post('/store-user',[UserHWController::class,'store']);
Route::get('/resume/{id}',[PDFGenerateController::class,'index']);
