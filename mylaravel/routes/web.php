<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\NewMyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "<h1>Hellow World!!!!!</h1>";
});

Route::get("/mycontroller/{id?}", 
[MyController::class, 'myfunction']);

Route::post("/mycontroller/{id?}", 
[MyController::class, 'myfunction']);

Route::get("/newmycontroller/{id?}", 
[NewMyController::class, 'abc']);

Route::post("/newmycontroller/{id?}", 
[NewMyController::class, 'abc']);