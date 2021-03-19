@extends('template.base')

@section('content')
<div class="col-12 col-lg-10 g-0 content-garvice">
    <div class="row g-0">
        <div class="col-8 text-center py-3 fw-bold content-garvice-header">
            <i class="bi bi-list-ul pe-2"></i>List Category
        </div>
        <a href="/category/create" class="text-decoration-none text-dark col-4 col-sm-4 text-center py-3 fw-bold content-garvice-link-add">
            <i class="bi bi-plus-square pe-2"></i>Add New Category
        </a>
        <div class="col-12">
            <div class="content-garvice-overflow">
                <table class="table table-borderless content-garvice-table">
                    <thead>
                        <tr>
                            <th class="py-3 ps-3">No</th>
                            <th class="py-3">Name</th>
                            <th class="py-3">Description</th>
                            <th class="py-3">Created</th>
                            <th class="py-3">Updated</th>
                            <th colspan="2" class="py-3 pe-3">Customize</th>
                        </tr>
                    </thead>
                    <tbody class="text-secondary">
                        @php
                        $num=0;
                        @endphp

                        @foreach($categories as $category)
                        @php
                        $num++;
                        @endphp
                        <tr>
                            <td class="py-3 ps-3">{{$num}}</th>
                            <td class="py-3">{{$category->name}}</td>
                            <td class="py-3">{{$category->description}}</td>
                            <td class="py-3">{{$category->created_at}}</td>
                            <td class="py-3">{{$category->updated_at}}</td>
                            <td class="text-center py-3">
                                <a class="px-1 text-decoration-none" href="{{ url('category', $category->id) }}/edit"><i class="bi bi-pen content-garvice-table-icon-edit"></i></a>
                            </td>
                            <td>
                                <form action="/category/{{$category->id}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="bg-transparent border border-0 text-dark pt-2" href=""><i class="bi bi-x-square content-garvice-table-icon-delete"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row g-0 justify-content-center pt-3">
                    <div class="col-auto">
                        <span style="width: 30px;">
                            {{ $categories->links('vendor.pagination.garvice-pagination') }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection