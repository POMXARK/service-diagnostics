<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
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
Route::get('auth-signin', function () {
    return view('auth-signin');
})->name('login');

Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

Route::get('/about_laravel', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout');

    Route::get('/', function () {
        return view('index');
    })->name('main');

    Route::get('home', function () {
        return view('_home');
    });

    Route::get('bc_alert', function () {
        return view('bc_alert');
    });

    Route::get('bc_button', function () {
        return view('bc_button');
    });

    Route::get('bc_badges', function () {
        return view('bc_badges');
    });

    Route::get('bc_breadcrumb-pagination', function () {
        return view('bc_breadcrumb-pagination');
    });

    Route::get('bc_card', function () {
        return view('bc_card');
    });

    Route::get('bc_collapse', function () {
        return view('bc_collapse');
    });

    Route::get('bc_carousel', function () {
        return view('bc_carousel');
    });

    Route::get('bc_progress', function () {
        return view('bc_progress');
    });

    Route::get('bc_modal', function () {
        return view('bc_modal');
    });

    Route::get('bc_typography', function () {
        return view('bc_typography');
    });

    Route::get('icon-feather', function () {
        return view('icon-feather');
    });

    Route::get('form_elements', function () {
        return view('form_elements');
    });

    Route::get('form2_input_group', function () {
        return view('form2_input_group');
    });

    Route::get('form2_checkbox', function () {
        return view('form2_checkbox');
    });

    Route::get('form2_radio', function () {
        return view('form2_radio');
    });

    Route::get('sample-page', function () {
        return view('sample-page');
    });

    Route::get('auth-signup', function () {
        return view('auth-signup');
    });

    Route::get('map-google', function () {
        return view('map-google');
    });

    Route::get('chart-apex', function () {
        return view('chart-apex');
    });

    Route::get('tbl_bootstrap', function () {
        return view('tbl_bootstrap');
    });

    Route::get('script_test', function () {
        return view('script_test');
    });

    Route::get('vue_test', function () {
        return view('vue_test');
    });
    Route::get('bootstrap_popperjs_test', function () {
        return view('bootstrap_popperjs_test');
    });

    Route::get('align_test', function () {
        return view('align_test');
    });
});

//Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


