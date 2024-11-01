<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        $region = $request->input('region');

        $pokemon = Pokemon::query();

        // Filter op naam als er een zoekopdracht is ingevoerd
        if ($query) {
            $pokemon->where('name', 'LIKE', "%{$query}%");
        }

        // Filter op regio als er een regio is geselecteerd
        if ($region) {
            $pokemon->where('region', '=', $region);
        }

        // Voer de query uit en haal de resultaten op
        $pokemon = $pokemon->get();

        return view('list', compact('pokemon'));
    }

}
