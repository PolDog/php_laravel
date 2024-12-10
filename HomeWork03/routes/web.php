<?php

use App\Models\Employee;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test_database',function(){
    $emplloyee = new Employee();
    $emplloyee->save();
});
