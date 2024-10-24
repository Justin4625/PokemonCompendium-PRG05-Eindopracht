<x-layout>

<div class="container mx-auto p-8">
    @if(auth()->check() && auth()->user()->is_admin)
        <h1 class="text-4xl text-white font-bold mb-4 text-center">Pokémon Compendium - Admin Account</h1>
    @else
    <h1 class="text-4xl text-white font-bold mb-4 text-center">Pokémon Compendium</h1>
        <x-search></x-search>
    @endif
    <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($pokemon as $poke)
            @if($poke->is_visible == 1 || (auth()->check() && auth()->user()->is_admin))
            <li class="bg-gray-800 p-4 rounded-lg shadow-lg">
                <h2 class="text-xl text-gray-100 font-semibold">{{ $poke->name }}</h2>

                @if(auth()->check() && auth()->user()->is_admin)
                <p class="text-gray-100">{{ $poke->created_at }}</p>
                @endif

                @if (Route::has('login'))
                    @auth
                        <x-nav-link href="{{ route('show', ['id' => $poke->id]) }}" class="mt-2 inline-block bg-blue-500 text-white px-4 py-1 rounded-md transition duration-300 transform hover:bg-blue-600 hover:scale-105">≡ Details</x-nav-link>

                        @if(auth()->check() && auth()->user()->is_admin)
                        <form action="{{ route('admin.update', $poke->id) }}" method="POST" class="bg-gray-800 p-6 rounded-lg shadow-lg max-w-md mx-auto">
                            @csrf
                            <div class="mb-4">
                                <label for="vis" class="block text-gray-300 font-semibold">Visible: </label>
                                <select id="vis" name="vis" required class="w-full mt-2 p-2 bg-gray-700 text-white rounded-md">
                                    <option value="on" {{ $poke->is_visible ? 'selected' : '' }}>On</option>
                                    <option value="off" {{ !$poke->is_visible ? 'selected' : '' }}>Off</option>
                                </select>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md transition duration-300 hover:bg-green-600">
                                    ✓ Save
                                </button>
                            </div>
                        </form>
                        @endif


                    @else
                        <p class="mt-2 text-center text-red-500 bg-gray-700 p-2 rounded-md">
                            Log in to see details
                        </p>
                    @endauth
                @endif
            </li>
            @endif
        @endforeach
    </ul>
</div>

</x-layout>
