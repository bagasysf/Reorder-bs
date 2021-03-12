<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $title = "Category";
        $category = Category::all();
        return view('category.index', [
            'title' => $title,
            'category' => $category
        ]);
    }

    public function create()
    {
        $title = "Create Category";
        $category = Category::all();
        $sorted = $category->sortbyDesc('created_at');
        $sorted->values()->all();
        return view('category.create', [
            'title' => $title,
            'sorted' => $sorted
        ]);
    }
}
