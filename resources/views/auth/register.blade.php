@extends('layouts.auth')
@section('title', 'Login')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card form-signin p-4 rounded shadow">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf

                        <h5 class="my-5 text-center">Register </h5>
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
                        <div class="form-floating mb-2">
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                id="floatingInput" placeholder="Harry">
                            <label for="floatingInput">Nama Lengkap</label>

                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-2">
                            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                id="floatingEmail" placeholder="name@example.com">
                            <label for="floatingEmail">Email Address</label>

                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input name="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" id="floatingPassword"
                                placeholder="Password">
                            <label for="floatingPassword">Password</label>

                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <button class="btn btn-primary w-100" type="submit">Register</button>

                        <div class="col-12 text-center mt-3">
                            <p class="mb-0 mt-3"><small class="text-dark me-2">Sudah punya akun ?</small> <a
                                    href="{{ route('login') }}" class="text-dark fw-bold">Login sekarang</a></p>
                        </div><!--end col-->

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
