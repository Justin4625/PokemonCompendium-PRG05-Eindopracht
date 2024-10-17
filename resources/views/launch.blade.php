<x-layout></x-layout>

<h1 class="text-5xl text-white font-bold mb-6 text-center">Welkom op de website!</h1>

@unless (Auth::check())
    <p class="text-gray-200 text-center">You are not signed in.</p>
@endunless
