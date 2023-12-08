@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
    <div class="container-fluid">
        <div class="layout-specing">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h5 class="mb-0">Dashboard</h5>
                </div>

            </div>

            <div class="row row-cols-xl-2 row-cols-md-2 row-cols-1">
                <div class="col mt-4">
                    <a href="#!"
                        class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-1 ms-3">
                                <h6 class="mb-0 text-muted">Total kategori</h6>
                                <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value"
                                        data-target="{{ $category }}">0</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div><!--end col-->
                <div class="col mt-4">
                    <a href="#!"
                        class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-1 ms-3">
                                <h6 class="mb-0 text-muted">Total Jenis</h6>
                                <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value"
                                        data-target="{{ $subCategory }}">0</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div><!--end col-->

            </div><!--end row-->

            <div class="row">
                <div class="col-12 mt-4">
                    <div class="table-responsive shadow rounded">
                        <table class="table table-center bg-white mb-0">
                            <thead>
                                <tr>
                                    <th class="border-bottom p-3">No.</th>
                                    <th class="border-bottom p-3" style="min-width: 220px;">Nama kategori</th>
                                    <th class="text-left border-bottom p-3" style="min-width: 200px;">Jenis
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <!-- Start -->
                                @foreach ($categories as $item)
                                    <tr>
                                        <th class="p-3">{{ $loop->iteration }}</th>
                                        <td class="text-left p-3">{{ $item->name }}</td>
                                        <td class="text-left p-3">
                                            <ol>
                                                @foreach ($item->jenis as $jenis)
                                                    <li>{{ $jenis->name }}</li>
                                                @endforeach
                                            </ol>
                                        </td>

                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </div><!--end container-->
@endsection
