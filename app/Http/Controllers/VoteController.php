<?php

namespace App\Http\Controllers;

use App\Models\Nominee;
use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function store(Request $request) {
        Vote::create([
            'id_poll_category' => (int) $request->id_poll_category,
            'id_poll_nominee' => (int) $request->id_poll_nominee
        ]);

        echo "votado com sucesso!";
    }
}
