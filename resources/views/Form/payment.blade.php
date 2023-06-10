@extends('Layout.header')

@extends('Layout.side')

@section('title', 'Form Payment')

<!-- PAGE CONTAINER-->
<div class="page-container">
    @extends('Layout.desktop')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-md-12">
                    <section id="breadcrumbs" class="breadcrumbs">
                        <div class="container">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="title-1">Payment Data</h2>
                                <ol>
                                    <li><a href={{ url('/') }}>Home</a></li>
                                    <li>@yield('title')</li>
                                </ol>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="row part">
                    <div class="col-lg-4" style="padding: 0">
                        <div class="card" style="background: transparent;border: 0px;">
                            <div class="card-body">
                                <form action="" method="post" novalidate="novalidate">
                                    <div class="form-group">
                                        <label for="group" class="control-label mb-1">Group Code</label>
                                        <input id="group" name="group" type="text" class="form-control"
                                            aria-required="true" aria-invalid="false" placeholder="Group Code">
                                    </div>
                                    <div class="form-group">
                                        <label for="chairman" class="control-label mb-1">Chairman's Name</label>
                                        <input id="chairman" name="chairman" type="text" class="form-control"
                                            aria-required="true" aria-invalid="false" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="depart" class="control-label mb-1">Date of Departure</label>
                                        <input id="depart" name="depart" type="date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="start" class="control-label mb-1">Start From</label>
                                        <select name="start" id="start" class="form-control" disabled>
                                            <option value="0">Please select</option>
                                            <option value="1">Option #1</option>
                                            <option value="2">Option #2</option>
                                            <option value="3">Option #3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tour" class="control-label mb-1">Type Tour</label>
                                        <select name="tour" id="tour" class="form-control" disabled>
                                            <option value="0">Please select</option>
                                            <option value="1">Option #1</option>
                                            <option value="2">Option #2</option>
                                            <option value="3">Option #3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="gender" class="control-label mb-1">Customer :</label>
                                        <div class="form-check-inline form-check"
                                            style="display: flex;justify-content:space-evenly">
                                            <label for="inline-radio1">
                                                <input type="radio" id="inline-radio1" name="male" value="option1"
                                                    class="form-check-input">Reihan
                                            </label>
                                            <label for="inline-radio2">
                                                <input type="radio" id="inline-radio2" name="female" value="option2"
                                                    class="form-check-input">Dini
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4"style="padding: 0">
                        <div class="card" style="background: transparent;border: 0px;">
                            <div class="card-body">
                                <form action="" method="post" novalidate="novalidate">
                                    <div class="form-group">
                                        <label for="fee" class="control-label mb-1">Tour Fee</label>
                                        <input id="fee" name="fee" type="text" class="form-control"
                                            aria-required="true" aria-invalid="false" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="ex" class="control-label mb-1">Exclude</label>
                                        <input id="ex" name="ex" type="text" class="form-control"
                                            aria-required="true" aria-invalid="false" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="group" class="control-label mb-1">Extra Ticket</label>
                                        <input id="group" name="group" type="text" class="form-control"
                                            aria-required="true" aria-invalid="false" placeholder="Extra Ticket">
                                    </div>
                                    <div class="form-group">
                                        <label for="group" class="control-label mb-1">Extra Baggage</label>
                                        <input id="group" name="group" type="text" class="form-control"
                                            aria-required="true" aria-invalid="false" placeholder="Extra Baggage">
                                    </div>
                                    <div class="form-group">
                                        <label for="group" class="control-label mb-1">Outstanding</label>
                                        <input id="group" name="group" type="text" class="form-control"
                                            aria-required="true" aria-invalid="false" placeholder="Outstanding">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4"style="padding: 0">
                        <div class="card" style="background: transparent;border: 0px;">
                            <div class="card-body">
                                <form action="" method="post" novalidate="novalidate">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="dp" class="control-label mb-1">Down Payment</label>
                                            <input id="dp" name="dp" type="number" class="form-control"
                                                aria-required="true" aria-invalid="false" placeholder="Down Payment">
                                        </div>
                                        <div class="form-group">
                                            <label for="dp_date" class="control-label mb-1">Payment Date</label>
                                            <input id="dp_date" name="dp_date" type="date"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="p1" class="control-label mb-1">Payment - 1</label>
                                            <input id="p1" name="p1" type="number" class="form-control"
                                                aria-required="true" aria-invalid="false" placeholder="Payment">
                                        </div>
                                        <div class="form-group">
                                            <label for="p1_date" class="control-label mb-1">Payment Date</label>
                                            <input id="p1_date" name="p1_date" type="date"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="p2" class="control-label mb-1">Payment - 2</label>
                                            <input id="p2" name="p2" type="number" class="form-control"
                                                aria-required="true" aria-invalid="false" placeholder="Payment">
                                        </div>
                                        <div class="form-group">
                                            <label for="p2_date" class="control-label mb-1">Payment Date</label>
                                            <input id="p2_date" name="p2_date" type="date"
                                                class="form-control">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="container ton">
                        <div class="row" style="justify-content: flex-end;margin-right: 0;">
                            <div style="margin-right: 1rem">
                                <button id="add-button" type="submit" class="btn btn-lg btn-info btn-block"
                                    style="background: #5865F2">
                                    <span id="payment-button-amount">Add</span>
                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                </button>
                            </div>
                            <div>
                                <button id="cancel-button" type="close" class="btn btn-lg btn-block"
                                    style="background: #FFFFFF">
                                    <span id="payment-button-amount">Cancel</span>
                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                </button>
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
    .part {
        margin-top: 1rem
    }

    @media (max-width: 992px) {
        .part {
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
        }

        .header-desktop {
            display: none !important;
        }
    }
</style>
</body>

</html>
<!-- end document-->
