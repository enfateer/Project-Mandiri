<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FinTrack-App</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/9.1.0/mdb.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary px-5">
        <div class="container-fluid">
            <!-- Toggle button -->
            <button data-mdb-collapse-init class="navbar-toggler" type="button"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="{{route('home')}}">
                    <img src="{{ asset('image/fintrack-removebg-preview.png') }}" height="40" alt="FinTrack Logo"
                        loading="lazy" />
                </a>
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Dashboard</a>
                    </li>
                </ul>
            </div>

            <!-- Right elements -->
            <div class="d-flex align-items-center mr-4">
                <div class="d-flex align-items-center">
                    <a href="{{route('login')}}" data-mdb-ripple-init type="submit" class="btn btn-secondary px-3 me-2 rounded-pill">
                        Login
                    </a>
                    <a href="{{route('sign_up')}}" data-mdb-ripple-init type="button" class="btn btn-primary me-3 rounded-pill">
                        Sign up
                    </a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- MDB -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/9.1.0/mdb.umd.min.js"></script>

</body>

</html>