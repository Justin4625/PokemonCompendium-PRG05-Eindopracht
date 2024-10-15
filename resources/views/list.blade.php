<x-layout>
    <h1>Hier staat een lijst</h1>
    <ul>
    @foreach($pokemon as $poke)
        <li>
        {{ $poke->name }}
        {{ $poke->type_id }}
        {{ $poke->region }}
        {{ $poke->status }}
            <a href="{{route('show', ['id' => $poke->id])}}">Details</a>
        </li>
    @endforeach
    </ul>
</x-layout>
