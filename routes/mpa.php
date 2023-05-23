<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Obj1AiController;

Route::prefix('mpa')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/logout', [LogoutController::class, 'perform'])->name('logout');


        Route::get('confirm/{ObjAi}', [Obj1AiController::class, 'confirm']);

        Route::get('sensors', function () {
            return view('/mpa/sensors');
        });


        Route::get('home', function () {
            return view('/mpa/_home');
        });

        Route::get('table', function () {
            return view('/mpa/table');
        });

        Route::get('apexcharts_test', function () {
            return view('/mpa/apexcharts_test');
        });

        Route::get('graphs', function () {
            return view('/mpa/graphs');
        });

        Route::get('auth-signup', function () {
            return view('/mpa/auth-signup');
        });

        Route::get('script_test', function () {
            return view('/mpa/script_test');
        });

        Route::get('vue_test', function () {
            return view('/mpa/vue_test');
        });
        Route::get('bootstrap_popperjs_test', function () {
            return view('/mpa/bootstrap_popperjs_test');
        });

        Route::get('align_test', function () {
            return view('/mpa/align_test');
        });
    });
});
