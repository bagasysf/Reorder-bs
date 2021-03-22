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
<!-- Content Section End -->