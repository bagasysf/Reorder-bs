@extends('layouts.base')

@section('content')
<div class="col-12 col-lg-10 garvice-content">
    <div class="row g-0">
        <div class="col-12 col-lg-6 text-center fw-bold border">
            <div class="row g-0">
                <div class="col-12 py-3">
                    <i class="bi bi-plus-square pe-2"></i>{{$title}}
                </div>
                <div class="col-12 px-4 pb-4">
                    <form action="{{ url('admin/warehouse/subcategoryitem', $subcategoryid->id) }}" method="POST" class="garvice-content-form">
                        @csrf
                        @method("PUT")
                        <select class="form-select" aria-label="Default select example" name="categoryitem_id">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}" {{$subcategoryid->categoryitem->id == $category->id ? 'selected':null}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                        <input type="text" name="name" class="form-control rounded-0 my-4" placeholder="Category name" aria-label="First name" value="{{$subcategoryid->name}}">
                        <div class="d-flex justify-content-end">
                            <a href="{{ url('admin/warehouse/subcategoryitem') }}" class="btn btn-white border text-secondary garvice-content-form-link me-4 rounded-0">Cancel</a>
                            <button type="submit" class="btn btn-white border text-secondary garvice-content-form-button rounded-0">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 text-center fw-bold border">
            <div class="row g-0 py-3">
                <div class="col-12">
                    <i class="bi bi-list-ul pe-2"></i>Last Created
                </div>
            </div>
            <div class="row g-0">
                <div class="col-12 p-3">
                    @foreach( $subcategories as $subcategory )
                    <ul class="list-group">
                        <div class="row g-0 align-items-center py-1">
                            <div class="col-6 text-start">
                                <li class="list-group-item border-0 text-secondary fw-normal">{{$subcategory->name}}</li>
                            </div>
                            <div class="col-6 text-end">
                                <li class="list-group-item border-0 fw-light"><i class="bi bi-clock-history pe-2" style="color: cornflowerblue;"></i>{{$subcategory->created_at}}</li>
                            </div>
                        </div>
                    </ul>
                    @endforeach
                    <div class="row g-0 justify-content-center pt-3">
                        <div class="col-auto fw-normal">
                            <span style="width: 30px;">
                                {{ $subcategories->links('vendor.pagination.garvice-pagination') }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection