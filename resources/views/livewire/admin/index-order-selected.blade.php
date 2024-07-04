
<div class="form-control border-0" id=" myTabContent">
    <div class="px-12   p-4 rounded-lg  " id="all" role="tabpanel" aria-labelledby="all-tab">
        <p class= "text-sm">REGISTROS DE MOVIMIENTOS ENTRE ALMACENES<strong class="font-medium">Profile tab's
                associated content</strong>.
            Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript
            swaps
            classes to control the content visibility and styling.</p>


        {{-- -STAR ----------------------------------------------------------------------------- --}}


        <div class="  shadow-md  ">
            <!-- component -->
            <x-table-responsive>




                <table class=" min-w-full leading-normal">
                    <thead>
                        <tr class="">

                            <!-- Columna visible en todas las pantallas -->
                            <th
                                class="px-2 py-3 border-b-2 border-gray-200  text-left text-xs font-semibold  uppercase tracking-wider">
                                <i class="fas fa-calendar text-blue-600"> &nbsp;</i>
                                Fecha registro
                            </th>

                            <th
                                class=" px-2 py-3 border-b-2 border-gray-200  text-left text-xs font-semibold  uppercase tracking-wider">
                                <i class="fas fa-clone text-blue-600"> &nbsp;</i>
                                TIPO
                            </th>

                            <th
                                class=" px-2 py-3 border-b-2 border-gray-200  text-left text-xs font-semibold  uppercase tracking-wider">
                                <i class="fas fa-calendar text-blue-600"> &nbsp;</i>
                                Fecha
                            </th>
                            <!-- Columna oculta en pantallas pequeñas -->
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200  text-left text-xs font-semibold  uppercase tracking-wider">
                                <i class="fas fa-users text-green-600"> &nbsp;</i> Solicitado por:
                            </th>
                            <!-- Columna oculta en pantallas pequeñas -->
                            <th
                                class="hidden sm:table-cell px-5 py-3 border-b-2 border-gray-200  text-left text-xs font-semibold  uppercase tracking-wider">
                                Motivo, razon de la salida del articulo o repuesto
                            </th>
                            <!-- Columna oculta en pantallas pequeñas -->
                            <th
                                class="hidden sm:table-cell px-5 py-3 border-b-2 border-gray-200  text-left text-xs font-semibold  uppercase tracking-wider">
                                Estado
                            </th>
                            <th
                                class="hidden sm:table-cell text-center px-5 py-3 border-b-2 border-gray-200   text-xs font-semibold  uppercase tracking-wider">
                                Acción
                            </th>

                            <!-- Columna oculta en pantallas pequeñas -->


                        </tr>
                    </thead>
                    <tbody>

                
                        @forelse ($orders as $order)


                  
                            <tr>




                                <td class=" pl-4 w-4 sm:w-40 py-2 border-b border-gray-200  text-sm">



                                    <div class="flex justify-between items-center  ">
                                        <div class="inline-block">
                                            {{ $order->id }}
                                        </div>
                                        <div class="inline-block font-medium  mx-1 text-sm lg:text-md">
                                            <p class="font-bold">{{ $order->created_at->format('d-m-Y') }}
                                            </p>
                                            <p> {{ $order->created_at->diffForHumans() }} </p>

                                        </div>



                                    </div>



                                </td>




                                <td class=" py-2 border-b border-gray-200  text-sm">
                                    <div class="sm:text-xs text-xs">



                                        @switch($order->movement_type)
                                            @case(0)
                                                <br>

                                                <div class="rounded-lg p-2  text-center  ">
                                                    <i class="text-yellow-500 fas fa-share-square	"></i>
                                                    &nbsp;


                                                    Salida

                                                </div>
                                            @break

                                            @case(7)
                                                <br>
                                                <div class=" flex justify-center rounded-lg p-2  text-center  ">
                                                    <div>
                                                        <i class=" text-gray-500 fas fa-shipping-fast"></i> &nbsp;
                                                        </i>
                                                        Movimiento

                                                    </div>


                                                    {{-- icono svg --}}

                                                    <div class="mr-2">


                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.com/svgjs" version="1.1"
                                                            width="32" height="16" x="0" y="0"
                                                            viewBox="0 0 512.001 512.001"
                                                            style="enable-background:new 0 0 512 512"
                                                            xml:space="preserve" {{-- class="fill-current text-{{ $item->options->line_color }}"> --}}
                                                            class="fill-current text-{{ $order->warehouseDestiny->station->line->color }}">
                                                            <g>
                                                                <g xmlns="http://www.w3.org/2000/svg">
                                                                    <g>
                                                                        <path fill="currentcolor"
                                                                            d="M406.543,188.63c-3.085-3.35-7.428-5.255-11.981-5.255H186.954c-4.554,0-8.899,1.905-11.982,5.255    c-37.133,40.315-58.429,98.289-58.429,159.059c0,57.446,19.382,116.669,58.429,159.059c3.085,3.349,7.43,5.254,11.982,5.254    h207.607c4.553,0,8.898-1.905,11.982-5.254c38.929-42.261,58.43-101.378,58.43-159.059    C464.973,286.92,443.677,228.944,406.543,188.63z M274.468,334.16H149.529c2.67-45.034,18.595-87.191,44.775-118.203h80.164    V334.16z M307.049,334.16V215.957h80.163c26.182,31.012,42.106,73.169,44.776,118.203H307.049z"
                                                                            fill="#024820" data-original="#000000"
                                                                            style="" class="" />
                                                                    </g>
                                                                </g>
                                                                <g xmlns="http://www.w3.org/2000/svg">
                                                                    <g>
                                                                        <path fill="currentcolor"
                                                                            d="M495.299,13.917c-1.313-8.901-9.581-15.064-18.494-13.737L256.607,32.678c-8.942-19.27-28.464-32.673-51.068-32.673    c-28.368,0-51.888,21.103-55.717,48.433L30.439,66.056c-8.901,1.313-15.051,9.593-13.737,18.494    c1.195,8.094,8.151,13.914,16.095,13.914c0.792,0,1.592-0.057,2.399-0.178l119.612-17.654    c5.084,10.548,13.367,19.271,23.577,24.919v43.554h87.866l-33.563-23.473v-20.078c14.937-8.264,25.743-23.116,28.457-40.613    l220.416-32.53C490.463,31.098,496.613,22.818,495.299,13.917z M205.537,79.975c-13.065,0-23.694-10.629-23.694-23.694    s10.629-23.694,23.694-23.694c13.065,0,23.694,10.629,23.694,23.694C229.233,69.346,218.603,79.975,205.537,79.975z"
                                                                            fill="#024820" data-original="#000000"
                                                                            style="" class="" />
                                                                    </g>
                                                                </g>

                                                            </g>
                                                        </svg>
                                                    </div>

                                                    {{-- FIN icono svg --}}


                                                </div>
                                            @break

                                            @default
                                        @endswitch


                                    </div>





                                </td>








                                <td class=" py-2 border-b border-gray-200  text-xs">
                                    <div
                                        class=" flex justify-center items-center  font-medium  mx-1 text-sm lg:text-md">


                                        <p class=" ">
                                            {{ \Carbon\Carbon::parse($order->items_out_date)->format('d m Y') }}
                                        </p>





                                    </div>
                                </td>

                                <td class=" py-2 border-b border-gray-200  text-xs">

                                    {{ strtoupper(approved($order->user_id)->name) }}
                                </td>

                                <td class=" py-2 border-b border-gray-200  text-sm">

                                    <span class="text-sm text-grey-900"> {{ $order->reason }}</span>

                                </td>

                                <td class=" py-2 border-b border-gray-200  text-sm">
                                    <div class=" sm:text-xs text-xs">



                                        @switch($order->status)
                                            @case(2)
                                                <br>

                                                <div class="form-control rounded-lg p-2  text-center  ">
                                                    <i class="far fa-clock text-yellow-600"> </i>
                                                    <i class="text-yellow-500 fas fa-file-alt	">&nbsp;</i>
                                                    Espera
                                                    {{-- {{ strtoupper(approved($order->approved_user_id)->name) }} --}}

                                                </div>
                                            @break

                                            @case(3)
                                                <br>

                                                <div class="form-control rounded-lg p-2   text-center  ">
                                                    <i class="text-blue-500 fas fa-file-alt	"></i> <i
                                                        class="fas fa-users text-blue-600"> &nbsp;</i>
                                                    Revision
                                                    {{-- {{ strtoupper(approved($order->approved_user_id)->name) }} --}}

                                                </div>
                                            @break

                                            @case(4)
                                                <br>
                                                <div
                                                    class="form-control rounded-lg p-2 text-xs  text-center  ">
                                                    <i class=" text-green-500 fas fa-check-circle"></i> <i
                                                        class="fas fa-user text-green-600"> &nbsp; </i>
                                                    {{ ucfirst(approved($order->approved_user_id)->name) }}

                                                </div>
                                            @break

                                            @case(5)
                                                <br>
                                                <div
                                                    class=" form-control border-0 rounded-lg p-2 text-xs  dark:bg-black text-center  ">
                                                    <i
                                                        class="text-{{ $order->warehouseDestiny->station->line->color }} fas fa-check-circle ">
                                                    </i> &nbsp; <i
                                                        class="fas fa-user text-{{ $order->warehouseDestiny->station->line->color }}"></i>
                                                    {{ ucfirst(approved($order->destiny_aprov_user_id)->name) }}


                                                </div>
                                            @break

                                            @case(6)
                                                <br>

                                                <div class=" form-control text-xs rounded-lg p-2  text-center  ">
                                                    <i class="text-red-500 fas fa-times-circle"></i> <i
                                                        class="fas fa-user text-red-600"> &nbsp;</i>
                                                    {{ ucfirst(approved($order->approved_user_id)->name) }}

                                                </div>
                                            @break

                                            @default
                                        @endswitch


                                    </div>





                                </td>


                                <td class=" sm:table-cell px-2 sm:px-3 py-2 border-b border-gray-200  text-sm">

                                    <div class="flex justify-between">
                                        {{-- <div class="text-green-600 hover:text-green-400 ">


                                                <p class="text-xl flex justify-center">
                                                    <i class="fas fa-expand"></i>
                                                </p>
                                                <p class="text-md flex justify-center">Pre View</p>

                                            </div> --}}





                                        {{-- div del icono y fondos de color automaticos segun linea --}}

                                        <div x-data="{ open: false }" class="relative">
                                            <button @click="open = !open"
                                                class="text-green-600 hover:text-green-400">

                                                {{-- <template x-if="open">
                                                        <i class="fas fa-compress "></i>
                                                    </template> --}}
                                                {{-- <template x-if="!open">
                                                        <i class="fas fa-expand"></i>
                                                 
                                                    </template> --}}





                                                <!-- Elemento que se muestra/oculta basado en el valor de 'open' -->
                                                <i x-show="!open"
                                                    class="items-center justify-center  p-2  fas fa-list-ul"
                                                    style="display: none;"></i>





                                            </button>
                                            <!-- Contenido emergente -->
                                            <div x-show="open" @click.outside="open = false"
                                                @click.away="open = false"
                                                x-transition:enter="transition ease-out duration-200"
                                                x-transition:enter-start="opacity-0 transform scale-95"
                                                x-transition:enter-end="opacity-100 transform scale-100"
                                                x-transition:leave="transition ease-in duration-75"
                                                x-transition:leave-start="opacity-100 transform scale-100"
                                                x-transition:leave-end="opacity-0 transform scale-95"
                                                class="w-96  rounded-md shadow-lg  ring-1 ring-black ring-opacity-5 focus:outline-none"
                                                style="display: none;">
                                                <!-- Contenido del menú emergente -->
                                                <div class="p-4 text-xs">





                                                    <p class="text-gray-500 text-sm">Listado:</p>

                                                    <hr>
                                                    @livewire('mycomponents.card-item-alt', ['order' => $order])









                                                </div>
                                            </div>


                                        </div>


                                        <div>
                                            <a href="{{ route('admin.orders.show', $order) }}"
                                                class="text-blue-600 hover:text-blue-400 ">
                                                <p class="text-xl flex justify-center">
                                                    <i class="fas fa-chevron-circle-right"></i>
                                                </p>
                                                <p class="text-sm flex justify-center">Ver mas</p>
                                            </a>

                                        </div>

                                    </div>



                                </td>

                                <td
                                    class="hidden  sm:table-cell text-center px-5 py-2 border-b border-gray-200  text-sm">

                                </td>
                            </tr>
                            @empty

                                <div class="px-6 py-4">
                                    No hay ningún
                                </div>
                            @endforelse

                        </tbody>
                    </table>

                </x-table-responsive>

            </div>


        </div>


        {{-- END-------------------------------------------------------------------------------------------- --}}












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















