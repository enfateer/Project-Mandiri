@extends('template.app')

@section('content')



    <div class="container mt-5"">
        <div class="row align-items-center">
            <!-- Kolom kiri (teks) -->
            <div class="col-md-6">
                <h1 class="mb-1"><b style="color: #FFFFFF">FinTrack <span style="color: #00FF9D">App</span>
                                 </b>
                </h1>

                <p class="mt-0" style="font-family: 'Lucida Sans', 'Lucida Sans Regular'; color: #0C344B;">Your Smart Financial Companion
                    <i class="fa-solid fa-credit-card"></i>
                </p>

                <small style="color: #0C344B">
                    Manage your finances easily, quickly, and securely with <span style="color: #00FF9D"><b>FinTrack
                        App.</b></span><br>
                    This application is designed to help you record income, expenses,
                    <br> and control the flow of personal or business finances in one hand.
                </small>

                <div class="mt-5">
                    <button type="button" class="btn btn-primary rounded-pill">Info Lainnya</button>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <img src="{{ asset('image/org.png') }}" alt="FinTrack App Logo" class="img-fluid ms-4"
                    style="max-width: 400px;" loading="lazy" />
            </div>

        </div>
    </div>

@endsection