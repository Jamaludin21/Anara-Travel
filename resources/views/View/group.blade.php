@extends('Layout.header')

@extends('Layout.side')

@section('title', 'View Group')

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
                                <table class="table table-data2">
                                    <thead>
                                        <tr style="text-align: center">
                                            <th>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </th>
                                            <th>Group Code</th>
                                            <th>Chairman Name</th>
                                            <th>Registration Date</th>
                                            <th>Phone Number</th>
                                            <th>Number Invoice</th>
                                            <th>Number of Participant</th>
                                            <th>Start From</th>
                                            <th>Type Tour</th>
                                            <th>Date of Departure</th>
                                            {{-- <th>Customer</th> --}}
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($group as $item)
                                            <tr class="tr-shadow" style="text-align: center">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>{{ $item->group_code }}</td>
                                                <td>
                                                    <span class="block-email">{{ $item->chairman_name }}</span>
                                                </td>
                                                <td class="desc">{{ $item->regist_date }}</td>
                                                <td>{{ $item->phone_number }}</td>
                                                <td>
                                                    <span class="status--process">{{ $item->invoice_number }}</span>
                                                </td>
                                                <td>{{ $item->participant_number }}</td>
                                                <td>{{ $item->start_from }}</td>
                                                <td>{{ $item->type_tour }}</td>
                                                <td>{{ $item->date_departure }}</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item edit" data-toggle="modal"
                                                            data-target="#editModal" data-placement="top" title="Edit"
                                                            data="{{ $item->id }}"><i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        {{-- <button type="submit" class="item delete" data-toggle="tooltip"
                                                            data-placement="top" title="Delete"
                                                            data="{{ $item->id }}"><i class="zmdi zmdi-delete"></i>
                                                        </button> --}}
                                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                            action="{{ route('group_delete', $item->id) }}"
                                                            method="POST"> @csrf
                                                            <input type="hidden" name="id"
                                                                value="{{ $item->id }}">
                                                            <button type="submit" class="item delete"
                                                                data-toggle="tooltip" data-placement="top"
                                                                title="Delete" data="{{ $item->id }}"><i
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
                                            <tr class="spacer"></tr>
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
                    <h5 class="modal-title" id="editModalLabel">Ubah Data Grup</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{ route('group_edit', $item->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
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

</html>
<!-- end document-->
