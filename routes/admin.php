<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Owner\OwnerController;
use App\Http\Controllers\User\UserController;


//Admin

Route::middleware(['isAdmin'])->group(function () {
    Route::get('dashboard',[AdminController::class,'dashboard'])->name('admindashboard')->middleware('auth');
    Route::get('form',[AdminController::class,'index'])->name('form')->middleware('auth');
    Route::get('admin_detail',[AdminController::class,'admin_detail'])->name('admin_detail')->middleware('auth');
    Route::get('owner_detail',[AdminController::class,'owner_detail'])->name('owner_detail')->middleware('auth');
    Route::get('user_detail',[AdminController::class,'user_detail'])->name('user_detail')->middleware('auth');

    Route::get('asset',[AdminController::class,'asset'])->name('asset')->middleware('auth');
    Route::get('asset_form',[AdminController::class,'asset_form'])->name('asset_form')->middleware('auth');
    

    //Create user
    Route::post('store',[AdminController::class,'store'])->name('store')->middleware('auth');

    //edit user
    Route::get('/form/edit/{user}',[AdminController::class,'edit'])->name('edit')->middleware('auth');
    Route::put('/form/edit/{user}',[AdminController::class,'update'])->name('update')->middleware('auth');


    //Delete user
    // Route::post('deletion',[UserController::class,'deletion'])->name('deletion')->middleware('auth');
    Route::delete('/form/{user}',[UserController::class,'deletion']);

    //Add user
    Route::get('addUser',[AdminController::class,'addUser'])->name('addUser')->middleware('auth');
    
});

