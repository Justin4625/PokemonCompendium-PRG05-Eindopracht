<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eindopdracht</title>
</head>
<body>
{{--<nav>--}}
{{--    <x-nav-link href="{{ route('login') }}">Login</x-nav-link>--}}
{{--    <x-nav-link href="{{ route('register') }}">Register</x-nav-link>--}}
{{--</nav>--}}

@if (Route::has('login'))
    <nav class="-mx-3 flex flex-1 justify-end">
        @auth
            <a>
                    <x-nav-link href="list">List</x-nav-link>
            </a>
        @else
            <a
                href="{{ route('login') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            >
                Log in
            </a>

            @if (Route::has('register'))
                <a
                    href="{{ route('register') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Register
                </a>
            @endif
        @endauth
    </nav>
@endif

{{ $slot }}

</body>
</html>
