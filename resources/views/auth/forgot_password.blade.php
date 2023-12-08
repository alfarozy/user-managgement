@extends('layouts.auth')
@section('title', 'Ganti Password')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card form-signin p-4 rounded shadow">
                    <form action="{{ route('forgetpassword.send') }}" method="post">
                        @csrf
                        <h5 class="my-5 text-center">Lupa password</h5>
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
                        <p class="text-muted">Untuk memperbaharui password kami akan mengirim instruksi ke email
                            anda.</p>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                            @error('email')
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
