<div>







    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="my-4">
            <a class="flex items-baseline mt-3 text-blue-600 hover:text-blue-900 focus:text-blue-900"
                href="{{ url('/admin/orders') }}">
                <span class="text-xs ml-1"> <i class="text-l fas fa-chevron-circle-left"> </i>
                    &nbsp </span>
                <span> Volver a la pagian anterior</span>

            </a>
        </div>
        <div class="">

            {{-- Seccion approved --}}

            <div
                class="{{ $order->status >= 6 && $order->status <= 6 ? 'hidden' : ' bg-white rounded-lg shadow-lg px-12 py-8 mb-6 flex  items-center' }}">


                {{-- <div
                class=""> --}}


                <div class=" relative">
                    <div
                        class="{{ $order->status >= 2 && $order->status <= 5 ? 'bg-blue-400' : 'bg-gray-400' }} rounded-full h-12 w-12  flex items-center justify-center">
                        <i class="fas fa-check text-white"></i>
                        <div class="absolute -bottom-6 mt-0.5">
                            <p class="text-gray-700"> Recibido</p>
                        </div>

                    </div>

                </div>




                <div
                    class="{{ $order->status >= 3 && $order->status <= 5 ? 'bg-blue-400' : 'bg-gray-400' }} h-1 flex-1 mx-2">
                </div>




                <div class=" relative">
                    <div
                        class="{{ $order->status >= 3 && $order->status <= 5 ? 'bg-blue-400' : 'bg-gray-400' }} rounded-full h-12 w-12  flex items-center justify-center">
                        <i class="fas fa-check text-white"></i>
                        <div class="absolute -bottom-6 mt-0.5">
                            <p class="text-gray-700"> Revision</p>
                        </div>
                    </div>

                </div>




                <div
                    class="{{ $order->status >= 4 && $order->status <= 5 ? 'bg-blue-400' : 'bg-gray-400' }} h-1 flex-1 mx-2">
                </div>



                <div class=" relative">
                    <div
                        class="{{ $order->status >= 4 && $order->status <= 5 ? 'bg-green-400' : 'bg-gray-400' }} rounded-full h-12 w-12  flex items-center justify-center">
                        <i class="fas fa-check text-white"></i>
                        <div class="absolute -bottom-6 mt-0.5">
                            <p class="text-gray-700"> Aprobado</p>
                        </div>
                    </div>


                </div>




                @if ($order->movement_type == 7)
                    <div
                        class="{{ $order->status >= 5 && $order->status <= 5 ? 'bg-green-400' : 'bg-gray-400' }} h-1 flex-1 mx-2">
                    </div>



                    <div class=" relative">
                        <div
                            class="{{ $order->status >= 5 && $order->status <= 5 ? 'bg-green-400' : 'bg-gray-400' }} rounded-full h-12 w-12  flex items-center justify-center">
                            <i class="fas fa-check text-white"></i>
                            <div class="absolute -bottom-6 mt-0.5">
                                <p class="text-gray-700"> Recepcionado</p>
                            </div>
                        </div>


                    </div>
                @endif







            </div>

            {{-- {{seccion cancell}} --}}

            <div
                class="{{ $order->status >= 6 && $order->status != 5 ? ' bg-white rounded-lg shadow-lg px-12 py-8 mb-6 flex  items-center' : 'hidden' }} ">

                <div class=" relative">
                    <div
                        class="{{ $order->status >= 6 && $order->status != 5 ? 'bg-blue-400' : 'bg-gray-400' }} rounded-full h-12 w-12  flex items-center justify-center">
                        <i class="fas fa-check text-white"></i>
                        <div class="absolute -bottom-6 mt-0.5">
                            <p class="text-gray-700"> Recibido</p>
                        </div>

                    </div>

                </div>




                <div
                    class="{{ $order->status >= 6 && $order->status != 5 ? 'bg-blue-400' : 'bg-gray-400' }} h-1 flex-1 mx-2">
                </div>




                <div class=" relative">
                    <div
                        class="{{ $order->status >= 6 && $order->status != 5 ? 'bg-blue-400' : 'bg-gray-400' }} rounded-full h-12 w-12  flex items-center justify-center">
                        <i class="fas fa-check text-white"></i>
                        <div class="absolute -bottom-6 mt-0.5">
                            <p class="text-gray-700"> Revision</p>
                        </div>
                    </div>

                </div>






                <div
                    class="{{ $order->status >= 6 && $order->status != 5 ? 'bg-blue-400' : 'hidden  bg-gray-400' }} h-1 flex-1 mx-2">
                </div>



                <div class="relative">
                    <div
                        class="{{ $order->status >= 6 && $order->status != 5 ? 'bg-red-400' : 'hidden bg-gray-400' }} rounded-full h-12 w-12  flex items-center justify-center">


                        <i class=" text-2xl fas fa-times text-white"></i>
                        <div class="absolute -bottom-6 -left-1.5 mt-0.5">
                            <p class="text-gray-700"> Anulado</p>
                        </div>
                    </div>


                </div>


            </div>



        </div>


        <div class="bg-white rounded-lg shadow-lg px-6 py-4 mb-6">
            <div class="flex justify-end">
                <p class="text-md  font-bold uppercase"><span class="font-bold">Número de solicitud </span>-
                    {{ $order->id }}</p>










            </div>


            @if ($order->movement_type == 7)
                <div class="">
                    <p class="flex justify-end font-bold text-sm">MOVIMIENTO ENTRE ALMACENES</p>

                    <p class="flex justify-end font-bold text-sm">ALMACEN DE DESTINO </p>
                </div>
                <span class="flex justify-end text-xs">{{ strtoupper($destination->station->line->name) }} -
                    {{ strtoupper($destination->station->name) }} - {{ strtoupper($destination->name) }}</span>
                <div>
                    {{-- icono svg --}}
                    <div class="flex justify-end mr-2">





                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="32" height="32" x="0"
                            y="0" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512 512"
                            xml:space="preserve" class="fill-current text-{{ $destination->station->line->color }}">
                            <g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill="currentcolor"
                                            d="M406.543,188.63c-3.085-3.35-7.428-5.255-11.981-5.255H186.954c-4.554,0-8.899,1.905-11.982,5.255    c-37.133,40.315-58.429,98.289-58.429,159.059c0,57.446,19.382,116.669,58.429,159.059c3.085,3.349,7.43,5.254,11.982,5.254    h207.607c4.553,0,8.898-1.905,11.982-5.254c38.929-42.261,58.43-101.378,58.43-159.059    C464.973,286.92,443.677,228.944,406.543,188.63z M274.468,334.16H149.529c2.67-45.034,18.595-87.191,44.775-118.203h80.164    V334.16z M307.049,334.16V215.957h80.163c26.182,31.012,42.106,73.169,44.776,118.203H307.049z"
                                            fill="#024820" data-original="#000000" style="" class="" />
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill="currentcolor"
                                            d="M495.299,13.917c-1.313-8.901-9.581-15.064-18.494-13.737L256.607,32.678c-8.942-19.27-28.464-32.673-51.068-32.673    c-28.368,0-51.888,21.103-55.717,48.433L30.439,66.056c-8.901,1.313-15.051,9.593-13.737,18.494    c1.195,8.094,8.151,13.914,16.095,13.914c0.792,0,1.592-0.057,2.399-0.178l119.612-17.654    c5.084,10.548,13.367,19.271,23.577,24.919v43.554h87.866l-33.563-23.473v-20.078c14.937-8.264,25.743-23.116,28.457-40.613    l220.416-32.53C490.463,31.098,496.613,22.818,495.299,13.917z M205.537,79.975c-13.065,0-23.694-10.629-23.694-23.694    s10.629-23.694,23.694-23.694c13.065,0,23.694,10.629,23.694,23.694C229.233,69.346,218.603,79.975,205.537,79.975z"
                                            fill="#024820" data-original="#000000" style="" class="" />
                                    </g>
                                </g>

                            </g>
                        </svg>
                        <div class="  flex justify-end">

                        </div>
                    </div>

                    {{-- FIN icono svg --}}
                </div>


                <div class="flex">
                    <P class="font-bold text-sm">SOLICITANTE: </P> &nbsp <span class="text-sm">
                        {{ strtoupper($user->name) }} </span>
                </div>

                <div class="flex">
                    <P class="font-bold text-sm">MOTIVO DEL MOVIMIENTO: </P> &nbsp <span class="text-sm">
                        {{ strtoupper($order->reasonMove) }} </span>
                </div>
                <div class="flex">
                    <P class="font-bold text-sm">FECHA DEL MOVIMIENTO: </P> &nbsp <span class="text-sm">
                        {{ strtoupper($order->items_out_date) }} </span>
                </div>

                <div class="px-2 text-xs">



                    @switch($order->status)
                        @case(4)
                            <br> Aprovado por: {{ approved($order->approved_user_id)->name }}
                        @break

                        @case(6)
                            <br> Cancelado por: {{ approved($order->approved_user_id)->name }}
                        @break

                        @default
                    @endswitch


                </div>
            @else
                <p class="flex justify-end font-bold text-sm">SALIDA DE ALMACEN</p>
                <div class="flex">
                    <P class="font-bold text-sm">SOLICITANTE: </P> &nbsp <span class="text-sm">
                        {{ strtoupper($user->name) }} </span>
                </div>
                <div class="flex">
                    <P class="font-bold text-sm">MOTIVO DE SALIDA: </P> &nbsp <span class="text-sm">
                        {{ strtoupper($order->reason) }} </span>
                </div>
                <div class="flex">
                    <P class="font-bold text-sm">SISTEMA - SUBSISTEMA - EQUIPO : </P> &nbsp <span class="text-sm">
                        {{ strtoupper($order->equipment) }} </span>
                </div>
                <div class="flex">
                    <P class="font-bold text-sm">ORDEN DE TRABAJO (OT): </P> &nbsp <span class="text-sm">
                        {{ strtoupper($order->ot) }} </span>
                </div>
                <div class="flex">
                    <P class="font-bold text-sm">FECHA DE SALIDA: </P> &nbsp <span class="text-sm">
                        {{ strtoupper($order->items_out_date) }} </span>
                </div>


                <div class=" {{ $order->status >= 4 ? 'hidden' : '' }}py-4">



                    @switch($order->status)
                        @case(4)
                            <P class="font-bold text-sm">REVISADO POR: </P> &nbsp

                            <br> {{ approved($order->approved_user_id)->name }}
                        @break

                        @case(6)
                            <br> {{ approved($order->approved_user_id)->name }}
                        @break

                        @default
                    @endswitch




                    {{--                     
                    <span class="text-sm"> {{ strtoupper($order->approved_user) }} </span> --}}
                </div>
            @endif

            {{-- {{$order->movement_type}}
            {{$order->items_out_date}}
             --}}
            {{-- 
           :2,"movement_type":"7","status":"4","approved_user_id":1,"items_out_date":"2024-06-10", --}}
        </div>




        {{-- muestra lista detalle de la solicitud --}}

        <div class="items-center justify-items-center ">

            <div class="bg-white rounded-lg shadow-lg px-6 py-2 mb-6 ">

                {{-- envia inf to save with radio button --}}
                {{-- <form wire:submit.prevent="update()">
                    <div class="flex space-x-3 mt-2">
                        <x-jet-label>
                            <input wire:model="status" class="mr-2" type="radio" name="status" value="1">
                            Pendiente
                        </x-jet-label>
                        <x-jet-label>
                            <input wire:model="status" class="mr-2" type="radio" name="status" value="2">
                            Enviado
                        </x-jet-label>
                        <x-jet-label>
                            <input wire:model="status" class="mr-2" type="radio" name="status" value="3">
                            Revision
                        </x-jet-label>
                        <x-jet-label>
                            <input wire:model="status" class="mr-2" type="radio" name="status" value="4">
                            Aprobado
                        </x-jet-label>
                        <x-jet-label>
                            <input wire:model="status" class="mr-2" type="radio" name="status" value="5">
                            Rechazado
                        </x-jet-label>
                        <x-jet-label>
                            <input wire:model="status" class="mr-2" type="radio" name="status" value="6">
                            Anulado
                        </x-jet-label>
                    </div>

                    <div class="flex mt-2">
                        <x-jet-button class="ml-auto ">
                            Acuallizar
                        </x-jet-button>
                    </div>

                </form> --}}



                <div class="bg-white rounded-lg shadow-lg p-6 ">
                    <div class="grid grid-col-2 gap-6 text-gray-700">
                        <div class="grid grid-col-2 gap-6 text-gray-700">
                            <div>
                                <p class="text-gray-700  font-semibold"><i
                                        class="text-yellow-600 fas fa-info-circle"></i>&nbsp Instrucciones para el
                                    control adecuado de Stock en almacenes.</p>
                                <p class="text-justify text-gray-600">
                                    <spam class="text-blue-700 font-semibold">Enviado: </spam> La solicitud ya fue
                                    enviada al administrador, las cantidades disponibles ya fueron actualizadas, por lo
                                    tanto usted puede disponer del o los articulos estrictamente del almacen que lo
                                    solicito. Si esta solicitud no es correcta puede comunicarse con el administrador
                                    para su anulacion y se restablecerán las cantidades en Stock solicitadas a su
                                    respectivo almacen.
                                </p>

                                <p class="text-justify text-gray-600  ">
                                    <spam class="text-blue-700 font-semibold">Revision: </spam> El administrador puede
                                    anular o aprobar esta solicitud en coordinacion con el solicitante, esto para
                                    mantener un control adecuado de stock en los diferentes almacenes. Tome en cuenta
                                    que los administradores pueden aprobar esta solicitud rapidamente cuando se trata de
                                    articulos comunes, por tanto usted debe comunicarse rapidamente con el para anularla
                                    si fuera el caso de que la solicitud no sea correcta
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- tabla de resumen de articulos ya solicitados --}}


                {{-- @if($order->destiny_mov_warehouse_id)
                @php
                    $destinyWarehouse = \App\Models\Warehouse::find($order->destiny_mov_warehouse_id);
                    $line_color = $destinyWarehouse ? $destinyWarehouse->station->line->color : 'white';
                @endphp
                @endif --}}
{{-- {{dd(orLine($order->origin_line_id) )}} --}}


