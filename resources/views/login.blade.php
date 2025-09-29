@extends('template.app')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card shadow-lg p-4"
            style="width: 24rem; background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.3);">

            <h2 class="text-center mb-4" style="font-family: 'Poppins', sans-serif;
                           font-weight: 700;
                           font-size: 1.7rem;
                           color: #FFFFFF;
                           letter-spacing: 1px;
                           text-shadow: 0 2px 4px rgba(0,0,0,0.4);">
                Login to <span style="color: #00ff99;">FinTrack</span>
            </h2>


            <!-- Name input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="formName" class="form-control text-white"
                    style="background: transparent; color: #fff;" />
                <label class="form-label text-white" for="formName">Name</label>
            </div>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="formEmail" class="form-control text-white"
                    style="background: transparent; color: #fff;" />
                <label class="form-label text-white" for="formEmail">Email address</label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4 text-white">
                <input class="form-check-input me-2" type="checkbox" value="" id="formTerms" checked />
                <label class="form-check-label" for="formTerms">
                    I have read and agree to the terms
                </label>
            </div>

            <button type="button" class="btn btn-success btn-block rounded-pill btn-login">
                Login
            </button>

        </div>
    </div>

@endsection