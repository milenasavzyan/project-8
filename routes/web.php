<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('login-register');
});
Route::resource('/views', 'App\Http\Controllers\ViewsController');
Route::resource('/property', 'App\Http\Controllers\PropertyController');
Route::post('/user/insert', [UserController::class, 'insert'])->name('user.insert');
Route::post('/index', [UserController::class, 'login'])->name('index');
//Route::post('/property', [PropertyController::class, 'index'])->name('property');
