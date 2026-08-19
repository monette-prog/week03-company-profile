<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'TechSolutions')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            color: #000000;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* NAVBAR */
        .navbar {
            background-color: #212529 !important;
            padding: 12px 8%;
        }

        /* TECHSOLUTIONS - LEFT */
        .navbar-brand {
            color: #ff2d95 !important;
            font-weight: 700;
            font-size: 1.2rem;
        }

        /* MENU - RIGHT */
        .navbar-nav {
            margin-left: auto;
        }

        .nav-link {
            color: #ffffff !important;
            margin-left: 15px;
        }

        .nav-link:hover {
            color: #ff2d95 !important;
        }

        /* FOOTER */
        footer {
            text-align: center;
            color: #888888;
            padding: 30px 0;
            margin-top: 40px;
        }

        footer span {
            color: #ff2d95;
        }

        /* MOBILE */
        @media (max-width: 768px) {
            .navbar {
                padding: 12px 5%;
            }

            .nav-link {
                margin-left: 0;
            }
        }
    </style>

    @yield('styles')
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">

        <div class="container-fluid">

            <!-- LEFT: TechSolutions -->
            <a class="navbar-brand" href="{{ route('home') }}">
                TechSolutions
            </a>

            <!-- MOBILE MENU BUTTON -->
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <!-- RIGHT: NAVIGATION -->
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">
                            About
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services') }}">
                            Services
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">
                            Contact
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>


    <!-- PAGE CONTENT -->
    <main>
        @yield('content')
    </main>


    <!-- FOOTER -->
    <footer>
        © 2024 <span>TechSolutions</span>. All rights reserved.
    </footer>


    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>