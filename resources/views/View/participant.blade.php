@extends('Layout.header')

@extends('Layout.side')

@section('title', 'View Participant')

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
                    <div class="row part">
                        <div class="col-md-12">
                            <!-- DATA TABLE -->
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <button class="au-btn-filter">
                                        <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    <div class="rs-select2--light rs-select2--sm">
                                        <form class="form-header" action="" method="POST">
                                            <input class="au-input au-input--xl" type="text" name="search"
                                                placeholder="Search" />
                                            <button class="au-btn-filter" type="submit">
                                                <i class="zmdi zmdi-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="table-data__tool-right">
                                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                        <select class="js-select2" name="type">
                                            <option selected="selected">Export</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2 data-table">
                                    <thead>
                                        <tr style="text-align: center">
                                            <th>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </th>
                                            <th>Name</th>
                                            <th>Group Code</th>
                                            <th>Gender</th>
                                            <th>Start From</th>
                                            <th>Date of Birth</th>
                                            <th>Number Passport</th>
                                            <th>Expired Passport</th>
                                            <th>Passport File</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($participant as $customer)
                                            <tr class="tr-shadow" style="text-align: center">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>{{ $customer->name }}</td>
                                                <td>
                                                    <span class="block-email">{{ $customer->group_code }}</span>
                                                </td>
                                                <td class="desc">{{ $customer->gender }}</td>
                                                <td>{{ $customer->start_from }}</td>
                                                <td>
                                                    <span class="status--process">{{ $customer->date_birth }}</span>
                                                </td>
                                                <td>{{ $customer->passport }}</td>
                                                <td>{{ $customer->passport_exp }}</td>
                                                <td><img src="{{ Storage::url('') . $customer->image }}"
                                                        class="rounded"></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item edit" data-toggle="modal"
                                                            data-target="#editModal" data-placement="top" title="Edit"
                                                            data="{{ $customer->id }}"><i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        {{-- <button type="submit" class="item delete" data-toggle="tooltip"
                                                            data-placement="top" title="Delete"
                                                            data="{{ $customer->id }}"><i class="zmdi zmdi-delete"></i>
                                                        </button> --}}
                                                        <form action="{{ route('participant_delete', $customer->id) }}"
                                                            method="POST"> @csrf
                                                            <input type="hidden" name="id"
                                                                value="{{ $customer->id }}">
                                                            <button type="submit" class="item delete"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Delete" data="{{ $customer->id }}"><i
                                                                    class="zmdi zmdi-delete"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                        @empty
                                            <div class="alert alert-danger">
                                                {{ __('Data Belum Tersedia') }}
                                            </div>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <!-- END DATA TABLE -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
    <!-- modal edit -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Ubah Data Partisipan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{ route('participant_edit', $customer->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" name="id" id="id" class="form-control">
                                    <label for="name" class="control-label mb-1">Full
                                        Name</label>
                                    <input id="name" name="name" type="text" class="form-control"
                                        aria-required="true" aria-invalid="false" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <label for="gender" class="control-label mb-1">Gender
                                        :</label>
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
                                    <label for="select" class=" form-control-label">Start
                                        From</label>
                                    <select name="start_from" id="start_from" class="form-control">
                                        <option value="0">Please select</option>
                                        <option value="Jakarta">Jakarta</option>
                                        <option value="Surabaya">Surabaya</option>
                                        <option value="Yogyakarta">Yogyakarta</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="select" class=" form-control-label">Group
                                        Code</label>
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
                                <div class="form-group">
                                    <label for="passport" class="control-label mb-1">Passport
                                        Number</label>
                                    <input id="passport" name="passport" type="number" class="form-control"
                                        aria-required="true" aria-invalid="false" placeholder="Passport Number">
                                </div>
                                <div class="form-group">
                                    <label for="date_birth" class="control-label mb-1">Date Of
                                        Birth</label>
                                    <input id="date_birth" name="date_birth" type="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="passport_exp" class="control-label mb-1">Expired
                                        Passport</label>
                                    <input id="passport_exp" name="passport_exp" type="date"
                                        class="form-control">
                                </div>
                                <div class="container ton">
                                    <div class="row" style="justify-content: flex-end;margin-right: 0;">
                                        <div style="margin-right: 1rem">
                                            <button type="submit" class="btn btn-lg btn-info btn-block"
                                                style="background: #5865F2">
                                                {{ __('Edit') }}
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTAINER-->
</div>

</div>

<style>
    .part {
        margin-top: 2rem
    }

    @media (max-width: 992px) {
        /* .part {
            margin-top: 0 !important;
        } */

        /* .card {
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

@extends('Layout.footer')

</html>
<!-- end document-->
