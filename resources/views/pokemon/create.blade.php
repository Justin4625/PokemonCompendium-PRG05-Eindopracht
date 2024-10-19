<x-layout>
    @if (Route::has('login'))
        @auth
            <form action="{{ url(route('list.store')) }}" method="POST">
                @csrf
                <label for="name">name: </label>
                <input type="text" id="name" name="name" required />
                <button type="submit">Save</button>
            </form>
        @else
            <div class="bg-red-500 text-white p-4 rounded-lg text-center">
                You need to log in to create.
            </div>
        @endauth
    @endif

</x-layout>
