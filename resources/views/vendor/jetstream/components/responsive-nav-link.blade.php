@props(['active'])

@php
$classes = ($active ?? false)       //                                                  colores del boton inicio              
            ? 'block pl-3 pr-4 py-2 border-l-4 border-gray-900 text-base font-medium text-gray-200 bg-gray-700 focus:outline-none focus:text-gray-200 focus:bg-gray-700 focus:border-gray-700 transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-200 hover:text-gray-700 hover:bg-gray-300 hover:border-gray-700 focus:outline-none focus:text-gray-100 focus:bg-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
