@extends('Layout.header')

@extends('Layout.side')

@section('title', 'Dashboard')

<!-- PAGE CONTAINER-->
<div class="page-container">
    @extends('Layout.desktop')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row m-t-25">
                    <div class="col-sm-6 col-lg-4">
                        <div class="overview-item overview-item--c1">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                    <div class="text">
                                        <h2>{{ $participants }}</h2>
                                        <span>Participant</span>
                                    </div>
                                </div>
                                {{-- <div class="overview-chart">
                                    <canvas id="widgetChart1"></canvas>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="overview-item overview-item--c2">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-shopping-cart"></i>
                                    </div>
                                    <div class="text">
                                        <h2>{{ $groups }}</h2>
                                        <span>Group</span>
                                    </div>
                                </div>
                                {{-- <div class="overview-chart">
                                    <canvas id="widgetChart2"></canvas>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="overview-item overview-item--c3">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-calendar-note"></i>
                                    </div>
                                    <div class="text">
                                        <h2>{{ $payments }}</h2>
                                        <span>Payment</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
</div>

</div>

<style>
    @media (max-width: 992px) {
        /* .part {
            margin-top: 0 !important;
        }

        .card {
            margin-bottom: 0 !important;
        }

        .overview-wrap {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
        }

        .ton {
            max-width: 100% !important;
            flex: 1 1 auto !important;
            padding: 1.25rem !important;
        } */

        .header-desktop {
            display: none !important;
        }
    }
</style>
</body>

</html>
<!-- end document-->
