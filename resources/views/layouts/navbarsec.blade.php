<!-- Navbar Secindary Start -->
<div class="row g-0 garvice-navbarsec border">
    <div class="col-12">
        <ul class="d-flex flex-row list-unstyled justify-content-end garvice-navbarsec-ul">
            @hasanyrole('admin|warehouse')
            <a href="{{ url('admin/warehouse/dashboard') }}" class="d-flex align-items-center text-decoration-none fw-light px-2 px-sm-3 px-lg-5 garvice-navbarsec-link">
                <li>Warehouse</li>
            </a>
            @endhasanyrole

            @hasanyrole('admin|housekeeping')
            <a href="" class="d-flex align-items-center text-decoration-none fw-light px-2 px-sm-3 px-lg-5 garvice-navbarsec-link">
                <li>Housekeeping</li>
            </a>
            @endhasanyrole

            @hasanyrole('admin|maintenance')
            <a href="" class="d-flex align-items-center text-decoration-none fw-light px-2 px-sm-3 px-lg-5 garvice-navbarsec-link">
                <li>Maintenance</li>
            </a>
            @endhasanyrole

            @hasanyrole('admin|mechanic')
            <a href="{{ url('admin/mechanic/dashboard') }}" class="d-flex align-items-center text-decoration-none fw-light px-2 px-sm-3 px-lg-5 garvice-navbarsec-link">
                <li>Mechanic</li>
            </a>
            @endhasanyrole
        </ul>
    </div>
</div>
<!-- Navbar Secondary End -->