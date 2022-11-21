<?php

namespace App\Http\Controllers;

use App\Models\Piece;
use Illuminate\Http\Request;

class PieceController extends Controller
{
    public function index(){
        $pieces = Piece::all();
        return view('pieces.index')->
            with('pieces', $pieces);
    }

    public function create(){
        return view('pieces.create');
    }

    public function store(Request $request){
        $piece = Piece::create($request->all());
    }
}
