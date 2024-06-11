<link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />

<div class="container  max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12  grid grid-cols-5 gap-6">

    <!-- component -->
    <div class="col-span-6 rounded-lg ">

        <div class="container bg-gray-100 shadow-md  ">
            <!-- component -->
            <x-table-responsive>




                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <!-- Columna visible en todas las pantallas -->
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">

                            </th>
                            <!-- Columna oculta en pantallas pequeñas -->
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Origen del articulo
                            </th>
                            <!-- Columna oculta en pantallas pequeñas -->
                            <th
                                class="hidden sm:table-cell px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Nombre del artículo
                            </th>
                            <!-- Columna oculta en pantallas pequeñas -->
                            <th
                                class="hidden sm:table-cell px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                unidad
                            </th>
                            <th
                                class="hidden sm:table-cell px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Cantidad
                            </th>

                            <!-- Columna oculta en pantallas pequeñas -->


                        </tr>
                    </thead>
                    <tbody>


                        @forelse (Cart::content() as $item)
                            <tr>
                                <td class="px-5 py-2 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-12 h-12">
                                            <img class="h-10 w-10 object-cover ml-2 mr-4"
                                                src=" {{ $item->options->image }} " alt="">
                                        </div>
                                    </div>
                                </td>




                                <td class="px-5 w-40 py-2 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">


                                    <div class="flex">

                                        {{-- icono svg --}}


                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
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

                                        {{-- FIN icono svg --}}
                                        <h1 class="text-xs  text-gray-700 mt-0 uppercase py-2 ">
                                            {{ $item->options->warehouse }}
                                        </h1>
                                    </div>



                                    </p>
                                </td>

                                <td class="hidden sm:table-cell px-5 py-2 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                    <p class="font-bold text-sm text-gray-900 mr=4 my-0 ">
                                        {{ $item->name }}</p>



                                    <p class=" text-xs text-gray-700 mr=4 my-0 ">
                                        ID Dopp: {{ $item->options->id_dopp }}
                                    </p>
                                    <p class=" text-xs text-gray-700 mr=4 my-0 ">
                                        ID Eetc: {{ $item->options->id_eetc }}
                                    </p>
                                    <p class=" text-xs text-gray-700 mr=4 my-0 ">
                                        ID Mtto: {{ $item->options->id_zona }}
                                    </p>
                                    </p>
                                </td>
                                <td class="hidden sm:table-cell px-5 py-2 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $item->options->unit }}
                                    </p>
                                </td>

                                <td class="hidden sm:table-cell px-5 py-2 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $item->qty }}
                                    </p>
                                </td>



                    </tbody>









                    </tr>
                @empty

                    <div class="px-6 py-4">
                        No hay ningún
                    </div>
                    @endforelse

                </table>





            </x-table-responsive>










        </div>










    </div>

    <!-- This is an example component -->
    <div class="col-span-6 ">

        <div class=" border-b border-gray-200 dark:border-gray-700 mb-4">
            <ul class="flex flex-wrap -mb-px" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300 active "
                        id="profile-tab" data-tabs-target="#profile" type="button" role="tab"
                        aria-controls="profile" aria-selected="true">Salida</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300 "
                        id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="false">Movimiento entre almacenes</button>
                </li>
                {{-- <li class="mr-2" role="presentation">
                    <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
                </li>
                <li role="presentation">
                    <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Contacts</button>
                </li> --}}
            </ul>
        </div>
        <div id="myTabContent">
            <div class="px-12  bg-gray-50 p-4 rounded-lg dark:bg-gray-800 " id="profile" role="tabpanel"
                aria-labelledby="profile-tab">
                <p class="text-gray-500 dark:text-gray-400 text-sm">SALIDA DE ALMACEN <strong
                        class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>.
                    Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript
                    swaps
                    classes to control the content visibility and styling.</p>



                <div>
                    <div class="bg-withe rounded shadow p-6">
                        <div class="mb-4 ">
                            <x-jet-label
                                value=" Razón, motivo o trabajo para el cual será destinado el insumo o repuesto." />

                            <x-jet-input Type="text" wire:model.defer="reason" class=" w-full" />
                            <x-jet-input-error for="reason" />
                            {{-- <textarea class="w-full h-16 px-3 py-2 text-base text-gray-700 placeholder-gray-600  rounded-lg "></textarea> --}}


                        </div>
                        <div>

                            <x-jet-button wire:loading.attr="disabled" wire:targuet="create_order" class="mt-6 mb-4"
                                wire:click="create_order">
                                Enviar salida
                            </x-jet-button>
                            <hr>

                        </div>



                    </div>
                </div>


            </div>
            <div class=" px-12  bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="dashboard" role="tabpanel"
                aria-labelledby="dashboard-tab">
                <p class="text-gray-500 dark:text-gray-400 text-sm">MOVIMIENTO ENTRE ALMACENES <strong
                        class="font-medium text-gray-800 dark:text-white">Para el movimiento de articulos entre
                        almacenes </strong>llene los siguientes campos.</p>

             @livewire('admin.movement-warehouse')






            </div>
            {{-- <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                <p class="text-gray-500 dark:text-gray-400 text-sm">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                <p class="text-gray-500 dark:text-gray-400 text-sm">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div> --}}
        </div>

        <p class="mt-5">This tabs component is part of a larger, open-source library of Tailwind CSS components.
            Learn
            more by going to the official <a class="text-blue-600 hover:underline" href="#"
                target="_blank">Flowbite
                Documentation</a>.</p>
    </div>


  
<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>

</div>

