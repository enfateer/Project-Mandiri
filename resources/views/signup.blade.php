@extends('template.app')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">

    <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card shadow-lg p-4"
            style="width: 26rem; background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.3);">

            <h2 class="text-center mb-4" style="font-family: 'Poppins', sans-serif;
                       font-weight: 700;
                       font-size: 1.7rem;
                       color: #FFFFFF;
                       letter-spacing: 1px;
                       text-shadow: 0 2px 4px rgba(0,0,0,0.4);">
                Signup to <span style="color: #00ff99;">FinTrack</span>
            </h2>

            <form>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                        <div data-mdb-input-init class="form-outline">
                            <input type="text" id="form3Example1" class="form-control text-white"
                                style="background: transparent; color: #fff;" />
                            <label class="form-label text-white" for="form3Example1">First name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div data-mdb-input-init class="form-outline">
                            <input type="text" id="form3Example2" class="form-control text-white"
                                style="background: transparent; color: #fff;" />
                            <label class="form-label text-white" for="form3Example2">Last name</label>
                        </div>
                    </div>
                </div>

                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="form3Example3" class="form-control text-white"
                        style="background: transparent; color: #fff;" />
                    <label class="form-label text-white" for="form3Example3">Email address</label>
                </div>

                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="form3Example4" class="form-control text-white"
                        style="background: transparent; color: #fff;" />
                    <label class="form-label text-white" for="form3Example4">Password</label>
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4 text-white">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                    <label class="form-check-label" for="form2Example33">
                        Subscribe to our newsletter
                    </label>
                </div>
                <!-- Submit button -->
                <button data-mdb-ripple-init type="button" class="btn btn-success btn-block rounded-pill"
                    style="background-color: #00B86B; border: none;">
                    Sign up
                </button>
            </form>
        </div>
    </div>

@endsection