<!-- Sidebar Section Start -->
<div class="col-lg-2 d-none d-lg-flex justify-content-start border garvice-sidebar">
    <ul class="row g-0 list-unstyled garvice-sidebar-box">
        <a href="{{ url('admin/dashboard') }}" class="text-decoration-none text-start py-3 ps-4 garvice-sidebar-box-link {{request()->is('admin/dashboard')?'active': ''}}">
            <li class="fw-bold">
                <i class="bi bi-app-indicator pe-3"></i>Dashboard
            </li>
        </a>
        @hasanyrole('warehouse')
        <a href="{{ url('admin/warehouse/category') }}" class="text-decoration-none text-start py-3 ps-4 garvice-sidebar-box-link {{request()->is('admin/warehouse/category')?'active': ''}}">
            <li class="fw-bold">
                <i class="bi bi-folder pe-3"></i>Category
            </li>
        </a>
        <a href="{{ url('admin/warehouse/product') }}" class="text-decoration-none text-start py-3 ps-4 garvice-sidebar-box-link {{request()->is('admin/warehouse/product')?'active': ''}}">
            <li class="fw-bold">
                <i class="bi bi-files-alt pe-3"></i>Product
            </li>
        </a>
        @endrole
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-transparent text-start py-3 ps-4 garvice-sidebar-box-button">
                <li class="fw-bold">
                    <i class="bi bi-box-arrow-left pe-3"></i>Logout
                </li>
            </button>
            <!-- <a href="{{ route('logout') }}" class="text-decoration-none text-start py-3 ps-4 garvice-sidebar-box-link {{request()->is('admin/product')?'active': ''}}"> -->
            </a>
        </form>
    </ul>
</div>
<!-- Sidebar Section End -->