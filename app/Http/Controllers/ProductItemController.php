<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\CategoryItem;
use App\Model\SubCategoryItem;
use App\Model\ProductItem;

class ProductItemController extends Controller
{
    public function index()
    {
        $title = "Product Item";
        $categories = CategoryItem::all();
        $subcategories = SubCategoryItem::all();
        $productitems = ProductItem::paginate(5);
        return view('admin.warehouse.productitem.index', [
            'title' => $title,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'productitems' => $productitems
        ]);
    }
}
