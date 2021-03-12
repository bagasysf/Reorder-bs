@extends('template.base')

@section('content')
<div class="col-12 col-lg-10 sub-content g-0">
    <div class="row g-0">
        <div class="col-8 border border-1 text-center py-3 fw-bold">
            <i class="bi bi-list-ul pe-2" style="color: cornflowerblue;"></i>List Category
        </div>
        <div class=" col-4 col-sm-4 border border-1 text-center py-3 fw-bold">
            <a href="/category/create" class="text-decoration-none text-dark">
                <i class="bi bi-plus-square pe-2" style="color: cornflowerblue;"></i>Add New Category
            </a>
        </div>
    </div>
    <div class="overflow-reorder">
        <table class="table table-borderless caption-top">
            <thead class="border">
                <tr>
                    <th class="py-3 ps-3">No</th>
                    <th class="py-3">Name</th>
                    <th class="py-3">Description</th>
                    <th class="py-3">Created</th>
                    <th class="py-3">Updated</th>
                    <th colspan="2" class="py-3 pe-3">Customize</th>
                </tr>
            </thead>
            <tbody class="border text-secondary">
                @php
                $num=0;
                @endphp

                @foreach($category as $category)
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
                        <a class="px-1 text-decoration-none text-dark" href=""><i class="bi bi-pen" style="color: cornflowerblue;"></i></a>
                    </td>
                    <td class="text-center py-3 pe-3">
                        <a class="px-1 text-decoration-none text-dark" href=""><i class="bi bi-x-square" style="color: cornflowerblue;"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection