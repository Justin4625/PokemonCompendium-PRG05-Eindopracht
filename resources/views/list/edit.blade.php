<x-layout>
    <div class="container mx-auto p-8">
        <h1 class="text-4xl text-white font-bold mb-6 text-center">Edit a Pokémon</h1>

        @if (Route::has('login'))
            @auth
                <form action="{{ route('list.update', $poke->id) }}" method="POST" class="bg-gray-800 p-6 rounded-lg shadow-lg max-w-md mx-auto">
                    @csrf
                    @method('PATCH')

                    <div class="mb-4">
                        <label for="name" class="block text-gray-300 font-semibold">Name:</label>
                        <input type="text" id="name" name="name" value="{{ $poke->name }}" required class="w-full mt-2 p-2 bg-gray-700 text-white rounded-md"/>
                    </div>

                    <div class="mb-4">
                        <label for="type_id" class="block text-gray-300 font-semibold">Type:</label>
                        <select id="type_id" name="type_id" required class="w-full mt-2 p-2 bg-gray-700 text-white rounded-md">
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}" {{ $type->id == $poke->type_id ? 'selected' : '' }}>
                                    {{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="region" class="block text-gray-300 font-semibold">Region:</label>
                        <select id="region" name="region" required class="w-full mt-2 p-2 bg-gray-700 text-white rounded-md">
                            @php
                                $regions = ['kanto', 'johto', 'hoenn', 'sinnoh', 'unova', 'kalos', 'alola', 'galar', 'hisui', 'paldea'];
                            @endphp
                            @foreach ($regions as $region)
                                <option value="{{ $region }}" {{ $region == $poke->region ? 'selected' : '' }}>
                                    {{ ucfirst($region) }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex justify-center mb-4">
                        <a href="{{ route('list.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md transition duration-300 hover:bg-blue-600 h-full inline-flex items-center">
                            ← Back to List
                        </a>
                        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md transition duration-300 hover:bg-green-600 h-full inline-flex items-center ml-4">
                            Save
                        </button>
                    </div>
                </form>
            @else
                <div class="bg-red-500 text-white p-4 rounded-lg text-center">
                    You need to log in to edit.
                </div>
            @endauth
        @endif
    </div>
</x-layout>
