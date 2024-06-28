<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    <x-jet-dropdown width="96">
        <x-slot name="trigger">
            <span class="relative inline-block">
                <x-cart color="white" zise="20" />

                @if (Cart::count())
                    <span
                        class="absolute top-1 left-1 inline-flex px-2 py-0 mr-2 transform translate-x-1/2 -translate-y-1/2 text-xs font-bold text-red-100 bg-red-600 rounded-full">{{ Cart::count() }}</span>
                @else
                    <span
                        class="absolute top-1 right-0 inline-block w-2 h-2 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full"></span>
                @endif


            </span>
            </span>

        </x-slot>


        <x-slot name="content">
            <ul>
                @forelse (Cart::content() as $item)
                    <li class="flex">
                        <img class="h-15 w-20 object-cover ml-2 mr-4" src=" {{ $item->options->image }} " alt="">

                        <article class="flex-1">
                            <h1 class="font-bold text-sm text-gray-900 mr=4 my-0">{{ $item->name }}</h1>
                            <div class="  grid grid-cols-4">
                                <div class="col-span-3">
                    <li class=" text-xs text-gray-700 mr=4 my-0 flex">ID:{{ $item->options->id_dopp }}</li>

                    <p class="text-xs  text-gray-700 mt-0 ">
                        {{ $item->options->warehouse }}</p>
</div>


<div class="col-span-1">
    <li class="mx-2 text-xs text-gray-700 ">Cant: {{ $item->qty }}</li>
</div>

</div>

</article>
</li>
@empty
<li>
    <p class="text-center text-gray-800 px-4 py-4"> <i class="text-green-500 fas fa-box-open "></i> No tiene ningún
        artículo seleccionado!</p>
</li>
@endforelse
</ul>
@if (Cart::count())
    <div class="flex justify-between my-2 mx-6">
        <div class="">
            
                <x-button-enlace color="red" wire:click="destroy">
                    <i class="fas fa-chevron-circle-left"></i> <i class="fas fa-trash-alt"></i>
                    
                </x-button-enlace>
           
        </div>


        <a href=" {{ route('shopping-cart') }} " class="  ">
            <x-button-enlace color="green">


                <i class="fas fa-shopping-cart"></i> <i class="fas fa-chevron-circle-right"></i>


            </x-button-enlace>
        </a>

    </div>
@endif

</x-slot>
</x-jet-dropdown>
</div>
