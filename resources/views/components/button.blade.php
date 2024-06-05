
@props(['color'=>'gray'])

{{-- <button {{$attributes->merge(['type'=>'submit', 'class'=>"text-white bg-gradient-to-r from-$color-400 via-$color-500 to-$color-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-$color-300 dark:focus:ring-green-800 shadow-lg shadow-$color-500/50 dark:shadow-lg dark:shadow-$color-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"])}}> --}}
<button {{ $attributes->merge(['type' => 'submit', 'class' => " justify-center items-center px-4 py-2 bg-$color-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-$color-500 active:bg-$color-700 focus:outline-none focus:border-$color-700 focus:shadow-outline-$color disabled:opacity-25 transition ease-in-out duration-150"]) }}>
    {{ $slot }}
</button>
