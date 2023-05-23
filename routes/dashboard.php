<?php
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard/dashboard');
    });

    Route::prefix('basic')->group(function () {
        Route::get('bc_alert', function () {
            return view('dashboard/basic/bc_alert');
        });

        Route::get('bc_button', function () {
            return view('dashboard/basic/bc_button');
        });

        Route::get('bc_badges', function () {
            return view('dashboard/basic/bc_badges');
        });

        Route::get('bc_breadcrumb-pagination', function () {
            return view('dashboard/basic/bc_breadcrumb-pagination');
        });

        Route::get('bc_card', function () {
            return view('dashboard/basic/bc_card');
        });

        Route::get('bc_collapse', function () {
            return view('dashboard/basic/bc_collapse');
        });

        Route::get('bc_carousel', function () {
            return view('dashboard/basic/bc_carousel');
        });

        Route::get('bc_progress', function () {
            return view('dashboard/basic/bc_progress');
        });

        Route::get('bc_modal', function () {
            return view('dashboard/basic/bc_modal');
        });

        Route::get('bc_typography', function () {
            return view('dashboard/basic/bc_typography');
        });
    });

    Route::prefix('form')->group(function () {
        Route::get('form_elements', function () {
            return view('dashboard/form/form_elements');
        });

        Route::get('form2_input_group', function () {
            return view('dashboard/form/form2_input_group');
        });

        Route::get('form2_checkbox', function () {
            return view('dashboard/form/form2_checkbox');
        });

        Route::get('form2_radio', function () {
            return view('dashboard/form/form2_radio');
        });
    });

    Route::get('icon-feather', function () {
        return view('dashboard/icon-feather');
    });

    Route::get('tbl_bootstrap', function () {
        return view('dashboard/tbl_bootstrap');
    });

    Route::get('chart-apex', function () {
        return view('dashboard/chart-apex');
    });

    Route::get('map-google', function () {
        return view('dashboard/map-google');
    });

    Route::get('sample-page', function () {
        return view('dashboard/sample-page');
    });
});
