@extends('Layout.header')

@extends('Layout.side')

@section('title', 'Form Group')

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
                                <h2 class="title-1">Group Data</h2>
                                <ol>
                                    <li><a href={{ url('/') }}>Home</a></li>
                                    <li>@yield('title')</li>
                                </ol>
                            </div>
                        </div>
                    </section>
                </div>
                <form id="form_add_group" action="{{ Route('group_add') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card" style="background: transparent;border: 0px;">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="group_code" class="control-label mb-1">Group Code</label>
                                        <input id="group_code" name="group_code" type="text" class="form-control"
                                            aria-required="true" aria-invalid="false" placeholder="Group Code">
                                    </div>
                                    <div class="form-group">
                                        <label for="chairman_name" class="control-label mb-1">Chairman's Name</label>
                                        <input id="chairman_name" name="chairman_name" type="text"
                                            class="form-control" aria-required="true" aria-invalid="false"
                                            placeholder="Full Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="regist_date" class="control-label mb-1">Registration Date</label>
                                        <input id="regist_date" name="regist_date" type="date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone_number" class="control-label mb-1">Phone Number</label>
                                        <input id="phone_number" name="phone_number" type="number" class="form-control"
                                            aria-required="true" aria-invalid="false" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group">
                                        <label for="invoice_number" class="control-label mb-1">Invoice Number</label>
                                        <input id="invoice_number" name="invoice_number" type="number"
                                            class="form-control" aria-required="true" aria-invalid="false"
                                            placeholder="Invoice Number">
                                    </div>
                                    <div class="form-group">
                                        <label for="participant_number" class=" form-control-label">Number of
                                            Participant</label>
                                        <select name="participant_number" id="participant_number" class="form-control">
                                            <option value="0">Please select</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                    {{-- <div class="form-group">
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
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card" style="background: transparent;border: 0px;">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="type_tour" class="control-label mb-1">Type Tour</label>
                                        <select name="type_tour" id="type_tour" class="form-control">
                                            <option value="0">Please select</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="start_from" class="control-label mb-1">Start From</label>
                                        <select name="start_from" id="start_from" class="form-control">
                                            <option value="0">Please select</option>
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Surabaya">Surabaya</option>
                                            <option value="Yogyakarta">Yogyakarta</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="date_departure" class="control-label mb-1">Date of
                                            Departure</label>
                                        <input id="date_departure" name="date_departure" type="date"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container ton">
                            <div class="row" style="justify-content: flex-end;margin-right: 0;">
                                <div style="margin-right: 1rem">
                                    <button type="submit" class="btn btn-lg btn-info btn-block"
                                        style="background: #5865F2">
                                        {{ __('Add') }}
                                    </button>
                                </div>
                                <div>
                                    <button id="cancel-button" type="close" class="btn btn-lg btn-block"
                                        style="background: #FFFFFF">
                                        {{ __('Cancel') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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

@extends('Layout.footer')

</html>
<!-- end document-->
