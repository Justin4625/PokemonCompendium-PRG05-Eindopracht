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
            <div class="text-2xl font-bold text-white">
                <a href="/" class="hover:text-blue-400 transition duration-300">Pokémon Compendium</a>
            </div>
            <div class="space-x-4">
                @auth
                    <x-nav-link href="list" :active="request()->routeIs('list')" class="text-gray-200 hover:text-blue-400 transition duration-300">List</x-nav-link>
                @else
                    <x-nav-link href="{{ route('login') }}" class="text-gray-200 hover:text-blue-400 transition duration-300">Log in</x-nav-link>

                    @if (Route::has('register'))
                        <x-nav-link href="{{ route('register') }}" class="text-gray-200 hover:text-blue-400 transition duration-300">Register</x-nav-link>
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
