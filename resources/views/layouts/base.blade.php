<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @section('styles')
        <link rel="preload" href="/fonts/material.woff2" as="font" type="font/woff2" crossorigin>
        <link href="{{ mix('/css/style.css') }}" rel="stylesheet">
        <link href="{{ mix('/css/material.css') }}" rel="stylesheet">
        <link href="{{ mix('/css/feather.css') }}" rel="stylesheet">
    @show
</head>
<body>
@include('layouts/layout-vertical')
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
    <script src="{{ mix('/js/manifest.js') }}"></script>
    <script src="{{ mix('/js/vendor.js') }}"></script>
    <script type="module" src="{{ mix('/js/app.js') }}"></script>
    <script type="module" src="{{ mix('js/mpa/all-files.js') }}"></script>
    <script>
        // инициализация всплывающих окон
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>
@show
</body>
</html>
