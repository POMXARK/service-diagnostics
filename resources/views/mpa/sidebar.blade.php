<div class="navbar-content">
    <ul class="pc-navbar">
        <li class="pc-item pc-caption">
            <label class="adaptive-content">Navigation</label>
        </li>
        <li class="pc-item">
            <a href="/mpa/home" class="pc-link "><span class="pc-micon">
                    @include('partials.svg_icons', ['icon' => 'home-tt', 'size' => 22])
                </span><span class="pc-mtext">Home</span>
            </a>
        </li>
        <li class="pc-item">
            <a href="/mpa/graphs" class="pc-link ">
                    <span class="pc-micon">
                        @include('partials.svg_icons', ['icon' => 'query-stats-tt', 'size' => 22])
                </span>
                <span class="pc-mtext">Graphs</span></a>
        </li>
        <li class="pc-item">
            <a href="/mpa/sensors" class="pc-link "><span class="pc-micon">
                    @include('partials.svg_icons', ['icon' => 'sensors-tt', 'size' => 22])
                </span><span
                    class="pc-mtext">Sensors</span></a>
        </li>
        <li class="pc-item">
            <a href="/mpa/table" class="pc-link "><span class="pc-micon">
                    <ico class="icon" size="22" name="table" viewBox="0 96 960 960"></ico>
                </span><span
                    class="pc-mtext">Table</span></a>
        </li>
        <li class="pc-item">
            <a href="/dashboard" class="pc-link "><span class="pc-micon">
                    @include('partials.svg_icons', ['icon' => 'dashboard-tt', 'size' => 22])
                </span><span
                    class="pc-mtext">Dashboard</span></a>
        </li>
        <li class="pc-item pc-caption">
            <label class="adaptive-content">Elements</label>
            <span class="adaptive-content">UI Components</span>
        </li>
        <li class="pc-item pc-hasmenu adaptive-content">
            <a href="#!" class="pc-link "><span class="pc-micon">
                    @include('partials.svg_icons', ['icon' => 'business-center-tt', 'size' => 22])
                </span><span class="pc-mtext">Basic</span><span
                    class="pc-arrow">
                    <i data-feather="chevron-right"></i>
                </span></a>
            <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="/dashboard/basic/bc_alert">Alert</a></li>
                <li class="pc-item"><a class="pc-link" href="/dashboard/basic/bc_button">Button</a></li>
                <li class="pc-item"><a class="pc-link" href="/dashboard/basic/bc_badges">Badges</a></li>
                <li class="pc-item"><a class="pc-link" href="/dashboard/basic/bc_breadcrumb-pagination">Breadcrumb & paggination</a>
                </li>
                <li class="pc-item"><a class="pc-link" href="/dashboard/basic/bc_card">Cards</a></li>
                <li class="pc-item"><a class="pc-link" href="/dashboard/basic/bc_collapse">Collapse</a></li>
                <li class="pc-item"><a class="pc-link" href="/dashboard/basic/bc_carousel">Carousel</a></li>
                <li class="pc-item"><a class="pc-link" href="/dashboard/basic/bc_progress">Progress</a></li>
                <li class="pc-item"><a class="pc-link" href="/dashboard/basic/bc_modal">Modal</a></li>
                <li class="pc-item"><a class="pc-link" href="/dashboard/basic/bc_typography">Typography</a></li>
            </ul>
        </li>
        <li class="pc-item">
            <a href="/dashboard/icon-feather" class="pc-link "><span class="pc-micon">
                    @include('partials.svg_icons', ['icon' => 'history-edu-tt', 'size' => 22])
                </span><span class="pc-mtext">Icons</span></a>
        </li>
        <li class="pc-item pc-caption">
            <label class="adaptive-content">Forms</label>
        </li>
        <li class="pc-item pc-hasmenu adaptive-content">
            <a href="#!" class="pc-link "><span class="pc-micon">
                    @include('partials.svg_icons', ['icon' => 'edit-tt', 'size' => 22])
                </span><span
                    class="pc-mtext">Forms Elements</span><span class="pc-arrow"><i
                        data-feather="chevron-right"></i></span></a>
            <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="/dashboard/form/form_elements">Form Basic</a></li>
                <li class="pc-item"><a class="pc-link" href="/dashboard/form/form2_input_group">Input Groups</a></li>
                <li class="pc-item"><a class="pc-link" href="/dashboard/form/form2_checkbox">Checkbox</a></li>
                <li class="pc-item"><a class="pc-link" href="/dashboard/form/form2_radio">Radio</a></li>
            </ul>
        </li>
        <li class="pc-item pc-caption">
            <label class="adaptive-content">table</label>
        </li>
        <li class="pc-item">
            <a href="/dashboard/tbl_bootstrap" class="pc-link "><span class="pc-micon">
                    @include('partials.svg_icons', ['icon' => 'table-rows-tt', 'size' => 22])
                </span><span
                    class="pc-mtext">Bootstrap table</span></a>
        </li>
        <li class="pc-item pc-caption adaptive-content">
            <label>Chart & Maps</label>
            <span>Tones of readymade charts</span>
        </li>
        <li class="pc-item adaptive-content">
            <a href="/dashboard/chart-apex" class="pc-link "><span class="pc-micon">
                    @include('partials.svg_icons', ['icon' => 'bubble-chart-tt', 'size' => 22])
                </span><span
                    class="pc-mtext">Chart</span></a>
        </li>
        <li class="pc-item adaptive-content">
            <a href="/dashboard/map-google" class="pc-link "><span class="pc-micon">
                    @include('partials.svg_icons', ['icon' => 'my-location-tt', 'size' => 22])
                </span><span
                    class="pc-mtext">Maps</span></a>
        </li>
        <li class="pc-item pc-caption adaptive-content">
            <label>Pages</label>
            <span>Redymade Pages</span>
        </li>
        <li class="pc-item pc-hasmenu adaptive-content">
            <a href="#!" class="pc-link"><span class="pc-micon">
                    @include('partials.svg_icons', ['icon' => 'https-tt', 'size' => 22])
                </span><span
                    class="pc-mtext">Authentication</span><span class="pc-arrow"><i
                        data-feather="chevron-right"></i></span></a>
            <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="auth-signup" target="_blank">Sign up</a></li>
                <li class="pc-item"><a class="pc-link" href="auth-signin" target="_blank">Sign in</a></li>
            </ul>
        </li>
        <li class="pc-item pc-caption adaptive-content">
            <label>Other</label>
            <span>Extra more things</span>
        </li>
        <li class="pc-item pc-hasmenu adaptive-content">
            <a href="#!" class="pc-link"><span class="pc-micon">
                    @include('partials.svg_icons', ['icon' => 'list-alt-tt', 'size' => 22])
                </span><span
                    class="pc-mtext">Menu levels</span><span class="pc-arrow"><i
                        data-feather="chevron-right"></i></span></a>
            <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#!">Menu Level 2.1</a></li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">Menu level 2.2<span class="pc-arrow"><i
                                data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="#!">Menu level 3.1</a></li>
                        <li class="pc-item"><a class="pc-link" href="#!">Menu level 3.2</a></li>
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link">Menu level 3.3<span class="pc-arrow"><i
                                        data-feather="chevron-right"></i></span></a>
                            <ul class="pc-submenu">
                                <li class="pc-item"><a class="pc-link" href="#!">Menu level 4.1</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Menu level 4.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">Menu level 2.3<span class="pc-arrow"><i
                                data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="#!">Menu level 3.1</a></li>
                        <li class="pc-item"><a class="pc-link" href="#!">Menu level 3.2</a></li>
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link">Menu level 3.3<span class="pc-arrow"><i
                                        data-feather="chevron-right"></i></span></a>
                            <ul class="pc-submenu">
                                <li class="pc-item"><a class="pc-link" href="#!">Menu level 4.1</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Menu level 4.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="pc-item"><a href="/dashboard/sample-page" class="pc-link "><span class="pc-micon">
            @include('partials.svg_icons', ['icon' => 'storefront-tt', 'size' => 22])
            </span><span class="pc-mtext">Sample page</span></a></li>
    </ul>
</div>
