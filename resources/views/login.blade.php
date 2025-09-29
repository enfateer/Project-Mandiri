@extends('template.app')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card shadow-lg p-4"
            style="width: 26rem; background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.3);">

            <h2 class="text-center mb-4" style="font-family: 'Poppins', sans-serif;
                           font-weight: 700;
                           font-size: 1.7rem;
                           color: #FFFFFF;
                           letter-spacing: 1px;
                           text-shadow: 0 2px 4px rgba(0,0,0,0.4);">
                Login to <span style="color: #00ff99;">FinTrack</span>
            </h2>

            <form method="POST" action="{{ route('login.auth') }}">
                @csrf

                @if (Session::get('error'))
                    <div class="alert alert-danger my-3">{{ Session::get('error') }}</div>
                @endif

                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="form3Example3"
                        class="form-control text-white @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}"
                        style="background: transparent; color: #fff;" />
                    <label class="form-label text-white" for="form3Example3">Email address</label>
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="form3Example4"
                        class="form-control text-white @error('password') is-invalid @enderror"
                        name="password" style="background: transparent; color: #fff;" />
                    <label class="form-label text-white" for="form3Example4">Password</label>
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4 text-white">
                    <input class="form-check-input me-2" type="checkbox" name="remember" id="form2Example33" />
                    <label class="form-check-label" for="form2Example33">
                        Remember me
                    </label>
                </div>

                <!-- Submit button -->
                <button data-mdb-ripple-init type="submit"
                    class="btn btn-success btn-block rounded-pill"
                    style="background-color: #00B86B; border: none;">
                    Login
                </button>

                <!-- Register buttons -->
                <div class="text-center mt-3">
                    <p class="text-white">or sign in with:</p>
                    <button type="button" class="btn btn-secondary btn-floating mx-1"><i class="fab fa-facebook-f"></i></button>
                    <button type="button" class="btn btn-secondary btn-floating mx-1"><i class="fab fa-google"></i></button>
                    <button type="button" class="btn btn-secondary btn-floating mx-1"><i class="fab fa-twitter"></i></button>
                    <button type="button" class="btn btn-secondary btn-floating mx-1"><i class="fab fa-github"></i></button>
                </div>
            </form>
        </div>
    </div>

@endsection
