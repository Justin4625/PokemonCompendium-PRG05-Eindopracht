<x-layout>
    <div class="container mx-auto p-8">
        <h1 class="text-4xl text-white font-bold mb-6 text-center">Add a Pokémon</h1>

        @if (Route::has('login'))
            @auth
                <form action="{{ url(route('list.store')) }}" method="POST" class="bg-gray-800 p-6 rounded-lg shadow-lg max-w-md mx-auto">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-gray-300 font-semibold">Name:</label>
                        <input type="text" id="name" name="name" required class="w-full mt-2 p-2 bg-gray-700 text-white rounded-md"/>

                        @error('name')
                        <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mb-4">
                        <label for="type_id" class="block text-gray-300 font-semibold">Type:</label>
                        <select id="type_id" name="type_id" required class="w-full mt-2 p-2 bg-gray-700 text-white rounded-md">
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="region" class="block text-gray-300 font-semibold">Region:</label>
                        <input type="text" id="region" name="region" required class="w-full mt-2 p-2 bg-gray-700 text-white rounded-md"/>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md transition duration-300 hover:bg-blue-600">
                            Save
                        </button>
                    </div>
                </form>
            @else
                <div class="bg-red-500 text-white p-4 rounded-lg text-center">
                    You need to log in to create.
                </div>
            @endauth
        @endif
    </div>
</x-layout>
