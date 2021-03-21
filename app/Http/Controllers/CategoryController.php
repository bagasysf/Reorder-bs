<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $title = "Category";
        $categories = Category::paginate(5);
        return view('admin.category.index', [
            'title' => $title,
            'categories' => $categories
        ]);
    }

    public function create()
    {
        $title = "Create Category";
        $categories = Category::orderBy('created_at', 'desc')->Paginate(3);
        return view('admin.category.create', [
            'title' => $title,
            'categories' => $categories
        ]);
    }

    public function store()
    {
        Category::create([
            'name' => request('name'),
            'description' => request('description')
        ]);

        return redirect('admin/category');
    }

    public function edit($id)
    {
        $title = "Edit Category";
        $categoryid = Category::where('id', $id)->first();
        $categories = Category::orderBy('created_at', 'desc')->Paginate(3);
        return view('admin.category.edit', [
            'title' => $title,
            'categoryid' => $categoryid,
            'categories' => $categories
        ]);
    }

    public function update($id)
    {
        $categoryid = Category::where('id', $id)->first();
        $categoryid->update([
            'name' => request('name'),
            'description' => request('description')
        ]);

        return redirect('admin/category');
    }

    public function destroy($id)
    {
        $categoryid = Category::where('id', $id)->first();
        $categoryid->delete();

        return redirect('admin/category');
    }
}