{{-- <button wire:click="orLine({{$order->origin_line_id}})"> ir color</button> --}}

                {{-- <p class="text-gray-500 text-sm mt-2">Nombre de línea de origen: </p>
                <span class="text-gray-700 text-sm ">{{ orLine($order->origin_line_id) }}</span> --}}

                <div class="bg-white rounded-lg shadow-lg px-6  py-4 mb-2 ">
                    <p class="text-gray-700 text-sm uppercase"><span class="font-bold">RESUMEN DE ARTICULOS
                            SOLICITADOS</span> </p>
                </div>
                <p class="text-gray-500 text-sm mt-2">Color de línea de origen: </p>
                {{-- {{originLineColor($order->origin_line_id )}} --}}
                <div class=" {{ $order->status >= 4 ? 'bg-green-200' : 'hidden ' }} py-2 px-6 rounded-lg ">
                    <div class="flex">
                        <div> <i class="fas fa-truck text-{{$line_origin_color ?? 'white'}}"></i> </div>
                        <P class="font-bold text-sm">OBSERVACIONES: </P> &nbsp <span class="text-sm">
                            {{ strtoupper($order->observation_origin) }} </span>
                    </div>
                </div>
                <div class=" {{ $order->status == 5 ? 'bg-green-200' : 'hidden ' }} py-2 px-6 rounded-lg ">
                    <div class="flex">
                        <div><i class="fas fa-truck text-{{$oder->line_destiny_color ?? 'white'}}"></i> </div>
                        <P class="font-bold text-sm">RECEPCION: </P> &nbsp <span class="text-sm">
                            {{ strtoupper($order->observation_destiny) }} </span>
                    </div>
                </div>
             
                <div class=" {{ $order->status == 6 ? 'bg-red-200' : 'hidden ' }} py-2 px-6 rounded-lg ">
                    <div class="flex">
                        <P class="font-bold text-sm">OBSERVACIONES: </P> &nbsp <span class="text-sm">
                            {{ strtoupper($order->observation) }} </span>
                    </div>
                </div>
                {{-- <div class=" {{ $order->status >= 4 && $order->status <= 4 ? 'text-green-300' : 'hidden'}}py-4"><span class="">
                    OBSERVACIONES:</span>
                   
                </div>
                <div class=" {{  $order->status >= 6 && $order->status != 5 ? 'text-red-300' : 'hidden'}}py-4"><span class="">
                    OBSERVACIONES:</span>
                   
                </div> --}}





                {{-- star hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh --}}



                <!-- component -->
                <x-table-responsive>




                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <!-- Columna visible en todas las pantallas -->
                                <th
                                    class="px-2 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Origen
                                </th>
                                <!-- Columna oculta en pantallas pequeñas -->
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">

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
                                    class="hidden sm:table-cell text-center px-5 py-3 border-b-2 border-gray-200 bg-gray-100  text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Cantidad
                                </th>

                                <!-- Columna oculta en pantallas pequeñas -->


                            </tr>
                        </thead>
                        <tbody>


                            @forelse ($items as $item)
                                <tr>




                                    <td class="pl-4 w-4 sm:w-40 py-2 border-b border-gray-200 bg-white text-sm">



                                        <div class="flex justify-between items-center  ">

                                            {{-- icono svg --}}

                                            <div class="mr-2">


                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.com/svgjs" version="1.1"
                                                    width="32" height="32" x="0" y="0"
                                                    viewBox="0 0 512.001 512.001"
                                                    style="enable-background:new 0 0 512 512" xml:space="preserve"
                                                    class="fill-current text-{{ $item->options->line_color }}">
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
                                            <div class="hidden  sm:w-24 sm:table-cell">
                                                <h1 class="text-xs text-gray-700 mt-0 uppercase py-2 ">
                                                    {{ $item->options->warehouse }}
                                                </h1>
                                            </div>



                                        </div>



                                    </td>

                                    <td class=" py-2 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-12 h-12">
                                                <img class="h-10 w-10 object-cover ml-2 mr-1"
                                                    src=" {{ $item->options->image }} " alt="">
                                            </div>
                                        </div>
                                    </td>


                                    <td
                                        class=" sm:table-cell px-2 sm:px-3 py-2 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                        <p class="text-xs font-medium  text-gray-900 mr=4 my-0 ">
                                            {{ $item->name }}</p>

                                        @if ($item->options->id_dopp)
                                            <p class=" text-gray-900 mr-2"></p>
                                            <ul class="flex">
                                                <i class="text-blue-500 mr-2 fas fa-key"></i>
                                                <li class="hidden sm:block text-gray-800 mr-2">
                                                    Dopplmayr:</li>
                                                <li class=" text-gray-600   ">{{ $item->options->id_dopp }}</li>
                                            </ul>
                                        @endif
                                        @if ($item->options->id_eetc)
                                            <p class=" text-gray-900 mr-2"></p>

                                            <ul class="flex">
                                                <i class="text-yellow-400 mr-2 fas fa-key"></i>
                                                <li class="hidden sm:block text-gray-800 mr-2">
                                                    MiTeleferico:
                                                </li>
                                                <li class=" text-gray-600"> {{ $item->options->id_eetc }}</li>
                                            </ul>
                                        @endif

                                        {{-- @if ($item->options->id_zona !== null)
                                            <p class=" text-gray-900 mr-2"> </p>
                                            <ul class="flex">
                                                <i class="text-gray-400 mr-2 fas fa-key"></i>
                                                <li class="hidden sm:block text-gray-800 mr-2">
                                                    Zona:</li>
                                                <li class=" text-gray-600  ">{{ $item->options->id_zona }}</li>
                                            </ul>
                                        @endif --}}


                                        </p>

                                    </td>


                                    <td class=" sm:hidden px-2 py-2 border-b border-gray-200 bg-white text-xs">
                                        <p class=" text-center text-gray-900 whitespace-no-wrap">
                                            {{ $item->qty }}
                                        </p>
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $item->options->unit }}
                                        </p>



                                    </td>

                                    <td
                                        class="hidden sm:table-cell px-5 py-2 border-b border-gray-200 bg-white text-xs">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $item->options->unit }}
                                        </p>
                                    </td>

                                    <td
                                        class="hidden  sm:table-cell text-center px-5 py-2 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $item->qty }}
                                        </p>
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








                {{-- END  hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh --}}



























                <div class=" {{ $order->status == 4  || $order->status >=5  ? 'hidden ' : '' }}py-4">




                    <x-jet-label value=" Observaciones" />

                    <x-jet-input Type="text" wire:model.defer="observation" class="w-full "
                        value="{{ old('observation', $this->observation) }}" />
                    <x-jet-input-error for="observation" />
                

                    <div class="flex justify-between pt-2">



                        <button wire:click="status_save({{ 6 }},{{ $order }})" type="button"
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-500 text-base font-medium text-white hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-400 sm:w-auto sm:text-sm">
                            Cancelar Solicitud</button>



                        <button wire:click="status_save({{ 4 }})" type="button"
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-500 text-base font-medium text-white hover:bg-green-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-400 sm:w-auto sm:text-sm">
                            Aprobar Solicitud </button>

                    </div>


                </div>



                <div class=" {{ $order->status < 4 || $order->status >= 5 ? 'hidden ' : '' }}py-4">


                    <x-jet-label value=" Observaciones recepción " />

                    <x-jet-input Type="text" wire:model.defer="observation_destiny" class="w-full "
                        value="{{ old('observation_destiny', $this->observation_destiny) }}" />
                    <x-jet-input-error for="observation_destiny" />


                    <div class="flex justify-between pt-2">


