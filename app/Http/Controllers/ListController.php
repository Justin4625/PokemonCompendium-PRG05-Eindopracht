<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\Type;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index() {
        $pokemon = Pokemon::with('type')->get();

        return view('list', compact('pokemon'));
    }

    public function show($id) {
        $poke = Pokemon::find($id);
        return view('show', compact('poke'));
    }

    public function create()
    {
        $types = Type::all(); // Haal alle types op uit de database
        return view('pokemon.create', ['types' => $types]);
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|unique:pokemon,name',
        ],
            ['name.required' => 'A name is required',
                'name.unique' => 'This Pokémon already exists']
        );

        $poke = new Pokemon();
        $poke->name = $request->input('name');
        $poke->type_id = $request->input('type_id');
        $poke->region = $request->input('region');
        $poke->save();

        return redirect(route('list.index'));
    }


    public function edit(string $id)
    {
        $poke = Pokemon::findOrFail($id);
        return view('list.edit', compact('poke'));
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
