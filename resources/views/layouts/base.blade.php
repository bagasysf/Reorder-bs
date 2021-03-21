<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('css/reorder.css') }}" /> -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title>Reorder</title>
</head>

<body>

    <!-- Navbar Section Start -->
    <div class="row g-0 border garvice-navbar">
        <div class="col-4 col-sm-4 py-3 col-sm-3 col-lg-2 garvice-navbar-brand d-flex justify-content-start">
            <a href="/" data-bs-toggle="tooltip" data-bs-placement="bottom" title="General Affair Service" class="ps-4">
                <img class="img-fluid garvice-navbar-brand-img" src="{{ asset('img/brand/logo-reorder.svg') }}" alt="" />
            </a>
        </div>

        <div class="col-5 col-sm-6 col-lg-8"></div>

        <!-- Navbar Icon for Phone & Tablet Start -->
        <div class="col-3 col-sm-2 d-flex justify-content-end d-flex d-lg-none garvice-navbar-icon">
            <div class="row g-0 align-items-center">
                <a href="" class="col-lg-auto d-flex align-items-center px-3 garvice-navbar-icon-box-xm">
                    <i class="bi bi-three-dots garvice-navbar-icon-three-dots" style="font-size: 1.5rem;"></i>
                </a>
            </div>
        </div>
        <!-- Navbar Icon for Phone & Tablet End -->

        <!-- Navbar Icon for Desktop Start -->
        <div class="col-3 col-sm-2 justify-content-end d-none d-lg-flex garvice-navbar-icon">
            <div class="row g-0 align-items-center">
                <a href="" class="col-lg-auto d-flex align-items-center px-3 garvice-navbar-icon-box">
                    <i class="bi bi-bell garvice-navbar-icon-bell" style="font-size: 1.5rem;"></i>
                </a>
                <a href="" class="col-lg-auto d-flex align-items-center px-3 garvice-navbar-icon-box">
                    <i class=" bi bi-person garvice-navbar-icon-person" style="font-size: 1.8rem;"></i>
                </a>
            </div>
        </div>
        <!-- Navbar Icon for Dekstop End -->
    </div>
    <div class="row g-0 garvice-navbarsec">
        <div class="col-12">
            <ul class="d-flex flex-row list-unstyled justify-content-end garvice-navbarsec-ul">
                <a href="" class="d-flex align-items-center text-decoration-none fw-light px-2 px-sm-3 px-lg-5 garvice-navbarsec-link active">
                    <li>Warehouse</li>
                </a>
                <a href="" class="d-flex align-items-center text-decoration-none fw-light px-2 px-sm-3 px-lg-5 garvice-navbarsec-link">
                    <li>Housekeeping</li>
                </a>
                <a href="" class="d-flex align-items-center text-decoration-none fw-light px-2 px-sm-3 px-lg-5 garvice-navbarsec-link">
                    <li>Maintenance</li>
                </a>
                <a href="" class="d-flex align-items-center text-decoration-none fw-light px-2 px-sm-3 px-lg-5 garvice-navbarsec-link">
                    <li>Mechanic</li>
                </a>
            </ul>
        </div>
    </div>
    <!-- Navbar Section End -->

    <!-- Content Section Start -->
    <div class="row g-0">
        <!-- Sidebar for Desktop Start -->
        <div class="col-lg-2 d-none d-lg-flex justify-content-start border garvice-sidebar">
            <ul class="row g-0 list-unstyled garvice-sidebar-box">
                <a href="/" class="text-decoration-none text-start py-3 ps-4 garvice-sidebar-box-link {{request()->is('/')?'active': ''}}">
                    <li class="fw-bold">
                        <i class="bi bi-app-indicator pe-3"></i>Dashboard
                    </li>
                </a>
                <a href="{{ url('admin/category') }}" class="text-decoration-none text-start py-3 ps-4 garvice-sidebar-box-link {{request()->is('admin/category')?'active': ''}}">
                    <li class="fw-bold">
                        <i class="bi bi-folder pe-3"></i>Category
                    </li>
                </a>
                <a href="{{ url('admin/product') }}" class="text-decoration-none text-start py-3 ps-4 garvice-sidebar-box-link {{request()->is('admin/product')?'active': ''}}">
                    <li class="fw-bold">
                        <i class="bi bi-files-alt pe-3"></i>Product
                    </li>
                </a>
            </ul>
        </div>
        @yield('content')
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="{{ asset('js/bootstrap.js') }}"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>