<!DOCTYPE html>
<html lang="en">
<head>
{{--    @include('layouts/head-bottom-link')--}}
    <link href="/css/material.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <script type="module" src="/js/app.js"></script>
</head>


<!-- [ navigation menu ] end -->
<!-- [ Header ] start -->
<header class="pc-header">
    <div class="header-wrapper">
        <div class="me-auto pc-mob-drp">
            <ul class="list-unstyled">
                <li class="dropdown pc-h-item">
                    <a class="pc-head-link active dropdown-toggle arrow-none mr-0" data-bs-toggle="dropdown" href="#!" role="button" aria-haspopup="false" aria-expanded="false">
                        Level
                    </a>
                </li>
            </ul>
        </div>
        <div class="ms-auto">
            <ul class="list-unstyled">
                <li class="dropdown pc-h-item">
                    <a class="pc-head-link dropdown-toggle arrow-none mr-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="material-icons-two-tone">search</i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right pc-h-dropdown drp-search">
                        <form class="px-3">
                            <div class="form-group mb-0 d-flex align-items-center">
                                <i data-feather="search"></i>
                                <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
                            </div>
                        </form>
                    </div>
                </li>
                <li class="dropdown pc-h-item">
                    <a class="pc-head-link dropdown-toggle arrow-none mr-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('images/user/avatar-2.jpg') }}" alt="user-image" class="user-avtar">
                        <span>
					<span class="user-name">Joseph William</span>
					<span class="user-desc">Administrator</span>
				</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
<!-- [ Header ] end -->
