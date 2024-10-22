<x-layout>
<h1 class="text-5xl text-white font-bold mb-6 text-center">Welcome to the website!</h1>

@unless (Auth::check())
    <p class="text-gray-200 text-center">You are not signed in.</p>
@endunless

    @if(auth()->check() && auth()->user()->is_admin)
        <h1>Admin Account</h1>
    @endif
</x-layout>
