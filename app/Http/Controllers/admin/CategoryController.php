<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::query()->get();

        $data = [
            'categories' => $categories
        ];

        return view('admin.pages.categories', compact('data'));
    }

    public function add() {
        return view('admin.pages.add.category');
    }

    public function store(Request $request) {
        Category::create([
            'name_poll_category' => $request->category,
            'status_poll_category' => $request->status_poll_category
        ]);

        return redirect(route('admin.categories'));
    }

    public function edit(Request $request) {
        $category = Category::where('id', '=', $request->idcategory)->get();

        $data = [
            'category' => $category[0]['name_poll_category'],
            'id' => $category[0]['id'],
            'idCategory' => $request->idcategory,
            'status_poll_category' => $category[0]['status_poll_category']
        ];

        return view('admin.pages.edit.category', compact('data'));
    }

    public function update(Request $request) {
        $category = Category::findOrFail($request->id);

        $category->update([
            'name_poll_category' => $request->category,
            'status_poll_category' => $request->status_poll_category,
        ]);

        return redirect(route('admin.categories'));
    }

    public function delete(Request $request) {
        echo "Deletado!";
    }
}
