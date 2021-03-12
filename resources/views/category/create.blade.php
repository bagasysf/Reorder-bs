@extends('template.base')

@section('content')
<div class="col-12 col-lg-10 sub-content g-0">
    <div class="row g-0">
        <div class="col-12 col-lg-7 text-center fw-bold">
            <div class="row g-0">
                <div class="col-12 border py-3">
                    <i class="bi bi-plus-square pe-2" style="color: cornflowerblue;"></i>Create Category
                </div>
                <div class="col-12 px-4 pb-4">
                    <input type="text" class="form-control rounded-0 my-4" placeholder="First name" aria-label="First name">
                    <input type="text" class="form-control rounded-0 my-4" placeholder="Last name" aria-label="Last name">
                    <div class="d-flex justify-content-end">
                        <a href="/category" class="btn btn-white border text-secondary me-4 rounded-0">Cancel</a>
                        <button type="button" class="btn btn-white border text-secondary rounded-0">Create</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-5 text-center fw-bold">
            <div class="row g-0 border py-3">
                <div class="col-12">
                    <a href="" class="text-decoration-none text-dark">
                        <i class="bi bi-list-ul pe-2" style="color: cornflowerblue;"></i>Last Created
                    </a>
                </div>
            </div>
            <div class="row g-0 border">
                <div class="col-12 p-3">
                    @foreach( $sorted as $sorted )
                    <ul class="list-group">
                        <div class="row g-0 align-items-center py-1">
                            <div class="col-6 text-start">
                                <li class="list-group-item border-0 text-secondary">{{$sorted->name}}</li>
                            </div>
                            <div class="col-6 text-end">
                                <li class="list-group-item border-0 fw-light"><i class="bi bi-clock-history pe-2" style="color: cornflowerblue;"></i>{{$sorted->created_at}}</li>
                            </div>
                        </div>
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection