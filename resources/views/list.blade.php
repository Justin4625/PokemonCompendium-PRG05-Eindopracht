<x-layout>
    <h1 class="text-3xl text-white font-bold mb-4 text-center">Hier staat een lijst</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($pokemon as $poke)
            <div class="bg-gray-800 p-4 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold text-blue-400">{{ $poke->name }}</h2>
                <p class="text-gray-300">Type: {{ $poke->type_id }}</p>
                <p class="text-gray-300">Region: {{ $poke->region }}</p>
                <p class="text-gray-300">Status: {{ $poke->status }}</p>
                <a href="{{ route('show', ['id' => $poke->id]) }}" class="mt-2 inline-block text-blue-500 hover:text-blue-700">Details</a>
            </div>
        @endforeach
    </div>
</x-layout>
