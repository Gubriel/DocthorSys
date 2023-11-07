@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full pl-3 pr-4 py-2 border-l-4 border-green-950 text-left text-base font-medium text-white bg-green-900 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-green-700 transition duration-150 ease-in-out'
            : 'block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-gray-400 hover:text-gray-300 hover:bg-green-700 hover:border-green-900 focus:outline-none focus:text-white focus:bg-green-950 focus:border-green-950 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
