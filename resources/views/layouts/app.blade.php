<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- awesone fonts css-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Klusmelder</title>
    <style>

    </style>
    @stack('styles')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <div class="container">
            <!-- Navbar brand (text logo) -->
            <a class="navbar-brand order-lg-1" href="#">Klusmelder</a>

            <!-- Toggle button for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>



            <!-- Language dropdown button -->
            <div class="dropdown order-lg-3">
                <button class="btn btn-primary">
                    Post job
                </button>
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Language
                </button>
                <!-- Language dropdown menu -->
                <ul class="dropdown-menu dropdown-menu-lang" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">English</a></li>
                    <li><a class="dropdown-item" href="#">Dutch</a></li>
                    <!-- Add more language options as needed -->
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')



    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>


@stack('scripts')
