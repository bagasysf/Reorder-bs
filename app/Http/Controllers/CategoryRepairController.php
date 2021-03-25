<?php

namespace App\Http\Controllers;

use App\Model\CategoryRepair;
use Illuminate\Http\Request;

class CategoryRepairController extends Controller
{
    public function index()
    {
        $title = "Category Repair";
        $categories = CategoryRepair::paginate(5);
        return view('admin.mechanic.categoryrepair.index', [
            'title' => $title,
            'categories' => $categories
        ]);
    }

    public function create()
    {
        $title = "Create Category Repair";
        $categories = CategoryRepair::orderBy('created_at', 'desc')->Paginate(3);
        return view('admin.mechanic.categoryrepair.create', [
            'title' => $title,
            'categories' => $categories
        ]);
    }

    public function store()
    {
        CategoryRepair::create([
            'name' => request('name'),
            'description' => request('description')
        ]);

        return redirect('admin/mechanic/categoryrepair');
    }

    public function edit($id)
    {
        $title = "Edit Category";
        $categoryid = CategoryRepair::where('id', $id)->first();
        $categories = CategoryRepair::orderBy('created_at', 'desc')->Paginate(3);
        return view('admin.mechanic.categoryrepair.edit', [
            'title' => $title,
            'categoryid' => $categoryid,
            'categories' => $categories
        ]);
    }

    public function update($id)
    {
        $categoryid = CategoryRepair::where('id', $id)->first();
        $categoryid->update([
            'name' => request('name'),
            'description' => request('description')
        ]);

        return redirect('admin/mechanic/categoryrepair');
    }

    public function destroy($id)
    {
        $categoryid = CategoryRepair::where('id', $id)->first();
        $categoryid->delete();

        return redirect('admin/mechanic/categoryrepair');
    }
}
