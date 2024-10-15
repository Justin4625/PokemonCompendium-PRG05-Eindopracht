<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index() {

        $pokemon = Pokemon::all();

        return view('list', compact('pokemon'));
    }

    public function show($id) {
        $poke = Pokemon::find($id);
        return view('show', compact('poke'));
    }
}
