<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('username', [userController::class, 'getUserName']);
Route::get('user/{name}', [userController::class, 'dynamicName']);
Route::view('about', 'about');
Route::get('about-company', [userController::class, 'about']);

// Admin Routes
Route::get('admin-login', [AdminController::class, 'login']);
Route::view('login', 'admin.login');
