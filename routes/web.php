<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\UserController;

Route::controller(AuthController::class)->group(function(){   
    Route::get('/', function () {
        return view('auth.login');
    });
    Route::get('/register', function () {   
        return view('auth.register');
    });
});

Route::get('/dashboard',function(){
    return view('dashboard');
});

Route::controller(AccountController::class)->group(function(){
    Route::name('accounts.')->group(function(){
        Route::get('/accounts', 'index')->name('index');
        Route::get('/accounts/{account}', 'show')->name('show');
        Route::get('/accounts/create', 'create')->name('create');
        Route::get('/accounts/edit/{account}', 'edit')->name('edit');
        Route::post('/accounts/store', 'store')->name('store');
        Route::post('/accounts/update/{account}', 'update')->name('update');
        Route::post('/accounts/delete/{account}', 'delete')->name('delete');
    });
});

Route::controller(UserController::class)->group(function(){
    Route::name('user.')->group(function(){
        Route::get('/accounts/{account}', 'show')->name('show');
        Route::get('/accounts/edit/{account}', 'edit')->name('edit');        
        Route::post('/accounts/delete/{account}', 'delete')->name('delete');
    });     
});