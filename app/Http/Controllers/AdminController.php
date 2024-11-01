<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function update(Request $request, $id) {
        $poke = Pokemon::findOrFail($id);
        $poke->is_visible = ($request->input('vis') === 'on') ? 1 : 0;
        $poke->save();

        return redirect()->route('list.index');
    }
}
