<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ViewsController;

Route::get('/', function () {
    return view('login-register');
});

Route::resource('/user', 'App\Http\Controllers\UserController');
Route::get('/admin/users', 'App\Http\Controllers\admin\UserController@index')->name('admin.users.index');
Route::get('/admin/properties', 'App\Http\Controllers\admin\PropertyController@index')->name('admin.properties.index');
Route::get('/views/search', [ViewsController::class, 'search'])->name('views.search');
Route::get('/property/search', [PropertyController::class, 'search'])->name('property.search');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::match(['post', 'put', 'patch'], '/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
Route::get('/my-profile', [UserController::class, 'show'])->name('user.show');
//Route::put('/views/show', 'ViewsController@index')->name('views.show');
Route::get('/home/{id}', 'UserController@home')->name('home');

Route::resource('/views', 'App\Http\Controllers\ViewsController');
Route::resource('/property', 'App\Http\Controllers\PropertyController');



Route::post('/index', [UserController::class, 'login'])->name('index');
Route::get('/index', [UserController::class, 'home'])->name('home');
