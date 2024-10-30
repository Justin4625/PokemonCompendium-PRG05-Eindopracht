@if (Route::has('login'))
    <nav class="bg-gray-900 shadow-lg rounded-md p-4">
        <div class="flex justify-between items-center">
            <div class="text-2xl font-bold text-white space-x-4">
                <x-nav-link href="/" class="hover:text-blue-400 transition duration-300">Home</x-nav-link>
                <x-nav-link href="/list" class="text-gray-300 hover:text-blue-400 transition duration-300 text-lg">Pokémon Compendium</x-nav-link>

                @auth
                    @if(auth()->user()->likesCount() >= 5 || auth()->user()->is_admin)
                        <x-nav-link href="{{ route('list.create') }}" class="text-gray-300 hover:text-blue-400 transition duration-300 text-lg">Create</x-nav-link>
                    @else
                        <span class="text-gray-500 cursor-not-allowed text-lg">
                            Create Pokémon (Requires at least 5 likes)
                        </span>
                    @endif
                @endauth
            </div>

            <div class="flex items-center space-x-6">
                @auth
                    <x-nav-link href="{{ route('profile.edit') }}" class="text-gray-300 hover:text-blue-400 transition duration-300 text-lg">Profile</x-nav-link>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <x-nav-link href="{{ route('logout') }}"
                                    class="text-gray-300 hover:text-blue-400 transition duration-300 text-lg"
                                    onclick="event.preventDefault();
                             this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-nav-link>
                    </form>
                @else
                    <x-nav-link href="{{ route('login') }}" class="text-gray-300 hover:text-blue-400 transition duration-300 text-lg">Log in</x-nav-link>

                    @if (Route::has('register'))
                        <x-nav-link href="{{ route('register') }}" class="text-gray-300 hover:text-blue-400 transition duration-300 text-lg">Register</x-nav-link>
                    @endif
                @endauth
            </div>
        </div>
    </nav>
@endif
