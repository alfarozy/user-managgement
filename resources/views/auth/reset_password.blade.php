@extends('layouts.auth')
@section('title', 'Ganti Password')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card form-signin p-4 rounded shadow">
                    <form action="{{ route('update.password') }}" method="post">
                        @csrf
                        @method('PUT')
                        <h5 class="my-5 text-center">Password baru</h5>
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
                        <p class="text-muted">Silahkan masukkan password baru anda.</p>
                        <div class="form-floating mb-3">
                            <input name="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" id="floatingInputPassword"
                                placeholder="Password baru">
                            <label for="floatingInputPassword">Password baru</label>

                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <input type="hidden" name="token" value="{{ request()->token }}">
                        <div class="form-floating mb-3">
                            <input name="confirm_password" type="password"
                                class="form-control @error('confirm_password') is-invalid @enderror"
                                id="floatingInputConfirmPassword" placeholder="Konfirmasi Password">
                            <label for="floatingInputConfirmPassword">Konfirmasi Password</label>

                            @error('confirm_password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
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
