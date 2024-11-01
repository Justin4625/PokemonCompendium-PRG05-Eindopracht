<form action="{{ route('list.index') }}" method="GET" class="mb-6 max-w-md mx-auto flex items-center">
    <label>
        <select name="region" class="mr-2 px-4 py-3 rounded-md bg-gray-700 text-white focus:ring-2 focus:ring-purple-500 focus:outline-none">
            <option value="" {{ request('region') === '' ? 'selected' : '' }}>All Regions</option>
            <option value="kanto" {{ request('region') === 'kanto' ? 'selected' : '' }}>Kanto</option>
            <option value="johto" {{ request('region') === 'johto' ? 'selected' : '' }}>Johto</option>
            <option value="hoenn" {{ request('region') === 'hoenn' ? 'selected' : '' }}>Hoenn</option>
            <option value="sinnoh" {{ request('region') === 'sinnoh' ? 'selected' : '' }}>Sinnoh</option>
            <option value="unova" {{ request('region') === 'unova' ? 'selected' : '' }}>Unova</option>
            <option value="kalos" {{ request('region') === 'kalos' ? 'selected' : '' }}>Kalos</option>
            <option value="Alola" {{ request('region') === 'Alola' ? 'selected' : '' }}>Alola</option>
            <option value="galar" {{ request('region') === 'galar' ? 'selected' : '' }}>Galar</option>
            <option value="hisui" {{ request('region') === 'hisui' ? 'selected' : '' }}>Hisui</option>
            <option value="paldea" {{ request('region') === 'paldea' ? 'selected' : '' }}>Paldea</option>
        </select>
    </label>

    <div class="relative flex-grow">
        <label for="search-query" class="sr-only">Search Pokémon</label>
        <input
            type="text"
            id="search-query"
            name="query"
            placeholder="Search Pokémon..."
            class="w-full p-4 rounded-md bg-gray-800 text-white placeholder-gray-400 focus:ring-2 focus:ring-purple-500 focus:outline-none"
            value="{{ request('query') }}"
        >

        <button
            type="submit"
            class="absolute right-2 top-2 bg-purple-600 text-white px-4 py-2 rounded-md transition duration-300 hover:bg-purple-700 focus:ring-2 focus:ring-purple-500"
        >
            ⊙ Search
        </button>
    </div>
</form>
