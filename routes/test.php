<?php
use Illuminate\Support\Facades\Route;

Route::prefix('test')->group(function () {
    Route::get('/about_laravel', function () {
        return view('test/welcome');
    });

    Route::get('bootstrap_popperjs_test', function () {
        return view('test/bootstrap_popperjs_test');
    });

    Route::get('align_test', function () {
        return view('test/align_test');
    });

    Route::get('script_test', function () {
        return view('test/script_test');
    });

    Route::get('apexcharts_test', function () {
        return view('test/apexcharts_test');
    });
});
