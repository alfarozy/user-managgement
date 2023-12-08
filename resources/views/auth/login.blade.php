@extends('layouts.auth')
@section('title', 'Login')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card form-signin p-4 rounded shadow">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h5 class="my-5 text-center">Login </h5>
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
                            <input name="email" type="email" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="password" type="password" class="form-control" id="floatingPassword"
                                placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="mb-3">

                            </div>
                            <p class="forgot-pass mb-0"><a href="{{ route('forgotpassword') }}"
                                    class="text-dark small fw-bold">Lupa password ?</a></p>
                        </div>

                        <hr>
                        <button class="btn btn-primary w-100" type="submit">Sign in</button>

                        <div class="col-12 text-center mt-3">
                            <p class="mb-0 mt-3"><small class="text-dark me-2">Belum punya akun ?</small> <a
                                    href="{{ route('register') }}" class="text-dark fw-bold">Register sekarang</a></p>
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
