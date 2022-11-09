<?php

namespace App\Http\Controllers;

use App\Models\SiteConfiguration;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(Request $request) {
        $name = $request->path();

        $page = collect(SiteConfiguration::get())->first();

        $pages_enabled = [
            'premio' => [
                'title' => 'Prêmios',
                'value' => 'award'
            ],
            'patrocinadores' =>  [
                'title' => 'Patrocinadores',
                'value' => 'sponsors'
            ],
            'edicoes' => [
                'title' => 'Edições',
                'value' => 'editions'
            ],
            'redes_sociais' => [
                'title' => 'Redes sociais',
                'value' => 'social_networks'
            ],
            'criador' => [
                'title' => 'Criador',
                'value' => 'creator'
            ],
        ];

        if (in_array($name, array_keys($pages_enabled))) {
            return view('menu.page')
            ->with('title', $pages_enabled[$name]['title'])
            ->with('content', $page->{$pages_enabled[$name]['value']});
        }

        return redirect()->to('/');
    }
}
