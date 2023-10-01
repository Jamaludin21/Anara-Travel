<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a class="logo" href="{{ url('/') }}"
                    style="-webkit-box-shadow: none;box-shadow: none;
    border-right:none">
                    <img src="{{ asset('images/png putih (2).png') }}" class="logo-desktop" alt="Anara Explore" />
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
                                    <a href="{{ url('form_participant') }}">Participant
                                        Personal Data</a>
                                </li>
                                <li>
                                    <a href="{{ url('form_group') }}">Group Data</a>
                                </li>
                                <li>
                                    <a href="{{ url('form_payment') }}">Payment Data</a>
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
        <script src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>

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
