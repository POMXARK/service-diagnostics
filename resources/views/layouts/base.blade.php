<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @section('styles')
        {{-- fonts cdn --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/material-icons@1.13.7/iconfont/material-icons.min.css" rel="stylesheet">
        {{-- app --}}
        <link href="{{ mix('/css/style.css') }}" rel="stylesheet">
    @show
</head>
<body>

@section('preloader')
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
@show

@section('mobile-header')
    <!-- [ Mobile header ] start -->
    <div class="pc-mob-header pc-header">
        <div class="pcm-logo">
            <img src="{{ asset('images/logo.svg') }}" alt="" class="logo logo-lg">
        </div>
        <div class="pcm-toolbar">
            <a href="#!" class="pc-head-link" id="mobile-collapse">
                <div class="hamburger hamburger--arrowturn">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <a href="#!" class="pc-head-link" id="headerdrp-collapse">
                <i data-feather="align-right"></i>
            </a>
            <a href="#!" class="pc-head-link" id="header-collapse">
                <i data-feather="more-vertical"></i>
            </a>
        </div>
    </div>
    <!-- [ Mobile header ] End -->
@show

@section('nav')
    <!-- [ navigation menu ] start -->
    <nav class="pc-sidebar @@menuclass" id="sidebar">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="/" class="b-brand adaptive-content">
                    <!-- ========   change your logo hear   ============ -->

                    <img src="{{ asset('images/logo.svg') }}" alt="" class="logo logo-lg">
                    <img src="{{ asset('images/logo-sm.svg') }}" alt="" class="logo logo-sm">
                </a>
                <a id="hide-sidebar-toggle" class="d-md-none d-lg-block">
                    <i class="fas fa-chevron-circle-left text-primary fs-3 text-end"
                       id="hide-sidebar-toggle-icon"
                       style="position: absolute; right: -10px;"></i>
                </a>
            </div>
            @include('mpa.sidebar')
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
@show

@section('Header')
    <!-- [ Header ] start -->
    <header class="pc-header @@headerclass">
        <div class="header-wrapper">
            @include('layouts/header-content')
        </div>
    </header>
    <!-- [ Header ] end -->
@show

<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <!-- [ breadcrumb ] end -->
        @section('breadcrumb')
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="page-header-title">
                                <h5 class="m-b-10">{{ $breadcrumbTitle }}</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ $to }}">{{ $toName }}</a></li>
                                <li class="breadcrumb-item">{{ $breadcrumbTitle}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @show
        @section('content')
        @show
    </div>
</div>

@section('scripts')
@show

</body>
</html>
