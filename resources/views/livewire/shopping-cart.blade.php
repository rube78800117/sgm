<div class="container  max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <h1>LISTA DE ARTICULOS SELECCIONADOS</h1>
    <section class="bg-white rounded-lg shadow-lg p-6 text-gray-700">
        <h1 class="text-lg font-semibold-semibold mb-6">MI CAJA </h1>
        @if (Cart::count())

            {{-- tabla responsiva --}}

            <table class="border-separate border border-gray-200 w-full">
                <thead>
                    <tr class="border-separate border border-gray-300">
                        <th
                            class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                            Item</th>
                        <th
                            class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                            Almacen</th>
                        {{-- <th
                            class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                            Linea
                        </th> --}}
                        <th
                            class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                            Cantidad</th>
                        <th
                            class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (Cart::content() as $item)
                        <tr
                            class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0 border-separate border border-gray-400">
                            <td
                                class="px-10 w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                <span
                                    class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase"></span>

                                <div class="flex justify-start items-center">
                                    
                                    <img class="h-15 w-20 object-cover mr-4" src="{{ $item->options->image }}" alt="">
                                    
                                    
                                    
                                    
                                    <div class="font-bold text-sm text-gray-600">
                                        <p class="flex justify-start items-center"> {{ $item->name }}</p>
                                        <p class="flex justify-start items-center"> {{ $item->options->id_dopp }} </p>
                                      
                                    </div>
                                </div>
                            </td>


                            <td
                                class="bg-{{ $item->options->line_color}} text-sm px-10 w-full lg:w-auto p-3 text-gray-200 text-center border border-b block lg:table-cell relative lg:static">

                                <div class="font-bold ">

                                    <p class="flex justify-center items-center text-sm"> {{ $item->options->warehouse }}</p>
                             
                                </div>

                            </td>
                            {{-- <td
                                {{-- class=" bg-gray-300 px-10 w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                                <div class="flex">
                                    <span
                                        class=" w-8 h-8 items-center justify-center inline-flex rounded-full font-bold text-lg  text-white  bg-{{ $item->options->line_color}} hover:shadow-lg cursor-pointer transition ease-in duration-300">

                               
                                   

                                </div> 


                            </td> --}}

                            <td
                                class="w-full lg:w-auto pl-20 p-3 text-gray-800  border border-b text-center block lg:table-cell relative lg:static">


                                @livewire('update-cart-item', ['rowId' => $item->rowId], key($item->rowId))
                            

                            <td
                                class="w-full lg:w-auto p-3 text-gray-800  border border-b text-center block lg:table-cell relative lg:static">
                                <span><a class="  hover:text-red-600 text-sm mt-3 cursor-pointer hover:underline inline-block"
                                        wire:click="delete('{{ $item->rowId }}')"
                                        wire:loading.class=" text-red-600 opacity-25"
                                        wire:target="delete('{{ $item->rowId }}')">
                                        Eliminar Item
                                    </a>
                                    <a class="ml-6 cursor-pointer hover:text-red-600"
                                        wire:click="delete('{{ $item->rowId }}')"
                                        wire:loading.class=" text-red-600 opacity-25"
                                        wire:target="delete('{{ $item->rowId }}')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </span>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        {{-- boton y lick para eliminacion y continuar --}}

            <div class=" mt-6 flex justify-end">
                <a class="  text-sm mt-3 cursor-pointer hover:underline inline-block" wire:click="destroy">
                    <i class="fas fa-trash"></i>
                    VACIAR TODA TU CAJA
                </a>
            </div>
        @else
            <div class="flex flex-col items-center">
                <x-cart />
                <p class="text-lg text-gray-700 my-4"> TU CAJA ESTA VACIA</p>
                <a href="/"><x-button-enlace color="blue" class="mt-4 px-16">
                    IR AL INICIO
                </x-button-enlace></a>
            </div>

        @endif





    </section>

    @if (Cart::count())
        <div class="bg-white rounded-lg shadow-lg px-6 py-4 mt-4">
            <div class=" flex justify-between items-center">
                <div>
                    <p class=" text-gray-700 ">
                        <span class="font-bold  text-lg">Total: {{ Cart::count() }} </span>
                    </p>
                </div>


                <div>
                   <a href="{{ route('orders.create') }}"><x-button-enlace color="green">
                        CONTINUAR
                    </x-button-enlace></a> 
                </div>

            </div>
        </div>

    @endif
</div>
