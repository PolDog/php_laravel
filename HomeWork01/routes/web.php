<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\TestController2;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDBController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',[TestController::class,'index']);
Route::get('/test2',TestController2::class);

Route::get('/users',[UserDBController::class,'showUsers']);

Route::get('/show_users',UserController::class);
