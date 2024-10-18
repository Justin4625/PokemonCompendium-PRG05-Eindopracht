<x-layout></x-layout>
<div class="container mx-auto p-8">
    @auth
        <h1 class="text-5xl text-white font-bold mb-4 text-center">{{ $poke->name }}</h1>
        <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
            <p class="text-lg text-gray-300">Type: <span class="text-blue-400">{{ $poke->type->name }}</span></p>
            <p class="text-lg text-gray-300">Region: <span class="text-blue-400">{{ $poke->region }}</span></p>
        </div>
        <div class="mt-6 text-center">
            <a href="{{ route('list.index') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">
                Back to List
            </a>
        </div>
    @else
        <div class="bg-red-500 text-white p-4 rounded-lg text-center">
            You need to log in to view these details.
        </div>
    @endauth
</div>
