<x-layout>
    <div class="container mx-auto p-8">
        @auth
            <h1 class="text-5xl text-white font-bold mb-4 text-center">{{ $poke->name }}</h1>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <p class="text-lg text-gray-300">Type: <span class="text-blue-400">{{ $poke->type->name }}</span></p>
                <p class="text-lg text-gray-300">Region: <span class="text-blue-400">{{ $poke->region }}</span></p>
            </div>
            <div class="mt-6 text-center">
                <a href="{{ route('list.index') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">
                    ← Back to List
                </a>

                <a href="{{ route('list.edit', $poke->id) }}" class="inline-block bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600 transition duration-300 ml-4">
                    ✎ Edit
                </a>

                <form action="{{ route('list.destroy', $poke->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="inline-block bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition duration-300 ml-4">
                        ⊗ Delete
                    </button>
                </form>

            </div>
        @else
            <div class="bg-red-500 text-white p-4 rounded-lg text-center">
                You need to log in to view these details.
            </div>
        @endauth
    </div>
</x-layout>
