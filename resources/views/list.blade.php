<x-layout>
    <div class="container mx-auto p-8">
        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if(auth()->check() && auth()->user()->is_admin)
            <h1 class="text-4xl text-white font-bold mb-4 text-center">Pokémon Compendium - Admin Account</h1>
        @else
            <h1 class="text-4xl text-white font-bold mb-4 text-center">Pokémon Compendium</h1>
        @endif

        @auth
            <x-search></x-search>
        @endauth

        <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($pokemon as $poke)
                @if($poke->is_visible == 1 || (auth()->check() && auth()->user()->is_admin))
                    <li class="bg-gray-800 p-4 rounded-lg shadow-lg">
                        <h2 class="text-xl text-gray-100 font-semibold">{{ $poke->name }}</h2>

                        @if(auth()->check() && auth()->user()->is_admin)
                            <p class="text-gray-100">{{ $poke->created_at }}</p>
                            <p class="text-gray-100">Created by: {{ $poke->user->name }}</p>
                        @endif

                        <div class="flex justify-between mt-4">
                            @auth
                                <x-nav-link href="{{ route('show', ['id' => $poke->id]) }}"
                                            class="bg-blue-500 text-white px-4 py-1 rounded-md transition duration-300 transform hover:bg-blue-600 hover:scale-105">
                                    ≡ Details
                                </x-nav-link>
                            @else
                                <p class="text-red-500">Log in to see details</p>
                            @endauth

                            @auth
                                <button
                                    class="font-medium px-4 py-2 rounded-md shadow-md transition duration-300 ease-in-out transform hover:scale-105
                                    {{ auth()->user()->likedPokemon->contains($poke->id) ? 'bg-gray-800 border-2 border-white text-white' : 'bg-gray-800 border-2 border-yellow-500 text-white' }}"
                                    onclick="event.preventDefault(); document.getElementById('like-form-{{ $poke->id }}').submit();"
                                    {{ auth()->user()->likedPokemon->contains($poke->id) ? 'disabled' : '' }}>
                                    👍 {{ auth()->user()->likedPokemon->contains($poke->id) ? 'Liked' : 'Like' }}
                                </button>

                                <form id="like-form-{{ $poke->id }}" action="{{ route('toggle.like', $poke->id) }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @endauth
                        </div>

                        @if(auth()->check() && auth()->user()->is_admin)
                            <form action="{{ route('admin.update', $poke->id) }}" method="POST"
                                  class="bg-gray-800 p-6 rounded-lg shadow-lg max-w-md mx-auto mt-4">
                                @csrf
                                <div class="mb-4">
                                    <label for="vis" class="block text-gray-300 font-semibold">Visible:</label>
                                    <select id="vis" name="vis" required
                                            class="w-full mt-2 p-2 bg-gray-700 text-white rounded-md">
                                        <option value="on" {{ $poke->is_visible ? 'selected' : '' }}>On</option>
                                        <option value="off" {{ !$poke->is_visible ? 'selected' : '' }}>Off</option>
                                    </select>
                                </div>

                                <div class="text-center">
                                    <button type="submit"
                                            class="bg-green-500 text-white px-4 py-2 rounded-md transition duration-300 hover:bg-green-600">
                                        ✓ Save
                                    </button>
                                </div>
                            </form>
                        @endif
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</x-layout>
