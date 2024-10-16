<x-layout>
    <form action="{{ url(route('list.store')) }}" method="POST">
        @csrf
        <label for="name">name: </label>
        <input type="text" id="name" name="name" required />
        <button type="submit">Save</button>
    </form>
</x-layout>
