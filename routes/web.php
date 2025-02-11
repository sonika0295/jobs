<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskProviderController;
use App\Http\Controllers\TaskSeekerController;
use Illuminate\Support\Facades\Artisan;

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('optimize:clear');
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('view:cache');

    return 'Cache cleared, optimized, and .env file refreshed successfully.';
});


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/signup',  'signup')->name('signup');
    Route::post('/signup',  'signupSubmit')->name('signup.submit');
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'loginSubmit')->name('login.submit');
    Route::get('/logout', 'logout')->name('logout')->middleware('auth');
});


Route::prefix('task')->name('task.')->controller(TaskProviderController::class)->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/', 'index');
        Route::get('/add',  'addForm')->name('add.form');
        Route::post('/add',  'store')->name('store');
    });
});

Route::prefix('employee')->name('employee.')->controller(TaskSeekerController::class)->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/', 'index');
        Route::get('/apply',  'applyForm')->name('apply.form');
        Route::post('/apply',  'store')->name('store');
    });
});
