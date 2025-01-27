<?php

use App\Http\Controllers\EmployeeControlle;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/get-employee-data',[EmployeeControlle::class,'index']);
Route::post('/store-from',[EmployeeControlle::class,'store']);
Route::put('/user/{id}',[EmployeeControlle::class,'update']);
