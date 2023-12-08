@extends('layouts.auth')
@section('title', 'Konfirmasi otp')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card form-signin p-4 rounded shadow">
                    <form action="{{ route('confirm.otp') }}" method="post">
                        @csrf
                        <h5 class="my-5 text-center">Konfirmasi Otp</h5>
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
                        <p class="text-muted">Untuk melakukan aktivasi silahkan inputkan kode otp yang kami kirim ke
                            email anda</p>
                        <div class="form-floating mb-3">
                            <input type="otp" name="otp" class="form-control" id="floatingInput"
                                placeholder="Password">
                            <label for="floatingInput">Kode OTP</label>
                            @error('otp')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <button class="btn btn-primary w-100" type="submit">Submit</button>

                        <p class="mb-0 text-muted mt-3 text-center">©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> E-waste.
                            <br>
                            Powered by G-Tech
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div> <!--end container-->
@endsection
