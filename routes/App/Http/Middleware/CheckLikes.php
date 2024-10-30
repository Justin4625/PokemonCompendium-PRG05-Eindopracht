<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLikes
{
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();

        // Controleer of de gebruiker is ingelogd en minstens 5 Pokémon heeft geliket
        if ($user && $user->likesCount() < 5) {
            return redirect()->route('list.index')->with('error', 'You must like at least 5 Pokémon to access this page.');
        }

        return $next($request);
    }
}
