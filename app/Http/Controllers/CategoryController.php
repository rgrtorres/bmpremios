<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::where('status_poll_category', '=', 'active')->orderBy('name_poll_category')->get();
        $data = [
            'categories' => $categories,
            'totalCategories' => $categories->count()
        ];

        return view('poll.index', compact('data'));
    }
}
