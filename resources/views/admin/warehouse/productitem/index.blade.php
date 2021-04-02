@extends('layouts.base')

@section('content')
<div class="col-12 col-lg-10 g-0 border garvice-content">
    <div class="row g-0">
        <div class="col-8 text-center py-3 fw-bold garvice-content-header border">
            <i class="bi bi-list-ul pe-2"></i>List Product Item
        </div>
        <a href="{{ url('admin/warehouse/productitem/create') }}" class="text-decoration-none text-dark col-4 col-sm-4 text-center py-3 fw-bold garvice-content-link-add border">
            <i class="bi bi-plus-square pe-2"></i>Add New Product Item
        </a>
        <div class="col-12 border">
            <div class="garvice-content-overflow">
                <table class="table table-borderless garvice-content-table">
                    <thead>
                        <tr>
                            <th class="py-3 ps-3">No</th>
                            <th class="py-3">Category</th>
                            <th class="py-3">Sub Category</th>
                            <th class="py-3">Name</th>
                            <th class="py-3">Uom</th>
                            <th class="py-3">Created</th>
                            <th class="py-3">Updated</th>
                            <th colspan="2" class="py-3 pe-3">Customize</th>
                        </tr>
                    </thead>
                    <tbody class="text-secondary">
                        @php
                        $num=0;
                        @endphp

                        @foreach($productitems as $productitem)
                        @php
                        $num++;
                        @endphp
                        <tr>
                            <td class="py-3 ps-3">{{$num}}</th>
                            <td class="py-3">{{$productitem->subcategoryitem->categoryitem->name}}</td>
                            <td class="py-3">{{$productitem->subcategoryitem->name}}</td>
                            <td class="py-3">{{$productitem->name}}</td>
                            <td class="py-3">{{$productitem->uom}}</td>
                            <td class="py-3">{{$productitem->created_at}}</td>
                            <td class="py-3">{{$productitem->updated_at}}</td>
                            <td class="text-center py-3">
                                <a class="px-1 text-decoration-none" href="{{ url('admin/warehouse/productitem', $productitem->id) }}/edit"><i class="bi bi-pen garvice-content-table-icon-edit"></i></a>
                            </td>
                            <td>
                                <form action="{{ url('admin/warehouse/productitem', $productitem->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="bg-transparent border border-0 text-dark pt-2" href=""><i class="bi bi-x-square garvice-content-table-icon-delete"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row g-0 justify-content-center pt-3">
                    <div class="col-auto">
                        <span style="width: 30px;">
                            {{ $productitems->links('vendor.pagination.garvice-pagination') }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection