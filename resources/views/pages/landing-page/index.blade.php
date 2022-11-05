<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <style>
        * {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container py-1">
            <a class="navbar-brand" href="#">
                <img src="/image/logo-polibatam.png" width="70" alt="" />
                <img src="/image/logo-kampus-merdeka.png" width="70" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pengumunan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <button class="btn btn-success" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <main class="">
        @include('pages.landing-page.banner')
        @include('pages.landing-page.jenis-pkm')
        @include('pages.landing-page.tahapan-daftar')
    </main>
    <footer class="text-white" style="background-color: #373E46">
        <div class="border-top py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3 text-center text-md-start mb-4 mb-md-0 align-self-center">
                        <img src="/image/logo-polibatam.png" width="150" alt="" />
                    </div>
                    <div class="col-12 col-md-3 text-center text-md-start mb-4 mb-md-0">
                        <h4 class="h5 mb-3 fw-bold">Special Course</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="" class="text-decoration-none lh-lg"
                                    style="color: var(--muted-color)">Wedding Foods</a>
                            </li>
                            <li>
                                <a href="" class="text-decoration-none lh-lg"
                                    style="color: var(--muted-color)">Healthy and Muscle</a>
                            </li>
                            <li>
                                <a href="" class="text-decoration-none lh-lg"
                                    style="color: var(--muted-color)">Office Food Daily</a>
                            </li>
                            <li>
                                <a href="" class="text-decoration-none lh-lg"
                                    style="color: var(--muted-color)">Happy Kids</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-3 text-center text-md-start mb-4 mb-md-0">
                        <h4 class="h5 mb-3 fw-bold">Company</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="" class="text-decoration-none lh-lg"
                                    style="color: var(--muted-color)">APIs Developer</a>
                            </li>
                            <li>
                                <a href="" class="text-decoration-none lh-lg"
                                    style="color: var(--muted-color)">Career</a>
                            </li>
                            <li>
                                <a href="" class="text-decoration-none lh-lg"
                                    style="color: var(--muted-color)">Terms & Conditions
                                </a>
                            </li>
                            <li>
                                <a href="" class="text-decoration-none lh-lg"
                                    style="color: var(--muted-color)">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-3 text-center text-md-start mb-4 mb-md-0">
                        <h4 class="h5 mb-3 fw-bold">Be Our Friend</h4>
                        <p style="color: var(--muted-color)" class="lh-lg">
                            3, Season Park, Jakarta <br />
                            support@foodyar.co,id <br />
                            021 - 1111 - 2222
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-top py-3">
            <p class="text-center mb-0" style="color: var(--muted-color)">
                All Rights Reserved &copy; Foodyar 2020
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>
