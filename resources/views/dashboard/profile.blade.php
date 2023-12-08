@extends('layouts.dashboard')
@section('title', 'Profile')
@section('content')
    <div class="container-fluid">
        <div class="layout-specing">
            <div class="d-md-flex justify-content-between align-items-center">
                <h5 class="mb-0">Profil Manager</h5>
            </div>

            <div class="row">
                <div class="col-lg-12 mt-4">

                    <div class="card border-0 rounded shadow">
                        <div class="card-body">
                            @if (session()->has('info'))
                                <div class="mt-2 alert bg-soft-info fw-medium" role="alert"> <i
                                        class="uil uil-exclamation-octagon fs-5 align-middle me-1"></i>
                                    {!! session()->get('info') !!} </div>
                            @endif
                            @if (session()->has('msg'))
                                <div class="mt-2 alert bg-soft-danger fw-medium" role="alert"> <i
                                        class="uil uil-exclamation-octagon fs-5 align-middle me-1"></i>
                                    {!! session()->get('msg') !!} </div>
                            @endif
                            @if (session()->has('success'))
                                <div class="mt-2 alert bg-soft-success fw-medium" role="alert"> <i
                                        class="uil uil-check-circle fs-5 align-middle me-1"></i>
                                    {!! session()->get('success') !!}
                                </div>
                            @endif
                            <form accept="{{ route('profile.index') }}" method="POST" enctype="multipart/form-data">
                                <div class="mt-4 text-md-start text-center d-sm-flex">
                                    <img src="{{ Auth()->user()->getAvatar() }}"
                                        class="avatar float-md-left image-preview avatar-medium rounded-circle shadow me-md-4"
                                        alt="">

                                    <div class="mt-md-4 mt-3 mt-sm-0">
                                        <button type="button" class="btn-upload btn btn-primary mt-2">Upload
                                            gambar</button>
                                        @error('avatar')
                                            <small class="text-danger d-block">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <input type="file" name="avatar" id="input-img" class="input-img" hidden>
                                </div>

                                @csrf
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Nama lengkap</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input name="name" id="first" type="text"
                                                    class="form-control ps-5" placeholder="Nama lengkap"
                                                    value="{{ auth()->user()->name }}">
                                            </div>
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Nomor telpon</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="phone" class="fea icon-sm icons"></i>
                                                <input name="phone" id="last" type="text"
                                                    class="form-control ps-5" placeholder="Nomor telpon"
                                                    value="{{ auth()->user()->phone }}">
                                            </div>
                                            @error('phone')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Tanggal lahir</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="calendar" class="fea icon-sm icons"></i>
                                                <input name="birth_date" id="birth_date" type="date"
                                                    class="form-control ps-5" placeholder="dd/mm/yyyy"
                                                    value="{{ auth()->user()->birth_date }}">
                                            </div>
                                            @error('birth_date')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Tempat lahir</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="map-pin" class="fea icon-sm icons"></i>
                                                <input name="birth_place" id="birth_place" type="birth_place"
                                                    class="form-control ps-5" placeholder=""
                                                    value="{{ auth()->user()->birth_place }}">
                                            </div>
                                            @error('birth_place')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Alamat</label>
                                            <div class="form-icon position-relative">
                                                <textarea name="address" id="address" rows="4" class="form-control ps-5">{{ auth()->user()->address }}</textarea>
                                            </div>
                                            @error('address')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div><!--end row-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="submit" id="submit" name="send" class="btn btn-primary"
                                            value="Save Changes">
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form><!--end form-->
                        </div>
                    </div>
                </div><!--end col-->

            </div><!--end row-->
        </div>
    </div><!--end container-->


@endsection
