<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
*/

Route::get('spa/{any?}', function () {
        return view('spa/_home');
});

Route::get('auth-signin', function () {
    return view('mpa/auth-signin');
})->name('login');

Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

Route::get('/', function () {
    return view('select_site');
})->name('main');

include base_path('routes/dashboard.php');
include base_path('routes/mpa.php');
include base_path('routes/test.php');

//Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


