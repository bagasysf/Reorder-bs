<?php

namespace App\Http\Controllers;

use App\Model\SubCategoryRepair;
use Illuminate\Http\Request;

class SubCategoryRepairController extends Controller
{
    public function index()
    {
        $title = 'Sub Category Repair';
        $subcategories = SubCategoryRepair::paginate(5);
        return view('admin.mechanic.subcategoryrepair.index', [
            'title' => $title,
            'subcategories' => $subcategories
        ]);
    }
}
