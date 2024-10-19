<x-layout>
    @if (Route::has('login'))
        @auth
            <form action="{{ url(route('list.store')) }}" method="POST">
                @csrf
                <label for="name">Name: </label>
                <input type="text" id="name" name="name" required />

                <label for="type_id">Type: </label>
                <select id="type_id" name="type_id" required>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>

                <label for="region">Region: </label>
                <input type="text" id="region" name="region" required />

                <button type="submit">Save</button>
            </form>
        @else
            <div class="bg-red-500 text-white p-4 rounded-lg text-center">
                You need to log in to create.
            </div>
        @endauth
    @endif
</x-layout>
