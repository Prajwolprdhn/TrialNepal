<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetsController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Owner\OwnerController;
use App\Http\Controllers\All_AssetController;


//Admin

Route::middleware(['isAdmin'])->group(function () {
    Route::get('dashboard',[AdminController::class,'dashboard'])->name('admindashboard')->middleware('auth');
    Route::get('form',[AdminController::class,'index'])->name('form')->middleware('auth');
    Route::get('admin_detail',[AdminController::class,'admin_detail'])->name('admin_detail')->middleware('auth');
    Route::get('owner_detail',[AdminController::class,'owner_detail'])->name('owner_detail')->middleware('auth');
    Route::get('user_detail',[AdminController::class,'user_detail'])->name('user_detail')->middleware('auth');

    //assets
    Route::get('asset',[AssetsController::class,'asset'])->name('asset')->middleware('auth');
    Route::get('asset_form',[AssetsController::class,'asset_form'])->name('asset_form')->middleware('auth');
    Route::post('asset_store',[AssetsController::class,'asset_store'])->name('asset_store')->middleware('auth');

    //assets_table
    Route::get('/asset/{category}',[All_AssetController::class,'asset'])->name('allasset')->middleware('auth');

    //assets_table_add
    Route::post('/assest/addasset',[All_AssetController::class,'asset_store'])->name('storeasset')->middleware('auth');



    Route::get('/assest/addasset',[All_AssetController::class,'addasset'])->name('addasset')->middleware('auth');
    

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

