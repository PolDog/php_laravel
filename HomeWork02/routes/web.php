<?php

use App\Http\Controllers\FormProcessorController;
use Illuminate\Support\Facades\Route;


Route::get('/userform',[FormProcessorController::class,'index']);
Route::post('/store_form',[FormProcessorController::class,'store'])->name('store');
