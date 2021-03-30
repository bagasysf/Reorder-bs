<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\CategoryItem;
use App\Model\SubCategoryItem;

class SubCategoryItemController extends Controller
{
    public function index()
    {
        $title = 'Sub Category Item';
        $categories = CategoryItem::all();
        $subcategories = SubCategoryItem::paginate(5);
        return view('admin.warehouse.subcategoryitem.index', [
            'title' => $title,
            'categories' => $categories,
            'subcategories' => $subcategories
        ]);
    }

    public function create()
    {
        $title = "Create Sub Category";
        $categories = CategoryItem::all();
        $subcategories = SubCategoryItem::orderBy('created_at', 'desc')->Paginate(3);
        return view('admin.warehouse.subcategoryitem.create', [
            'title' => $title,
            'categories' => $categories,
            'subcategories' => $subcategories
        ]);
    }

    public function store()
    {
        SubCategoryItem::create([
            'categoryitem_id' => request('categoryitem_id'),
            'name' => request('name')
        ]);

        return redirect('admin/warehouse/subcategoryitem');
    }
    public function edit($id)
    {
        $title = "Edit Sub Category";
        $categories =  CategoryItem::all();
        $subcategoryid = SubCategoryItem::where('id', $id)->first();
        $subcategories = SubCategoryItem::orderBy('created_at', 'desc')->Paginate(3);
        return view('admin.warehouse.subcategoryitem.edit', [
            'title' => $title,
            'categories' => $categories,
            'subcategoryid' => $subcategoryid,
            'subcategories' => $subcategories,
        ]);
    }

    public function update($id)
    {
        $subcategoryid = SubCategoryItem::where('id', $id)->first();
        $subcategoryid->update([
            'categoryitem_id' => request('categoryitem_id'),
            'name' => request('name'),
            'description' => request('description')
        ]);

        return redirect('admin/warehouse/subcategoryitem');
    }

    public function destroy($id)
    {
        $subcategoryid = SubCategoryItem::where('id', $id)->first();
        $subcategoryid->delete();

        return redirect('admin/warehouse/subcategoryitem');
    }
}
