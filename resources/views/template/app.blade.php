<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinTrack-App</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/9.1.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary px-5">
        <div class="container-fluid">
            <button data-mdb-collapse-init class="navbar-toggler" type="button"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                {{-- <a class="navbar-brand mt-2 mt-lg-0" href="{{route('home')}}">
                    <img src="{{ asset('image/fintrack-removebg-preview.png') }}" height="40" alt="FinTrack Logo"
                        loading="lazy" />
                </a> --}}
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Dashboard</a></li>
                </ul>
            </div>

            <div class="d-flex align-items-center mr-4">
                <div class="d-flex align-items-center">
                    @guest
                        <a href="{{route('login')}}" class="btn btn-secondary px-3 me-2 rounded-pill">Login</a>
                        <a href="{{route('sign_up')}}" class="btn btn-primary me-3 rounded-pill">Sign up</a>
                    @endguest

                    @auth
                        <span class="me-3 px-3 py-1 rounded-pill text-dark"
                            style="background: rgba(0, 255, 153, 0.2); font-weight: 600; display: flex; align-items: center; gap: 5px;">
                            <i class="fas fa-user"></i> {{ Auth::user()->name }}
                        </span>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-danger rounded-pill">Logout</button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/9.1.0/mdb.umd.min.js"></script>
</body>

</html>