<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Nominee;
use App\Models\Vote;
use Illuminate\Http\Request;

class NominessController extends Controller
{
    public function index(Request $request)
    {
        $nominess = Nominee::where('id_category', '=', $request->idcategory)->where('status_poll_nominee', '=', 'active')->get();
        $category = Category::query()->where('id', '=', $request->idcategory)->first();

        $data = [
            'nominess' => $nominess,
            'category' => $request->idcategory,
            'nameCategory' => $category->name_poll_category,
            'totalNominess' => $nominess->count()
        ];
        return view('poll.nominess', compact('data'));
    }
}
