<?php

use App\Http\Controllers\GraphController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Obj1AiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('spa/{any?}', function () {
        return view('spa/_home');
});

Route::get('auth-signin', function () {
    return view('mpa/auth-signin');
})->name('login');

Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

Route::get('/about_laravel', function () {
    return view('welcome');
});

Route::get('/ws/table', [GraphController::class, 'newEvent']);

Route::get('/', function () {
    return view('/mpa/index');
})->name('main');

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

        Route::get('bc_alert', function () {
            return view('/mpa/bc_alert');
        });

        Route::get('bc_button', function () {
            return view('/mpa/bc_button');
        });

        Route::get('bc_badges', function () {
            return view('/mpa/bc_badges');
        });

        Route::get('bc_breadcrumb-pagination', function () {
            return view('/mpa/bc_breadcrumb-pagination');
        });

        Route::get('bc_card', function () {
            return view('/mpa/bc_card');
        });

        Route::get('bc_collapse', function () {
            return view('/mpa/bc_collapse');
        });

        Route::get('bc_carousel', function () {
            return view('/mpa/bc_carousel');
        });

        Route::get('bc_progress', function () {
            return view('/mpa/bc_progress');
        });

        Route::get('bc_modal', function () {
            return view('/mpa/bc_modal');
        });

        Route::get('bc_typography', function () {
            return view('/mpa/bc_typography');
        });

        Route::get('icon-feather', function () {
            return view('/mpa/icon-feather');
        });

        Route::get('form_elements', function () {
            return view('/mpa/form_elements');
        });

        Route::get('form2_input_group', function () {
            return view('/mpa/form2_input_group');
        });

        Route::get('form2_checkbox', function () {
            return view('/mpa/form2_checkbox');
        });

        Route::get('form2_radio', function () {
            return view('/mpa/form2_radio');
        });

        Route::get('sample-page', function () {
            return view('/mpa/sample-page');
        });

        Route::get('auth-signup', function () {
            return view('/mpa/auth-signup');
        });

        Route::get('map-google', function () {
            return view('/mpa/map-google');
        });

        Route::get('chart-apex', function () {
            return view('/mpa/chart-apex');
        });

        Route::get('tbl_bootstrap', function () {
            return view('/mpa/tbl_bootstrap');
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


//Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


