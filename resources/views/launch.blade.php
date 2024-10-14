<h1>Wekom op de website!</h1>
@unless (Auth::check())
    You are not signed in.
@endunless
<x-layout></x-layout>
