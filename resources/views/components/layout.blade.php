<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <title>Eindopdracht</title>
</head>
<body class="bg-gradient-to-r from-gray-800 via-purple-700 to-indigo-900 animate-gradient-move">

@if (Route::has('login'))
    <nav class="bg-gray-900 shadow-lg rounded-md p-4">
        <div class="flex justify-between items-center">
            <div class="text-2xl font-bold text-white space-x-4"> <!-- Added space-x-4 for spacing -->
                <x-nav-link href="/" class="hover:text-blue-400 transition duration-300">Home</x-nav-link>
                <x-nav-link href="list" class="text-gray-300 hover:text-blue-400 transition duration-300 text-lg">Pokémon Compendium</x-nav-link> <!-- Compendium link accessible for all -->
            </div>
            <div class="flex items-center space-x-6"> <!-- Changed to flex to align items -->
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-nav-link href="{{ route('logout') }}"
                                    class="text-gray-300 hover:text-blue-400 transition duration-300 text-lg"
                                    onclick="event.preventDefault();
                             this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-nav-link>
                    </form>

                @else
                    <x-nav-link href="{{ route('login') }}" class="text-gray-300 hover:text-blue-400 transition duration-300 text-lg">Log in</x-nav-link>

                    @if (Route::has('register'))
                        <x-nav-link href="{{ route('register') }}" class="text-gray-300 hover:text-blue-400 transition duration-300 text-lg">Register</x-nav-link>
                    @endif
                @endauth
            </div>
        </div>
    </nav>
@endif

<div class="container mx-auto p-8">
    {{ $slot }}
</div>

</body>
</html>