{{-- 
                        <button wire:click="status_save({{ 6 }},{{ $order }})" type="button"
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-500 text-base font-medium text-white hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-400 sm:w-auto sm:text-sm">
                            Cancelar Solicitud</button> --}}



                        <button wire:click="statusMovementSave({{ 5 }})" type="button"
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-500 text-base font-medium text-white hover:bg-green-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-400 sm:w-auto sm:text-sm">
                            Recepcionar </button>

                    </div>


                </div>


            </div>




        </div>







        {{-- asdadasdasssssssssse lllllllllllllllllllllllllllllllll --}}



        {{-- <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
    <section class="py-20 mx-auto space-y-8 sm:py-20">
        <div style='width:800px;'
            class="container flex flex-row items-stretch justify-center w-full max-w-4xl space-x-12" x-data="{tab: 1}">
            <div class="flex flex-col justify-start w-1/4 space-y-4">
                <a class="px-4 py-2 text-sm"
                    :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 1, ' transform -translate-x-2': tab !== 1}"
                    href="#" @click.prevent="tab = 1">
                    RECIBIDOS
                </a>
                <a class="px-4 py-2 text-sm"
                    :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 2, ' transform -translate-x-2': tab !== 2}"
                    href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                    REVISION
                </a>
                <a class="px-4 py-2 text-sm"
                    :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 3, ' transform -translate-x-2': tab !== 3}"
                    href="#" @click.prevent="tab = 3" @click.prevent="tab = 3">
                    APROBADOS
                </a>
                <a class="px-4 py-2 text-sm"
                    :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 4, ' transform -translate-x-2': tab !== 4}"
                    href="#" @click.prevent="tab = 4" @click.prevent="tab = 4">
                    CANCELADOS
                </a>
                <a class="px-4 py-2 text-sm"
                    :class="{'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab === 5, ' transform -translate-x-2': tab !== 5}"
                    href="#" @click.prevent="tab = 5" @click.prevent="tab = 5">
                    OTROS
                </a>
            </div>
            <div class="w-3/4">
                <div class="space-y-6" x-show="tab === 1">
                    <h3 class="text-xl font-bold leading-tight" x-show="tab === 1"
                        x-transition:enter="transition duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        BATMAN & ROBIN
                    </h3>
                    <p class="text-base text-gray-600" x-show="tab === 1"
                        x-transition:enter="transition delay-100 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Rottentomatoes 12%
                    </p>
                    <p class="text-xl" x-show="tab === 1"
                        x-transition:enter="transition delay-200 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Batman & Robin try to keep their relationship together even as they must stop Mr. Freeze and
                        Poison Ivy from...
                    </p>
                    <p class="text-base" x-show="tab === 1"
                        x-transition:enter="transition delay-300 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Is this the right batman for me?
                    </p>
                    <a href="https://twitter.com/smilesharks"
                        class="inline-flex items-center justify-center px-8 pt-3 pb-2 mt-4 text-lg text-center text-white no-underline bg-blue-500 border-blue-500 cursor-pointer hover:bg-gray-900 rounded-3xl hover:text-white focus-within:bg-blue-500 focus-within:border-blue-500 focus-within:text-white sm:text-base lg:text-lg"
                        class="text-base" x-show="tab === 1"
                        x-transition:enter="transition delay-500 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Learn more
                    </a>
                </div>

                <div class="space-y-6" x-show="tab === 2">
                    <h3 class="text-xl font-bold leading-tight" x-show="tab === 2"
                        x-transition:enter="transition duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        BATMAN V SUPERMAN: DAWN OF JUSTICE (2016)
                    </h3>
                    <p class="text-base text-gray-600" x-show="tab === 2"
                        x-transition:enter="transition delay-100 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Rottentomatoes 40%
                    </p>
                    <p class="text-xl" x-show="tab === 2"
                        x-transition:enter="transition delay-200 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Batman (Ben Affleck) and Superman (Henry Cavill) share the screen in this Warner Bros./DC
                        Entertainment co-production penned by David S....
                    </p>
                    <p class="text-base" x-show="tab === 2"
                        x-transition:enter="transition delay-300 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Is this the right batman for me?
                    </p>
                    <a href="https://twitter.com/smilesharks"
                        class="inline-flex items-center justify-center px-8 pt-3 pb-2 mt-4 text-lg text-center text-white no-underline bg-blue-500 border-blue-500 cursor-pointer hover:bg-gray-900 rounded-3xl hover:text-white focus-within:bg-blue-500 focus-within:border-blue-500 focus-within:text-white sm:text-base lg:text-lg"
                        class="text-base" x-show="tab === 2"
                        x-transition:enter="transition delay-500 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Learn more
                    </a>
                </div>

                <div class="space-y-6" x-show="tab === 3">
                    <h3 class="text-xl font-bold leading-tight" x-show="tab === 3"
                        x-transition:enter="transition duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        BATMAN FOREVER (1995)
                    </h3>
                    <p class="text-base text-gray-600" x-show="tab === 3"
                        x-transition:enter="transition delay-100 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Rottentomatoes 12%
                    </p>
                    <p class="text-xl" x-show="tab === 3"
                        x-transition:enter="transition delay-200 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Rottentomatoes 38%
                    </p>
                    <p class="text-base" x-show="tab === 3"
                        x-transition:enter="transition delay-300 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Is this the right batman for me?
                    </p>
                    <a href="https://twitter.com/smilesharks"
                        class="inline-flex items-center justify-center px-8 pt-3 pb-2 mt-4 text-lg text-center text-white no-underline bg-blue-500 border-blue-500 cursor-pointer hover:bg-gray-900 rounded-3xl hover:text-white focus-within:bg-blue-500 focus-within:border-blue-500 focus-within:text-white sm:text-base lg:text-lg"
                        class="text-base" x-show="tab === 3"
                        x-transition:enter="transition delay-500 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Learn more
                    </a>
                </div>

                <div class="space-y-6" x-show="tab === 4">
                    <h3 class="text-xl font-bold leading-tight" x-show="tab === 4"
                        x-transition:enter="transition duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        BATMAN: THE KILLING JOKE (2016)
                    </h3>
                    <p class="text-base text-gray-600" x-show="tab === 4"
                        x-transition:enter="transition delay-100 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Rottentomatoes 39%
                    </p>
                    <p class="text-xl" x-show="tab === 4"
                        x-transition:enter="transition delay-200 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Fathom Events, Warner Bros. and DC Comics invite you to a premiere event when Batman: The
                        Killing Joke comes to...
                    </p>
                    <p class="text-base" x-show="tab === 4"
                        x-transition:enter="transition delay-300 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Is this the right batman for me?
                    </p>
                    <a href="https://twitter.com/smilesharks"
                        class="inline-flex items-center justify-center px-8 pt-3 pb-2 mt-4 text-lg text-center text-white no-underline bg-blue-500 border-blue-500 cursor-pointer hover:bg-gray-900 rounded-3xl hover:text-white focus-within:bg-blue-500 focus-within:border-blue-500 focus-within:text-white sm:text-base lg:text-lg"
                        class="text-base" x-show="tab === 4"
                        x-transition:enter="transition delay-500 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Learn more
                    </a>
                </div>

                <div class="space-y-6" x-show="tab === 5">
                    <h3 class="text-xl font-bold leading-tight" x-show="tab === 5"
                        x-transition:enter="transition duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        JUSTICE LEAGUE (2017)
                    </h3>
                    <p class="text-base text-gray-600" x-show="tab === 5"
                        x-transition:enter="transition delay-100 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Rottentomatoes 40%
                    </p>
                    <p class="text-xl" x-show="tab === 5"
                        x-transition:enter="transition delay-200 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Fueled by his restored faith in humanity and inspired by Superman's selfless act, Bruce Wayne
                        enlists the help of his...
                    </p>
                    <p class="text-base" x-show="tab === 5"
                        x-transition:enter="transition delay-300 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Is this the right batman for me?
                    </p>
                    <a href="https://twitter.com/smilesharks"
                        class="inline-flex items-center justify-center px-8 pt-3 pb-2 mt-4 text-lg text-center text-white no-underline bg-blue-500 border-blue-500 cursor-pointer hover:bg-gray-900 rounded-3xl hover:text-white focus-within:bg-blue-500 focus-within:border-blue-500 focus-within:text-white sm:text-base lg:text-lg"
                        class="text-base" x-show="tab === 5"
                        x-transition:enter="transition delay-500 duration-500 transform ease-in"
                        x-transition:enter-start="opacity-0">
                        Learn more
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
 --}}






        {{-- STAR tab componenet --}}


        {{-- <div class="bg-gray-300 flex justify-center items-center p-8 h-full h-screen">
    <div x-data="{ tab: 'foo' }" style="max-width:550px">
        <div class="flex -mx-px">
            <button x-on:click="tab = 'foo'" x-bind:class="{ 'bg-white border-white': tab === 'foo' }"
                class="bg-transparent hover:bg-gray-200 text-gray-700 text-sm md:text-base font-semibold rounded-t focus:outline-none mx-px py-px md:py-2 px-3 md:px-4"
                type="button">
                Foo
            </button>
            <button x-on:click="tab = 'bar'" x-bind:class="{ 'bg-white border-white': tab === 'bar' }"
                class="bg-transparent hover:bg-gray-200 text-gray-700 font-semibold rounded-t focus:outline-none mx-px py-2 px-4"
                type="button">
                Bar
            </button>
            <button x-on:click="tab = 'baz'" x-bind:class="{ 'bg-white border-white': tab === 'baz' }"
                class="bg-transparent hover:bg-gray-200 text-gray-700 text-sm md:text-base font-semibold rounded-t focus:outline-none mx-px py-px md:py-2 px-3 md:px-4"
                type="button">
                Baz
            </button>
            <button
                class="bg-transparent text-gray-500 text-sm md:text-base font-semibold rounded-t cursor-not-allowed mx-px py-px md:py-2 px-3 md:px-4"
                type="button" disabled>
                Disabled
            </button>
        </div>
        <ul class="bg-white text-sm rounded-b p-4">
            <li x-show="tab === 'foo'">
                Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat
                veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. <span
                    class="hidden md:block">Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse
                    consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor
                    incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing
                    reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.<span>
            </li>
            <li x-show="tab === 'bar'">
                Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna
                duis labore cillum sint adipisicing exercitation ipsum. <span class="hidden md:block">Nostrud ut anim
                    non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna
                    consequat voluptate minim amet aliquip ipsum aute laboris nisi. Labore labore veniam irure irure
                    ipsum pariatur mollit magna in cupidatat dolore magna irure esse tempor ad mollit. Dolore commodo
                    nulla minim amet ipsum officia consectetur amet ullamco voluptate nisi commodo ea sit eu.</span>
            </li>
            <li x-show="tab === 'baz'">
                Sint sit mollit irure quis est nostrud cillum consequat Lorem esse do quis dolor esse fugiat sunt do. Eu
                ex commodo veniam Lorem aliquip laborum occaecat qui Lorem esse mollit dolore anim cupidatat. <span
                    class="hidden md:block">Deserunt officia id Lorem nostrud aute id commodo elit eiusmod enim irure
                    amet eiusmod qui reprehenderit nostrud tempor. Fugiat ipsum excepteur in aliqua non et quis aliquip
                    ad irure in labore cillum elit enim. Consequat aliquip incididunt ipsum et minim laborum laborum
                    laborum et cillum labore. Deserunt adipisicing cillum id nulla minim nostrud labore eiusmod et amet.
                    Laboris consequat consequat commodo non ut non aliquip reprehenderit nulla anim occaecat. Sunt sit
                    ullamco reprehenderit irure ea ullamco Lorem aute nostrud magna.</span>
            </li>
        </ul>
    </div>
</div>

<footer class="text-gray-600 text-xs absolute bottom-0 left-0 mb-3 ml-3">
    <a class="text-gray-600 hover:text-gray-800 font-semibold underline" href="https://github.com/alpinejs/alpine"
        target="_blank">AlpineJS</a>
    by @<a class="text-gray-600 hover:text-gray-800 font-semibold underline"
        href="https://twitter.com/calebporzio">calebporzio</a>
    &amp;&amp;
    <a class="text-gray-600 hover:text-gray-800 font-semibold underline"
        href="https://github.com/tailwindcss/tailwindcss">TailwindCSS</a>
    by @<a class="text-gray-600 hover:text-gray-800 font-semibold underline"
        href="https://twitter.com/adamwathan">adamwathan</a>
</footer>

 --}}


        {{-- END tab componenet --}}
