<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a href="{{ url('/') }}"
                            style="-webkit-box-shadow: none;box-shadow: none;
    border-right:none">
                            <img src="images/png putih (2).png" class="logo-mobile" alt="Anara Explore" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                        <div class="account-wrap" style="justify-content: right;">
                            <div class="account-item clearfix js-item-menu">
                                <div class="image">
                                    <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">john doe</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">john doe</a>
                                            </h5>
                                            <span class="email">johndoe@example.com</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="#">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub {{ request()->is('/') ? 'active' : '' }}">
                            <a class="js-arrow" href="{{ url('/') }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="far fa-check-square"></i>Form</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li class="has-sub {{ request()->is('/form_participant') ? 'active' : '' }}">
                                    <a href="{{ url('/form_participant') }}">Participant
                                        Personal Data</a>
                                </li>
                                <li class="has-sub {{ request()->is('/form_group') ? 'active' : '' }}">
                                    <a href="{{ url('/form_group') }}">Group Data</a>
                                </li>
                                <li class="has-sub {{ request()->is('/form_payment') ? 'active' : '' }}">
                                    <a href="{{ url('/form_payment') }}">Payment Data</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>View</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{ url('/view_participant') }}">Participant Personal Data</a>
                                </li>
                                <li>
                                    <a href="{{ url('/view_group') }}">Group Data</a>
                                </li>
                                <li>
                                    <a href="{{ url('/view_payment') }}">Payment Data</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-chart-bar"></i>Invoice</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a class="logo" href="{{ url('/') }}"
                    style="-webkit-box-shadow: none;box-shadow: none;
    border-right:none">
                    <img src="images/png putih (2).png" class="logo-desktop" alt="Anara Explore" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub {{ request()->is('/') ? 'active' : '' }}">
                            <a class="js-arrow" href="{{ url('/') }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li
                            class="has-sub {{ request()->is('/form_participant', '/form_group', '/form_payment') ? 'active' : '' }}">
                            <a class="js-arrow" href="#">
                                <i class="far fa-check-square"></i>Form</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li class="has-sub">
                                    <a href="{{ url('/form_participant') }}">Participant
                                        Personal Data</a>
                                </li>
                                <li>
                                    <a href="{{ url('/form_group') }}">Group Data</a>
                                </li>
                                <li>
                                    <a href="{{ url('/form_payment') }}">Payment Data</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>View</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{ url('/view_participant') }}">Participant Personal Data</a>
                                </li>
                                <li>
                                    <a href="{{ url('/view_group') }}">Group Data</a>
                                </li>
                                <li>
                                    <a href="{{ url('/view_payment') }}">Payment Data</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-copy"></i>Invoice</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- Jquery JS-->
        <script src="{{ asset('vendor/jquery-3.2.1.min.js') }}"></script>
        <!-- Bootstrap JS-->
        <script src="{{ asset('vendor/bootstrap-4.1/popper.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
        <!-- Vendor JS -->
        <script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
        <script src="{{ asset('vendor/wow/wow.min.js') }}"></script>
        <script src="{{ asset('vendor/animsition/animsition.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
        <script src="{{ asset('vendor/counter-up/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('vendor/counter-up/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('vendor/circle-progress/circle-progress.min.js') }}"></script>
        <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('vendor/chartjs/Chart.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>

        <!-- Main JS-->
        <script src="{{ asset('js/main.js') }}"></script>

        <style>
            .logo-desktop {
                border: 1px solid #ffffff
            }

            @media (max-width: 992px) {
                .logo-mobile {
                    max-width: 70px;
                }
            }
        </style>
