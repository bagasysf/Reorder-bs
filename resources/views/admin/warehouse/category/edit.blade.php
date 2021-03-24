@extends('layouts.base')

@section('content')
<div class="col-12 col-lg-10 garvice-content">
    <div class="row g-0 border">
        <div class="col-12 col-lg-6 text-center fw-bold border">
            <div class="row g-0">
                <div class="col-12 py-3">
                    <i class="bi bi-plus-square pe-2"></i>{{$title}}
                </div>
                <div class="col-12 px-4 pb-4">
                    <form action="{{ url('admin/warehouse/category', $categoryid->id) }}" method="POST" class="garvice-content-form">
                        @csrf
                        @method("PUT")
                        <input type="text" name="name" class="form-control rounded-0 my-4" value="{{ $categoryid->name }}" aria-label="First name">
                        <input type="text" name="description" class="form-control rounded-0 my-4" value="{{ $categoryid->description }}" aria-label="Last name">
                        <div class="d-flex justify-content-end">
                            <a href="{{ url('admin/warehouse/category') }}" class="btn btn-white border text-secondary me-4 rounded-0 garvice-content-form-link">Cancel</a>
                            <button type="submit" class="btn btn-white border text-secondary rounded-0 garvice-content-form-button">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 text-center fw-bold border">
            <div class="row g-0 py-3">
                <div class="col-12 ">
                    <i class="bi bi-list-ul pe-2 text-dark"></i>Last Created
                </div>
            </div>
            <div class="row g-0">
                <div class="col-12 p-3">
                    @foreach( $categories as $category )
                    <ul class="list-group">
                        <div class="row g-0 align-items-center py-1">
                            <div class="col-6 text-start">
                                <li class="list-group-item border-0 text-secondary fw-normal">{{$category->name}}</li>
                            </div>
                            <div class="col-6 text-end">
                                <li class="list-group-item border-0 fw-light"><i class="bi bi-clock-history pe-2" style="color: cornflowerblue;"></i>{{$category->created_at}}</li>
                            </div>
                        </div>
                    </ul>
                    @endforeach
                    <div class="row g-0 justify-content-center pt-3">
                        <div class="col-auto fw-normal">
                            <span style="width: 30px;">
                                {{ $categories->links('vendor.pagination.garvice-pagination') }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection