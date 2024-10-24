<form action="{{ route('list.index') }}" method="GET" class="mb-6">
    <input type="text" name="query" placeholder="Search Pokémon..." class="w-full p-2 rounded-md bg-gray-700 text-white" value="{{ request('query') }}">
    <button type="submit" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-md transition duration-300 hover:bg-blue-600">
        Search
    </button>
</form>
