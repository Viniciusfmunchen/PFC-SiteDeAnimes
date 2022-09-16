<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class AnimesController extends Controller
{
    public function index()
    {
        $animes = Anime::all();

        return view('animes.index')
            ->with('animes', $animes);
    }

    public function create(){
        return view('animes.create');
    }

    public function store(Request $request)
    {
        $anime = Anime::create($request->all());
        $anime['image'] = $request->image->store('animes');

        return to_route('animes.index');

    }
}
