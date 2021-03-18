<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/reorder.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" /> -->

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title>Reorder</title>
</head>

<body>

    <!-- Navbar Section Start -->
    <div class="row g-0 navbar-garvice ">
        <div class="col-4 col-sm-4 p-3 col-sm-3 col-lg-2 navbar-garvice-brand d-flex justify-content-center">
            <a href="/" data-bs-toggle="tooltip" data-bs-placement="bottom" title="General Affair Service">
                <img class="img-fluid px-3 navbar-garvice-brand-img" src="{{ asset('img/brand/logo-reorder.svg') }}" alt="" />
            </a>
        </div>

        <div class="col-5 col-sm-6 col-lg-8"></div>

        <!-- Navbar Icon for Phone & Tablet Start -->
        <div class="col-3 col-sm-2 d-flex justify-content-center d-flex d-lg-none navbar-garvice-icon">
            <div class="row align-items-center">
                <a href="">
                    <i class="bi bi-three-dots navbar-garvice-icon-three-dots" style="font-size: 1.5rem;"></i>
                </a>
            </div>
        </div>
        <!-- Navbar Icon for Phone & Tablet End -->

        <!-- Navbar Icon for Desktop Start -->
        <div class="col-3 col-sm-2 d-flex justify-content-center d-none d-lg-flex navbar-garvice-icon">
            <div class="row align-items-center">
                <div class="col-lg-auto m-2">
                    <a href="">
                        <i class="bi bi-bell navbar-garvice-icon-bell" style="font-size: 1.5rem;"></i>
                    </a>
                </div>
                <div class="col-lg-auto m-2">
                    <a href="">
                        <i class=" bi bi-person navbar-garvice-icon-person" style="font-size: 1.8rem;"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- Navbar Icon for Dekstop End -->
    </div>
    <!-- Navbar Section End -->

    <!-- Content Section Start -->
    <div class="row g-0">
        <!-- Sidebar for Desktop Start -->
        <div class="col-lg-2 d-none d-lg-flex justify-content-center sidebar-garvice">
            <ul class="row g-0 list-unstyled sidebar-garvice-box">
                <div href="/" class="text-decoration-none text-start py-3">
                    <li class="fw-bold px-5">
                        <i class="pe-3"></i>
                    </li>
                </div>
                <a href="/" class="text-decoration-none text-start py-3 sidebar-garvice-box-link">
                    <li class="fw-bold px-5">
                        <i class="bi bi-app-indicator pe-3"></i>Dashboard
                    </li>
                </a>
                <a href="/category" class="text-decoration-none text-start py-3 sidebar-garvice-box-link">
                    <li class="fw-bold px-5">
                        <i class="bi bi-folder pe-3"></i>Category
                    </li>
                </a>
                <a href="/product" class="text-decoration-none text-start py-3 sidebar-garvice-box-link">
                    <li class="fw-bold px-5">
                        <i class="bi bi-files-alt pe-3"></i>Product
                    </li>
                </a>
            </ul>
            <!-- <ul class="list-unstyled fw-bold">
                <a class="text-decoration-none sidebar-garvice-link" href="/">
                    <li class="py-2"><i class="bi bi-app-indicator pe-3"></i>Dashboard</li>
                </a>
                <a class="text-decoration-none sidebar-garvice-link" href="/category">
                    <li class="py-2"><i class="bi bi-folder pe-3"></i>Category</li>
                </a>
                <a class="text-decoration-none sidebar-garvice-link" href="/product">
                    <li class="py-2"><i class="bi bi-files-alt pe-3"></i>Product</li>
                </a>
            </ul> -->
        </div>
        @yield('content')
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>