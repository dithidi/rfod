<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Category as CategoryResource;
use App\Category;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::orderBy('name', 'asc')->get();

        return view('admin.categories.index', [
            'categories' => $categories
        ]);
    }
}
