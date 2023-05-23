<?php
use Illuminate\Support\Facades\Route;

Route::prefix('test')->group(function () {
    Route::get('/about_laravel', function () {
        return view('test/welcome');
    });
});
