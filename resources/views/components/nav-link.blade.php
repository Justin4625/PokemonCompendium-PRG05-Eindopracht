@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'inline-flex items-center px-4 py-2 border-b-2 border-blue-500 text-lg font-semibold leading-5 text-gray-100 focus:outline-none focus:border-blue-600 transition duration-150 ease-in-out'
                : 'inline-flex items-center px-4 py-2 border-b-2 border-transparent text-lg font-medium leading-5 text-gray-200 hover:text-blue-400 hover:border-blue-300 focus:outline-none focus:text-blue-400 focus:border-blue-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
