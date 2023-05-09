
<body class="@@bodyclass">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
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
			<div class="navbar-content">
				<ul class="pc-navbar">
					    <div id="vue-sidebar"></div>
				</ul>
			</div>
		</div>
	</nav>

	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="pc-header @@headerclass">
		<div class="header-wrapper">
			@include('layouts/header-content')
		</div>
	</header>
	<!-- [ Header ] end -->
