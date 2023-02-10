<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Owner\OwnerController;
use App\Http\Controllers\User\UserController;


Route::middleware(['isOwner'])->group(function () {
//Owner
Route::get('dashboard',[OwnerController::class,'dashboard'])->name('dashboard')->middleware('auth');

});