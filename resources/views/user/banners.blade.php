<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/resto.png') }}">
    <title>{{ $title }}</title>
    <script src="https://kit.fontawesome.com/5f52f05008.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            background-image: url("{{ asset('img/background.jpeg') }}");
            background-size: cover;
        }

        a {
            text-decoration: none;
        }

        .content {
            margin-top: 10%;
        }

        i:hover,
        .link:hover {
            cursor: pointer;
            color: burlywood;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link active  text-light" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Pricing</a>
                    </li>
                </ul>
            </div>


        </div>
    </nav>

    <section id="banner">
        <!-- Content Wrapper. Contains page content -->
        <div class="content">
            <!-- Main content -->
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="text-center judul text-light ">{{ __('Selamat Datang di Website Kami!') }}</h1><br />

                        <h1 class="text-center link text-light"><a href="{{ route('user') }}" class="text-light">{{
                                __('Lihat menu') }}<i class="fa-solid fa-angles-right"></i></a>
                        </h1>
                        <br />
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <i class="fa fa-instagram text-light m-3"></i>
                        <i class="fa fa-facebook text-light m-3"></i>
                        <i class="fa fa-phone text-light m-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>