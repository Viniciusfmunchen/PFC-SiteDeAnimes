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

        return to_route('animes.index');

    }

    public function destroy(Anime $anime){
        $anime->delete();

        return to_route('animes.index');
    }

    public function edit(Anime $anime)
    {
        return view('animes.edit')
            ->with('anime', $anime);
    }

    public function update(Request $request, Anime $anime)
    {
        $anime->fill($request->all());
        $anime->save();

        return to_route('animes.index');
    }
}
