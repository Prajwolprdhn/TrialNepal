<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Owner\OwnerController;
use App\Http\Controllers\User\UserController;


Route::get('/', function () {
    return view('welcome');
});

//Login Register
Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');
Route::get('/register',[UserController::class,'register'])->name('register')->middleware('guest');

//User
Route::get('/user/dashboard',[UserController::class,'dashboard'])->name('dashboard')->middleware('auth');


//storing user'
Route::post('/users',[UserController::class,'store']);

//authenticating user
Route::post('/users/authenticate',[UserController::class,'authenticate']);

// Log User Out
Route::get('/logout', [UserController::class,'logout'])->name('logout')->middleware('auth');


Route::get('/search',[UserController::class,'search']);