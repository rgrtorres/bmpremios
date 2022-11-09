<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SiteConfiguration;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        $texts = SiteConfiguration::query()->first();

        return view('admin.pages.site', compact('texts'));
    }

    public function update (Request $request) {
        $text = SiteConfiguration::findOrFail($request->id);

        $text->update([
            'award' => $request->award,
            'editions' => $request->editions,
            'social_networks' => $request->social_networks,
            'creator' => $request->creator,
            'sponsors' => $request->sponsors
        ]);

        return redirect(route('admin.site'));
    }
}
