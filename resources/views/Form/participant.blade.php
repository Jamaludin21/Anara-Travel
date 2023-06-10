@extends('Layout.header')

@extends('Layout.side')

@section('title', 'Form Participant')

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
                                <h2 class="title-1">Participant Personal Data</h2>
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
                                        <label for="name" class="control-label mb-1">Full Name</label>
                                        <input id="name" name="name" type="text" class="form-control"
                                            aria-required="true" aria-invalid="false" placeholder="Full Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="gender" class="control-label mb-1">Gender :</label>
                                        <div class="form-check-inline form-check"
                                            style="display: flex;justify-content:space-evenly">
                                            <label for="inline-radio1">
                                                <input type="radio" id="inline-radio1" name="male" value="option1"
                                                    class="form-check-input">Male
                                            </label>
                                            <label for="inline-radio2">
                                                <input type="radio" id="inline-radio2" name="female" value="option2"
                                                    class="form-check-input">Female
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="select" class=" form-control-label">Start From</label>
                                        <select name="start" id="start" class="form-control">
                                            <option value="0">Please select</option>
                                            <option value="1">Option #1</option>
                                            <option value="2">Option #2</option>
                                            <option value="3">Option #3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="select" class=" form-control-label">Group Code</label>
                                        <select name="group" id="group" class="form-control">
                                            <option value="0">Please select</option>
                                            <option value="1">Option #1</option>
                                            <option value="2">Option #2</option>
                                            <option value="3">Option #3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Upload Passport<i
                                                class="fas fa-cloud-download"></i></label>
                                        <input type="file" id="file-input" name="file-input"
                                            class="form-control-file">
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
                                        <label for="passport" class="control-label mb-1">Passport Number</label>
                                        <input id="passport" name="passport" type="number" class="form-control"
                                            aria-required="true" aria-invalid="false" placeholder="Passport Number">
                                    </div>
                                    <div class="form-group">
                                        <label for="birth" class="control-label mb-1">Date Of Birth</label>
                                        <input id="birth" name="birth" type="date"
                                            class="form-control cc-name valid">
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
                                        <label for="exp" class="control-label mb-1">Expired Passport</label>
                                        <input id="exp" name="exp" type="date"
                                            class="form-control cc-name valid">
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
