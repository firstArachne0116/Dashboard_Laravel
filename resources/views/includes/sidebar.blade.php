<!-- Sidebar -->
<aside id="sidebar" class="u-sidebar">
        <div class="u-sidebar-inner">
            <header class="u-sidebar-header">
                <a class="u-sidebar-logo" href="/">
                    <img class="img-fluid" src="{{ asset('img/logo.png') }}" width="124" alt="Stream Dashboard">
                </a>
            </header>

            <nav class="u-sidebar-nav">
                <ul class="u-sidebar-nav-menu u-sidebar-nav-menu--top-level">
                    <!-- Dashboard -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link active" href="{{ url('/dashboard') }}">
                            <i class="fa fa-cubes u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">Dashboard</span>
                        </a>
                    </li>
                    <!-- End Dashboard -->

                    <!-- UI Components -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="#!"
                           data-target="#subMenu1">
                            <i class="far fa-paper-plane u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">UI Components</span>
                            <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                            <span class="u-sidebar-nav-menu__indicator"></span>
                        </a>

                        <ul id="subMenu1" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                            <!-- Components -->
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ url('/dashboard/typography') }}">
                                    <span class="u-sidebar-nav-menu__item-icon">T</span>
                                    <span class="u-sidebar-nav-menu__item-title">Typography</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ url('/dashboard/colors') }}">
                                    <span class="u-sidebar-nav-menu__item-icon">C</span>
                                    <span class="u-sidebar-nav-menu__item-title">Colors</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ url('/dashboard/alerts') }}">
                                    <span class="u-sidebar-nav-menu__item-icon">A</span>
                                    <span class="u-sidebar-nav-menu__item-title">Alerts</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ url('/dashboard/buttons') }}">
                                    <span class="u-sidebar-nav-menu__item-icon">B</span>
                                    <span class="u-sidebar-nav-menu__item-title">Buttons</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ url('/dashboard/cards') }}">
                                    <span class="u-sidebar-nav-menu__item-icon">C</span>
                                    <span class="u-sidebar-nav-menu__item-title">Cards</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ url('/dashboard/modals') }}">
                                    <span class="u-sidebar-nav-menu__item-icon">M</span>
                                    <span class="u-sidebar-nav-menu__item-title">Modals</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ url('/dashboard/tooltips-and-popovers') }}">
                                    <span class="u-sidebar-nav-menu__item-icon">T</span>
                                    <span class="u-sidebar-nav-menu__item-title">Tooltips & Popovers</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ url('/dashboard/others') }}">
                                    <span class="u-sidebar-nav-menu__item-icon">O</span>
                                    <span class="u-sidebar-nav-menu__item-title">Other Components</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ url('/dashboard/forms') }}">
                                    <i class="far fa-edit u-sidebar-nav-menu__item-icon"></i>
                                    <span class="u-sidebar-nav-menu__item-title">Forms</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ url('/dashboard/tables') }}">
                                    <i class="far fa-list-alt u-sidebar-nav-menu__item-icon"></i>
                                    <span class="u-sidebar-nav-menu__item-title">Tables</span>
                                </a>
                            </li>
                            <!-- End Components -->
                        </ul>
                    </li>
                    <!-- End UI Components -->
                    <hr>

                    <!-- Free Download -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="https://laravelstrap.com/template/laravel-bootstrap-dashboard">
                            <i class="fab fa-html5 u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">Free Download</span>
                        </a>
                    </li>
                    <!-- End Free Download -->
                </ul>
            </nav>
        </div>
    </aside>
    <!-- End Sidebar -->