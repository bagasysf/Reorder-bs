@extends('layouts.base')

@section('content')
<div class="col-12 col-lg-10 g-0 border garvice-content">
    <div class="row g-0">
        <div class="col-8 text-center py-3 fw-bold garvice-content-header">
            <i class="bi bi-list-ul pe-2"></i>List Category
        </div>
        <a href="{{ url('admin/mechanic/subcategoryrepair/create') }}" class="text-decoration-none text-dark col-4 col-sm-4 text-center py-3 fw-bold garvice-content-link-add">
            <i class="bi bi-plus-square pe-2"></i>Add New Category
        </a>
        <div class="col-12">
            <div class="garvice-content-overflow">
                <table class="table table-borderless garvice-content-table">
                    <thead>
                        <tr>
                            <th class="py-3 ps-3">No</th>
                            <th class="py-3">Category</th>
                            <th class="py-3">Name</th>
                            <th class="py-3">Created</th>
                            <th class="py-3">Updated</th>
                            <th colspan="2" class="py-3 pe-3">Customize</th>
                        </tr>
                    </thead>
                    <tbody class="text-secondary">
                        @php
                        $num=0;
                        @endphp

                        @foreach($subcategories as $subcategory)
                        @php
                        $num++;
                        @endphp
                        <tr>
                            <td class="py-3 ps-3">{{$num}}</th>
                            <td class="py-3">{{$subcategory->categoryrepair->name}}</td>
                            <td class="py-3">{{$subcategory->name}}</td>
                            <!-- <td class="py-3">{{$subcategory->description}}</td> -->
                            <td class="py-3">{{$subcategory->created_at}}</td>
                            <td class="py-3">{{$subcategory->updated_at}}</td>
                            <td class="text-center py-3">
                                <a class="px-1 text-decoration-none" href="{{ url('admin/mechanic/subcategoryrepair', $subcategory->id) }}/edit"><i class="bi bi-pen garvice-content-table-icon-edit"></i></a>
                            </td>
                            <td>
                                <form action="{{ url('admin/mechanic/subcategoryrepair', $subcategory->id) }}" method="POST">
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
                            {{ $subcategories->links('vendor.pagination.garvice-pagination') }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection