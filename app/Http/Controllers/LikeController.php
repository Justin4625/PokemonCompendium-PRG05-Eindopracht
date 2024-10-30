<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;

class LikeController extends Controller
{
    public function toggleLike($pokemonId)
    {
        $pokemon = Pokemon::findOrFail($pokemonId);
        $user = auth()->user();

        if (!$user->likedPokemon()->where('pokemon_id', $pokemonId)->exists()) {
            $user->likedPokemon()->attach($pokemonId);
            $likesCount = $user->likesCount();

            if ($likesCount == 5) {
                return back()->with('success', 'You have liked 5 Pokémon! You have now acces to Create Pokémon!');
            } else {
                return back()->with('success', 'You liked this Pokémon! Total likes: ' . $likesCount);
            }
        }
        return back();
    }
}
