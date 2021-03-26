<?php

namespace App\Http\Controllers;

use App\Model\CategoryRepair;
use App\Model\SubCategoryRepair;
use Illuminate\Http\Request;

class SubCategoryRepairController extends Controller
{
    public function index()
    {
        $title = 'Sub Category Repair';
        $categories = CategoryRepair::all();
        $subcategories = SubCategoryRepair::paginate(5);
        return view('admin.mechanic.subcategoryrepair.index', [
            'title' => $title,
            'categories' => $categories,
            'subcategories' => $subcategories
        ]);
    }
}
