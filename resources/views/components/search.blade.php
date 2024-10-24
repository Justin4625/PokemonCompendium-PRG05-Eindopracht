<form action="{{ route('list.index') }}" method="GET" class="mb-6 max-w-md mx-auto">
    <div class="relative">
        <label for="search-query" class="sr-only">Search Pokémon</label> <!-- Visually hidden label -->
        <input
            type="text"
            id="search-query"
            name="query"
            placeholder="Search Pokémon..."
            class="w-full p-4 pr-12 rounded-md bg-gray-800 text-white focus:ring-2 focus:ring-blue-500 focus:outline-none"
            value="{{ request('query') }}"
        >
        <button
            type="submit"
            class="absolute right-2 top-2 bottom-2 bg-blue-500 text-white px-4 py-2 rounded-md transition duration-300 hover:bg-blue-600"
        >
            ⊙ Search
        </button>
    </div>
</form>
