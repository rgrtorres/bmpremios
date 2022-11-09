<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Nominee;
use Illuminate\Http\Request;

class NomineeController extends Controller
{
    public function index() {
        $nominess = Nominee::with('category')->get();

        $data = [
            'nominess' => $nominess
        ];

        return view('admin.pages.nominess', compact('data'));
    }

    public function add() {
        $categories = Category::where('status_poll_category', '=', 'active')->get();

        $data = [
            'categories' => $categories,
        ];

        return view('admin.pages.add.nominee', compact('data'));
    }

    public function store(Request $request) {

        if($request->hasFile('image') && $request->file('image')->isValid()) {
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= md5($filename.'_'.time()).'.'.$extension;
            // Upload Image
            $request->file('image')->move(public_path('img/uploads'), $fileNameToStore);
        }

        Nominee::create([
            'id_category' => $request->category,
            'name_poll_nominee' => $request->nominee,
            'status_poll_nominee' => $request->status_poll_nominee,
            'picture_poll_nominee' => $fileNameToStore
        ]);

        return redirect()->route('admin.nominess');
    }

    public function edit(Request $request) {
        $nominess = Nominee::where('id', '=', $request->idnominee)->get();
        $categories = Category::where('status_poll_category', '=', 'active')->get();

        $data = [
            'name_poll_nominee'  => $nominess[0]['name_poll_nominee'],
            'id_category' => $nominess[0]['id_category'],
            'id' => $request->idnominee,
            'status_poll_nominee' => $nominess[0]['status_poll_nominee'],
            'categories' => $categories
        ];

        return view('admin.pages.edit.nominee', compact('data'));
    }

    public function update(Request $request) {
        $nominee = Nominee::findOrFail($request->id);

        $nominee->update([
            'name_poll_nominee' => $request->name_poll_nominee,
            'id_category' => $request->id_category,
            'status_poll_nominee' => $request->status_poll_nominee,
        ]);

        return redirect(route('admin.nominess'));
    }
}
