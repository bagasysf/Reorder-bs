<?php

namespace App\Http\Controllers;

use App\Model\CategoryItem;
use Illuminate\Http\Request;

class CategoryItemController extends Controller
{
    public function index()
    {
        $title = "Category";
        $categories = CategoryItem::paginate(5);
        return view('admin.warehouse.categoryitem.index', [
            'title' => $title,
            'categories' => $categories
        ]);
    }

    public function create()
    {
        $title = "Create Category";
        $categories = CategoryItem::orderBy('created_at', 'desc')->Paginate(3);
        return view('admin.warehouse.categoryitem.create', [
            'title' => $title,
            'categories' => $categories
        ]);
    }

    public function store()
    {
        CategoryItem::create([
            'name' => request('name'),
            'description' => request('description')
        ]);

        return redirect('admin/warehouse/categoryitem');
    }

    public function edit($id)
    {
        $title = "Edit Category";
        $categoryid = CategoryItem::where('id', $id)->first();
        $categories = CategoryItem::orderBy('created_at', 'desc')->Paginate(3);
        return view('admin.warehouse.categoryitem.edit', [
            'title' => $title,
            'categoryid' => $categoryid,
            'categories' => $categories
        ]);
    }

    public function update($id)
    {
        $categoryid = CategoryItem::where('id', $id)->first();
        $categoryid->update([
            'name' => request('name'),
            'description' => request('description')
        ]);

        return redirect('admin/warehouse/categoryitem');
    }

    public function destroy($id)
    {
        $categoryid = CategoryItem::where('id', $id)->first();
        $categoryid->delete();

        return redirect('admin/warehouse/categoryitem');
    }
}
