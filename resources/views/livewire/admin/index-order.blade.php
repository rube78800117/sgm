<div>


    <div class=" ">

        <div class="mx-4 sm:mx-24 border-b border-gray-200 dark:border-gray-700 mb-4">
            <ul class="flex flex-wrap -mb-px" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300 active "
                        id="all-tab" data-tabs-target="#all" type="button" role="tab" aria-controls="profile"
                        aria-selected="true">Todas las lineas
                        <a class="px-4 py-2 text-sm"
                            :class="{
                                'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                    1,
                                ' transform -translate-x-2': tab !== 1
                            }"
                            href="#" @click.prevent="tab = 1" @click.prevent="tab = 1">


                        </a>

                    </button>
                </li>
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300 "
                        id="line1-tab" data-tabs-target="#line1" type="button" role="tab" aria-controls="dashboard"
                        aria-selected="false">Linea Blanca</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300 "
                        id="line2-tab" data-tabs-target="#line2" type="button" role="tab" aria-controls="dashboard"
                        aria-selected="false">Linea cafe</button>
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
            <div class="px-12  bg-gray-50 p-4 rounded-lg dark:bg-gray-800 " id="all" role="tabpanel"
                aria-labelledby="all-tab">
                <p class="text-gray-500 dark:text-gray-400 text-sm">SALIDA DE ALMACEN <strong
                        class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>.
                    Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript
                    swaps
                    classes to control the content visibility and styling.</p>


                {{-- -STAR ----------------------------------------------------------------------------- --}}

                <div class="col-span-6 rounded-lg ">

                    <div class="container bg-gray-100 shadow-md  ">
                        <!-- component -->
                        <x-table-responsive>




                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr>
                                        <!-- Columna visible en todas las pantallas -->
                                        <th
                                            class="px-2 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            <i class="fas fa-calendar text-blue-600"> &nbsp;</i>
                                            Fecha registro
                                        </th>

                                        <th
                                            class=" px-2 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            <i class="fas fa-clone text-blue-600"> &nbsp;</i>
                                            TIPO
                                        </th>

                                        <th
                                            class=" px-2 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            <i class="fas fa-calendar text-blue-600"> &nbsp;</i>
                                            Fecha
                                        </th>
                                        <!-- Columna oculta en pantallas pequeñas -->
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            <i class="fas fa-users text-green-600"> &nbsp;</i> Solicitado por:
                                        </th>
                                        <!-- Columna oculta en pantallas pequeñas -->
                                        <th
                                            class="hidden sm:table-cell px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Motivo, razon de la salida del articulo o repuesto
                                        </th>
                                        <!-- Columna oculta en pantallas pequeñas -->
                                        <th
                                            class="hidden sm:table-cell px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Estado
                                        </th>
                                        <th
                                            class="hidden sm:table-cell text-center px-5 py-3 border-b-2 border-gray-200 bg-gray-100  text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Acción
                                        </th>

                                        <!-- Columna oculta en pantallas pequeñas -->


                                    </tr>
                                </thead>
                                <tbody>


                                    @forelse ($orders as $order)
                                        <tr>




                                            <td class="pl-4 w-4 sm:w-40 py-2 border-b border-gray-200 bg-white text-sm">



                                                <div class="flex justify-between items-center  ">
                                                    <div class="inline-block">
                                                        {{ $order->id }}
                                                    </div>
                                                    <div
                                                        class="inline-block font-medium text-gray-800 mx-1 text-sm lg:text-md">
                                                        <p class="font-bold">{{ $order->created_at->format('d-m-Y') }}
                                                        </p>
                                                        <p> {{ $order->created_at->diffForHumans() }} </p>

                                                    </div>



                                                </div>



                                            </td>




                                            <td class=" py-2 border-b border-gray-200 bg-white text-sm">
                                                <div class="sm:text-xs text-xs">



                                                    @switch($order->movement_type)
                                                        @case(0)
                                                            <br>

                                                            <div class="rounded-lg p-2 bg-yellow-50 text-center  ">
                                                                <i class="text-yellow-500 fas fa-share-square	"></i>
                                                                &nbsp;


                                                                Salida

                                                            </div>
                                                        @break

                                                        @case(7)
                                                            <br>
                                                            <div
                                                                class=" flex justify-center rounded-lg p-2 bg-gray-100 text-center  ">
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








                                            <td class=" py-2 border-b border-gray-200 bg-white text-xs">
                                                <div
                                                    class=" flex justify-center items-center  font-medium text-gray-800 mx-1 text-sm lg:text-md">


                                                    <p class=" ">
                                                        {{ \Carbon\Carbon::parse($order->items_out_date)->format('d m Y') }}
                                                    </p>





                                                </div>
                                            </td>

                                            <td class=" py-2 border-b border-gray-200 bg-white text-xs">

                                                {{ strtoupper(approved($order->user_id)->name) }}
                                            </td>

                                            <td class=" py-2 border-b border-gray-200 bg-white text-sm">

                                                <span class="text-sm text-grey-900"> {{ $order->reason }}</span>

                                            </td>

                                            <td class=" py-2 border-b border-gray-200 bg-white text-sm">
                                                <div class="sm:text-xs text-xs">



                                                    @switch($order->status)
                                                        @case(2)
                                                            <br>

                                                            <div class="rounded-lg p-2 bg-yellow-50 text-center  ">
                                                                <i class="far fa-clock text-yellow-600"> </i>
                                                                <i class="text-yellow-500 fas fa-file-alt	">&nbsp;</i>
                                                                Espera
                                                                {{-- {{ strtoupper(approved($order->approved_user_id)->name) }} --}}

                                                            </div>
                                                        @break

                                                        @case(3)
                                                            <br>

                                                            <div class="rounded-lg p-2 bg-blue-50 text-center  ">
                                                                <i class="text-blue-500 fas fa-file-alt	"></i> <i
                                                                    class="fas fa-users text-blue-600"> &nbsp;</i>
                                                                Revision
                                                                {{-- {{ strtoupper(approved($order->approved_user_id)->name) }} --}}

                                                            </div>
                                                        @break

                                                        @case(4)
                                                            <br>
                                                            <div class="rounded-lg p-2 text-xs bg-green-100 text-center  ">
                                                                <i class=" text-green-500 fas fa-check-circle"></i> <i
                                                                    class="fas fa-user text-green-600"> &nbsp; </i>
                                                                {{ ucfirst(approved($order->approved_user_id)->name) }}

                                                            </div>
                                                        @break

                                                        @case(6)
                                                            <br>

                                                            <div class="text-xs rounded-lg p-2 bg-red-100 text-center  ">
                                                                <i class="text-red-500 fas fa-times-circle"></i> <i
                                                                    class="fas fa-user text-red-600"> &nbsp;</i>
                                                                {{ ucfirst(approved($order->approved_user_id)->name) }}

                                                            </div>
                                                        @break

                                                        @default
                                                    @endswitch


                                                </div>





                                            </td>


                                            <td
                                                class=" sm:table-cell px-2 sm:px-3 py-2 border-b border-gray-200 bg-white text-sm">
                                                <div>
                                               <a href="{{route('admin.orders.show', $order)}}"
                                                        class="text-blue-600 hover:text-blue-400 ">
                                                        <p class="text-xl flex justify-center">
                                                            <i class="fas fa-chevron-circle-right"></i>
                                                        </p>
                                                        <p class="text-md flex justify-center">Ver mas</p>
                                                    </a>

                                                </div>





                                            </td>

                                            <td
                                                class="hidden  sm:table-cell text-center px-5 py-2 border-b border-gray-200 bg-white text-sm">

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










                </div>
                <div class=" px-12  bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="line1" role="tabpanel"
                    aria-labelledby="line1-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">MOVIMIENTO <strong
                            class="font-medium text-gray-800 dark:text-white">Para el movimiento de articulos entre
                            almacenes </strong>llene los siguientes campos.</p>








                </div>

                <div class=" px-12  bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="line2" role="tabpanel"
                    aria-labelledby="line2-tab">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">MOVIMIENTO ENTRE ALMACENES <strong
                            class="font-medium text-gray-800 dark:text-white">Para elos entre
                            almacenes </strong>llene los siguientes campos.</p>








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












































































        <div class="min-h-screen py-2  justify-center sm:py-1">
            <section class="py-2 mx-auto space-y-2 sm:py-10 pr-2">


                <!--en x data se define que se recargara inicialmente en tab: 1-->
                <div style='width: 100%;' class=" m-2 sm:m-12 flex flex-row items-stretch justify-center w-full space-x-2"
                    x-data="{ tab: 1 }">


                    <!--muestra los iconos de clasificacion ne el derecho -->
                    <div class="flex flex-col justify-start w-1/6 space-y-4">
                        <a class="px-4 py-2 text-sm"
                            :class="{
                                'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                    1,
                                ' transform -translate-x-2': tab !== 1
                            }"
                            href="#" @click.prevent="tab = 1" @click.prevent="tab = 1">
                            @livewire('mycomponents.card', ['color' => 'yellow-400', 'status' => 'Recibidos', 'count' => "$enviado", 'icon' => 'fas fa-clipboard'])

                        </a>

                        <a class="px-4 py-2 text-sm"
                            :class="{
                                'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                    2,
                                ' transform -translate-x-2': tab !== 2
                            }"
                            href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                            @livewire('mycomponents.card', ['color' => 'blue-400', 'status' => 'Revision', 'count' => "$revision", 'icon' => 'fas fa-clipboard-list'])
                        </a>

                        <a class="px-4 py-2 text-sm"
                            :class="{
                                'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                    3,
                                ' transform -translate-x-2': tab !== 3
                            }"
                            href="#" @click.prevent="tab = 3" @click.prevent="tab = 3">
                            @livewire('mycomponents.card', ['color' => 'green-400', 'status' => 'Aprobados', 'count' => "$aprobado", 'icon' => 'fas fa-clipboard-check'])

                        </a>

                        <a class="px-4 py-2 text-sm"
                            :class="{
                                'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                    4,
                                ' transform -translate-x-2': tab !== 4
                            }"
                            href="#" @click.prevent="tab = 4" @click.prevent="tab = 4">
                            @livewire('mycomponents.card', ['color' => 'red-400', 'status' => 'Cancelados', 'count' => "$anulado", 'icon' => 'fas fa-trash'])
                        </a>

                        <a class="px-4 py-2 text-sm"
                            :class="{
                                'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                    5,
                                ' transform -translate-x-2': tab !== 5
                            }"
                            href="#" @click.prevent="tab = 5" @click.prevent="tab = 5">
                            TODAS LOS REGISTROS
                        </a>
                    </div>

                    <div class=" ">
                        <span
                            class="py-2 my-1 inline-flex bg-green-500 text-white  h-2 px-3 justify-center items-center">Administrador</span>


                        <div class="space-y-2" x-show="tab === 1">


                            @if ($enviadoreg->count())


                                <h3 class="text-xl font-bold leading-tight" x-show="tab === 1"
                                    x-transition:enter="transition duration-500 transform ease-in"
                                    x-transition:enter-start="opacity-0">
                                    SOLICITUDES RECIBIDAS
                                </h3>

                                <section class="bg-white shadow-lg rounded-lg mt-2  text-gray-700" class="text-base"
                                    x-show="tab === 1"
                                    x-transition:enter="transition delay-100 duration-300 transform ease-in"
                                    x-transition:enter-start="opacity-0">
                                    <div class=" mx-auto ">
                                        <ul>

                                            @foreach ($enviadoreg as $order)
                                                @livewire('mycomponents.card-item', ['order' => $order])
                                            @endforeach

                                        </ul>
                                    </div>
                                </section>
                            @else
                                <div class="bg white shadow-lg rounded-lg px-12 py-8 mt-12  text-gray-700">
                                    <span>No existe registros para mostrar</span>
                                </div>
                            @endif

                        </div>

                        <div class="space-y-2" x-show="tab === 2">






                            @if ($revisionreg->count())

                                <h3 class="text-xl font-bold leading-tight" x-show="tab === 2"
                                    x-transition:enter="transition duration-500 transform ease-in"
                                    x-transition:enter-start="opacity-0">
                                    SOLICITUDES EN REVISION
                                </h3>

                                <section class="bg-white shadow-lg rounded-lg mt-2  text-gray-700" x-show="tab === 2"
                                    x-transition:enter="transition delay-100 duration-300 transform ease-in"
                                    x-transition:enter-start="opacity-0">
                                    <div class=" mx-auto ">
                                        <ul>

                                            @foreach ($revisionreg as $order)
                                                @livewire('mycomponents.card-item', ['order' => $order])
                                            @endforeach

                                        </ul>
                                    </div>
                                </section>
                            @else
                                <div class="bg white shadow-lg rounded-lg px-12 py-8 mt-12  text-gray-700">
                                    <span>No existe registros para mostrar</span>
                                </div>
                            @endif







                        </div>

                        <div class="space-y-2" x-show="tab === 3">




                            @if ($aprobadoreg->count())

                                <h3 class="text-xl font-bold leading-tight" x-show="tab === 3"
                                    x-transition:enter="transition duration-500 transform ease-in"
                                    x-transition:enter-start="opacity-0">
                                    SOLICITUDES APROBADAS
                                </h3>

                                <section class="bg-white shadow-lg rounded-lg mt-2  text-gray-700" x-show="tab === 3"
                                    x-transition:enter="transition delay-100 duration-300 transform ease-in"
                                    x-transition:enter-start="opacity-0">
                                    <div class=" mx-auto ">
                                        <ul>

                                            @foreach ($aprobadoreg as $order)
                                                @livewire('mycomponents.card-item', ['order' => $order])
                                            @endforeach

                                        </ul>
                                    </div>
                                </section>
                            @else
                                <div class="bg white shadow-lg rounded-lg px-12 py-8 mt-12  text-gray-700">
                                    <span>No existe registros para mostrar</span>
                                </div>
                            @endif










                        </div>

                        <div class="space-y-2" x-show="tab === 4">





                            @if ($anuladoreg->count())

                                <h3 class="text-xl font-bold leading-tight" x-show="tab === 4"
                                    x-transition:enter="transition duration-500 transform ease-in"
                                    x-transition:enter-start="opacity-0">
                                    SOLICITUDES CANCELADAS
                                </h3>


                                <section class="bg-white shadow-lg rounded-lg mt-2  text-gray-700" x-show="tab === 4"
                                    x-transition:enter="transition delay-100 duration-300 transform ease-in"
                                    x-transition:enter-start="opacity-0">
                                    <div class=" mx-auto ">
                                        <ul>

                                            @foreach ($anuladoreg as $order)
                                                @livewire('mycomponents.card-item', ['order' => $order])
                                            @endforeach

                                        </ul>
                                    </div>
                                </section>
                            @else
                                <div class="bg white shadow-lg rounded-lg px-12 py-8 mt-12  text-gray-700">
                                    <span>No existe registros para mostrar</span>
                                </div>
                            @endif





                        </div>


                        @if ($orders->count())
                            <div class="space-y-2" x-show="tab === 5">
                                <h3 class="text-xl font-bold leading-light" x-show="tab === 5"
                                    x-transition:enter="transition duration-500 transform ease-in"
                                    x-transition:enter-start="opacity-0">
                                    TODOS LOS REGISTROS
                                </h3>


                                <section class="bg-white shadow-lg rounded-lg mt-2  text-gray-700">
                                    <div class=" mx-auto ">
                                        <ul>

                                            @foreach ($orders as $order)
                                                @livewire('mycomponents.card-item', ['order' => $order])
                                            @endforeach

                                        </ul>
                                    </div>
                                </section>
                            @else
                                <div class="bg white shadow-lg rounded-lg px-12 py-8 mt-12  text-gray-700">
                                    <span>No existe registros para mostrar</span>
                                </div>
                        @endif
                    </div>
                </div>
        </div>
        </section>
    </div>
    <script>
        Livewire.emit('warehouseOrderSearch')
    </script>















    </div>
