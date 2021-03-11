@extends('template.base')

@section('content')
<!-- Just an image -->
<div class="row border navbar-reorder">
    <div class="col-4 col-sm-4 p-3 col-sm-3 col-lg-2 text-center border">
        <a class="/" href="#">
            <img class="img-fluid" src="{{ asset('styles/img/brand/logo-reorder.svg') }}" alt="" />
        </a>
    </div>
    <div class="col-5 col-sm-6 col-lg-8 border"></div>
    <div class="col-3 col-sm-2 border d-flex justify-content-center navbar-icon d-flex d-lg-none">
        <div class="row align-items-center">
            <i class="bi bi-three-dots" style="font-size: 1.5rem; color: cornflowerblue;"></i>
        </div>
    </div>
    <div class="col-3 col-sm-2 border d-flex justify-content-center navbar-icon d-none d-lg-flex">
        <div class="row align-items-center">
            <div class="col-lg-auto m-2"><i class="bi bi-bell" style="font-size: 1.5rem; color: cornflowerblue;"></i></div>
            <div class="col-lg-auto m-2"><i class="bi bi-person" style="font-size: 1.8rem; color: cornflowerblue;"></i></div>
        </div>
    </div>
</div>
@endsection