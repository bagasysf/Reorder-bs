<!-- Sidebar Section Start -->
<div class="col-lg-2 d-none d-lg-flex justify-content-start border garvice-sidebar">
    <ul class="row g-0 list-unstyled garvice-sidebar-box">
        <a href="{{ url('admin/dashboard') }}" class="text-decoration-none text-start py-3 ps-4 garvice-sidebar-box-link {{request()->is('admin/dashboard')?'active': ''}}">
            <li class="fw-bold">
                <i class="bi bi-app-indicator pe-3"></i>Dashboard
            </li>
        </a>

        @hasanyrole('admin|warehouse')
        <a class="fw-bold text-decoration-none text-start py-3 ps-4 garvice-sidebar-box-link {{request()->is('admin/warehouse')?'active': ''}}" data-bs-toggle="collapse" href="#collapseWarehouse" role="button" aria-expanded="false" aria-controls="collapseExample">
            <i class="bi bi-house pe-3"></i>Warehouse
        </a>
        <div class="collapse" id="collapseWarehouse">
            <div class="card card-body p-0 border border-0">
                <a href="{{ url('admin/warehouse/category') }}" class="text-decoration-none text-start py-3 ps-5 garvice-sidebar-box-link {{request()->is('admin/category')?'active': ''}}">
                    <li class="fw-bold">
                        <i class="pe-2"></i>Category
                    </li>
                </a>
                <a href="{{ url('admin/warehouse/product') }}" class="text-decoration-none text-start py-3 ps-5 garvice-sidebar-box-link {{request()->is('admin/product')?'active': ''}}">
                    <li class="fw-bold">
                        <i class="pe-2"></i>Product
                    </li>
                </a>
            </div>
        </div>
        @endhasanyrole

        @hasanyrole('admin|mechanic')
        <a class="fw-bold text-decoration-none text-start py-3 ps-4 garvice-sidebar-box-link {{request()->is('admin/warehouse')?'active': ''}}" data-bs-toggle="collapse" href="#collapseMechanic" role="button" aria-expanded="false" aria-controls="collapseExample">
            <i class="bi bi-wrench pe-3"></i>Mechanic
        </a>
        <div class="collapse" id="collapseMechanic">
            <div class="card card-body p-0 border border-0">
                <a href="{{ url('admin/mechanic/categoryrepair') }}" class="text-decoration-none text-start py-3 ps-5 garvice-sidebar-box-link {{request()->is('admin/category')?'active': ''}}">
                    <li class="fw-bold">
                        <i class="pe-2"></i>Category
                    </li>
                </a>
                <a href="{{ url('admin/mechanic/subcategoryrepair') }}" class="text-decoration-none text-start py-3 ps-5 garvice-sidebar-box-link {{request()->is('admin/category')?'active': ''}}">
                    <li class="fw-bold">
                        <i class="pe-2"></i>Sub Category
                    </li>
                </a>
                <a href="{{ url('admin/product') }}" class="text-decoration-none text-start py-3 ps-5 garvice-sidebar-box-link {{request()->is('admin/product')?'active': ''}}">
                    <li class="fw-bold">
                        <i class="pe-2"></i>Repair
                    </li>
                </a>
            </div>
        </div>
        @endhasanyrole

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