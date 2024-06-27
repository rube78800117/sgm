<div class="container  max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <h1>LISTA DE ARTICULOS SELECCIONADOS</h1>
    <button wire:click="generateOrders">
        mostrar carrito
    </button>
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

                                    <img class="h-15 w-20 object-cover mr-4" src="{{ $item->options->image }}"
                                        alt="">




                                    <div class="font-bold text-sm text-gray-600">
                                        <p class="flex justify-start items-center"> {{ $item->name }}</p>
                                        <p class="flex justify-start items-center"> {{ $item->options->id_dopp }} </p>
                                    </div>
                                </div>
                            </td>


                            <td class="bg-white text-sm px-10 w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">

                                {{-- icono svg --}}
                                <div class="flex justify-center mr-2">

                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="32"
                                        height="32" x="0" y="0" viewBox="0 0 512.001 512.001"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve"
                                        class="fill-current text-{{ $item->options->line_color }}">
                                        <g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentcolor"
                                                        d="M406.543,188.63c-3.085-3.35-7.428-5.255-11.981-5.255H186.954c-4.554,0-8.899,1.905-11.982,5.255    c-37.133,40.315-58.429,98.289-58.429,159.059c0,57.446,19.382,116.669,58.429,159.059c3.085,3.349,7.43,5.254,11.982,5.254    h207.607c4.553,0,8.898-1.905,11.982-5.254c38.929-42.261,58.43-101.378,58.43-159.059    C464.973,286.92,443.677,228.944,406.543,188.63z M274.468,334.16H149.529c2.67-45.034,18.595-87.191,44.775-118.203h80.164    V334.16z M307.049,334.16V215.957h80.163c26.182,31.012,42.106,73.169,44.776,118.203H307.049z"
                                                        fill="#024820" data-original="#000000" style=""
                                                        class="" />
                                                </g>
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path fill="currentcolor"
                                                        d="M495.299,13.917c-1.313-8.901-9.581-15.064-18.494-13.737L256.607,32.678c-8.942-19.27-28.464-32.673-51.068-32.673    c-28.368,0-51.888,21.103-55.717,48.433L30.439,66.056c-8.901,1.313-15.051,9.593-13.737,18.494    c1.195,8.094,8.151,13.914,16.095,13.914c0.792,0,1.592-0.057,2.399-0.178l119.612-17.654    c5.084,10.548,13.367,19.271,23.577,24.919v43.554h87.866l-33.563-23.473v-20.078c14.937-8.264,25.743-23.116,28.457-40.613    l220.416-32.53C490.463,31.098,496.613,22.818,495.299,13.917z M205.537,79.975c-13.065,0-23.694-10.629-23.694-23.694    s10.629-23.694,23.694-23.694c13.065,0,23.694,10.629,23.694,23.694C229.233,69.346,218.603,79.975,205.537,79.975z"
                                                        fill="#024820" data-original="#000000" style=""
                                                        class="" />
                                                </g>
                                            </g>

                                        </g>
                                    </svg>
                                    <div class="  flex justify-end">

                                    </div>
                                </div>

                                {{-- FIN icono svg --}}
                                <div class="font-bold ">

                                    <p class="flex justify-center items-center text-sm"> {{ $item->options->warehouse }}
                                    </p>

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
                <a class=" text-red-600 text-sm mt-3 cursor-pointer hover:underline inline-block" wire:click="destroy">
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
