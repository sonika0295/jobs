<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('optimize:clear');
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('view:cache');
    // Artisan::call('make:controller HomeController');
    // Artisan::call('migrate');
    return 'Cache cleared, optimized, and .env file refreshed successfully.';
});


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});
