<x-layout>
    <div class="container mx-auto p-8">
        <h1 class="text-4xl text-white font-bold mb-4 text-center">Pokémon Compendium</h1>
        <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($pokemon as $poke)
                <li class="bg-gray-800 p-4 rounded-lg shadow-lg">
                    <h2 class="text-xl text-gray-100 font-semibold">{{ $poke->name }}</h2>
                    <p class="text-gray-300">Type: <span class="text-blue-400">{{ $poke->type_id }}</span></p>
                    <p class="text-gray-300">Region: <span class="text-blue-400">{{ $poke->region }}</span></p>
                    <p class="text-gray-300">Status: <span class="text-blue-400">{{ $poke->status }}</span></p>
                    @if (Route::has('login'))
                        @auth
                            <x-nav-link href="{{ route('show', ['id' => $poke->id]) }}" class="mt-2 inline-block bg-blue-500 text-white px-4 py-1 rounded-md transition duration-300 transform hover:bg-blue-600 hover:scale-105">Details</x-nav-link>
                        @else
                            <p class="mt-2 text-center text-red-500 bg-gray-700 p-2 rounded-md">
                                Log in to see details
                            </p>
                        @endauth
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
