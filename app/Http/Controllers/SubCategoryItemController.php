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
}
