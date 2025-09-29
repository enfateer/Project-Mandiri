@extends('template.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/signup.css') }}">
<div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow-lg p-4" style="width: 26rem; background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.3);">
        <h2 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 1.7rem; color: #FFFFFF; letter-spacing: 1px; text-shadow: 0 2px 4px rgba(0,0,0,0.4);">
            Signup to <span style="color: #00ff99;">FinTrack</span>
        </h2>

        <form method="POST" action="{{ route('signup.send_data') }}">
            @csrf
            @if (Session::get('error'))
                <div class="alert alert-danger my-3">{{ Session::get('error') }}</div>
            @endif

            <!-- First & Last Name -->
            <div class="row mb-4">
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form3Example1" class="form-control text-white @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" style="background: transparent; color: #fff;" />
                        <label class="form-label text-white" for="form3Example1">First name</label>
                        @error('first_name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form3Example2" class="form-control text-white @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" style="background: transparent; color: #fff;" />
                        <label class="form-label text-white" for="form3Example2">Last name</label>
                        @error('last_name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>
            </div>

            <!-- Email -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control text-white @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" style="background: transparent; color: #fff;" />
                <label class="form-label text-white" for="form3Example3">Email address</label>
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <!-- Password -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control text-white @error('password') is-invalid @enderror" name="password" style="background: transparent; color: #fff;" />
                <label class="form-label text-white" for="form3Example4">Password</label>
                @error('password') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <!-- Submit -->
            <button type="submit" class="btn btn-success btn-block rounded-pill" style="background-color: #00B86B; border: none;">Sign up</button>
        </form>
    </div>
</div>
@endsection
