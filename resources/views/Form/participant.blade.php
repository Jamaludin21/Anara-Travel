@extends('Layout.header')

@extends('Layout.side')

@section('title', 'Form Participant')

{{-- @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-error">
        {{ session('error') }}
    </div>
@endif --}}

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
                <form id="form_add_participant" action="{{ Route('participant_add') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card" style="background: transparent;border: 0px;">
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="hidden" name="id" id="id" class="form-control">
                                        <label for="name" class="control-label mb-1">Full Name</label>
                                        <input id="name" name="name" type="text" class="form-control"
                                            aria-required="true" aria-invalid="false" placeholder="Full Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="gender" class="control-label mb-1">Gender :</label>
                                        <div class="form-check-inline form-check"
                                            style="display: flex;justify-content:space-evenly">
                                            <label for="inline-radio1">
                                                <input type="radio" id="inline-radio1" name="gender" value="male"
                                                    class="form-check-input">Male
                                            </label>
                                            <label for="inline-radio2">
                                                <input type="radio" id="inline-radio2" name="gender" value="female"
                                                    class="form-check-input">Female
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="select" class=" form-control-label">Start From</label>
                                        <select name="start_from" id="start_from" class="form-control">
                                            <option value="0">Please select</option>
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Surabaya">Surabaya</option>
                                            <option value="Yogyakarta">Yogyakarta</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="select" class=" form-control-label">Group Code</label>
                                        <select name="group_code" id="group_code" class="form-control">
                                            <option value="0">Please select</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Upload Passport<i
                                                class="fas fa-cloud-download"></i></label>
                                        <input type="file" id="image" name="image" class="form-control-file">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card" style="background: transparent;border: 0px;">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="passport" class="control-label mb-1">Passport Number</label>
                                        <input id="passport" name="passport" type="number" class="form-control"
                                            aria-required="true" aria-invalid="false" placeholder="Passport Number">
                                    </div>
                                    <div class="form-group">
                                        <label for="date_birth" class="control-label mb-1">Date Of Birth</label>
                                        <input id="date_birth" name="date_birth" type="date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="passport_exp" class="control-label mb-1">Expired
                                            Passport</label>
                                        <input id="passport_exp" name="passport_exp" type="date"
                                            class="form-control">
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
                    </div>
                </form>
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

@extends('Layout.footer')

</html>
<!-- end document-->
