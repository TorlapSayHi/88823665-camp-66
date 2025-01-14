<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\NewMyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 
    [LoginController::class, 'index']);
    
Route::get('/register', 
    [RegisterController::class, 'index']);

Route::get('/home', 
    [HomeController::class, 'index']);

Route::get('/hello', function () {
    return "<h1>Hellow World!!!!!</h1>";
});

Route::get("/mycontroller/{id?}", 
[MyController::class, 'myfunction']);

Route::post("/mycontroller/{id?}", 
[MyController::class, 'myfunction']);

Route::get("/newmycontroller/{id?}", 
[NewMyController::class, 'multiplicationtable']);

Route::post("/newmycontroller/{id?}", 
[NewMyController::class, 'multiplicationtable']);

Route::get('/', function (){
    return view('layouts.default');
});
