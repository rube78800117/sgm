<x-app-layout>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">



        <div class="">


            <div class="my-4">
                <a class="flex items-baseline mt-3 text-blue-600 hover:text-blue-900 focus:text-blue-900"
                    href="{{ url('/orders') }}">
                    <span class="text-xs ml-1"> <i class="text-l fas fa-chevron-circle-left"> </i>
                        &nbsp </span>
                    <span> Volver a la pagina anterior</span>
    
                </a>
            </div>
            {{-- <div class="relative">
                <div
                    class="{{($order->status >= 1 && $order->status != 6)?'bg-blue-400':'bg-gray-400' }} rounded-full h-12 w-12  flex items-center justify-center">
                    <i class="fas fa-check text-white"></i>

                </div>
                <div class="absolute -left-1 mt-0.5">
                    <p class="text-gray-700"> Pendiente</p>
                </div>

            </div>


            <div class="{{($order->status >= 2 && $order->status != 6)?'bg-blue-400':'bg-gray-400' }} h-1 flex-1 mx-2">
            </div> --}}

           <div class="">
                {{-- <div class="relative">
                    <div
                        class="{{($order->status >= 1 && $order->status != 6)?'bg-blue-400':'bg-gray-400' }} rounded-full h-12 w-12  flex items-center justify-center">
                        <i class="fas fa-check text-white"></i>

                    </div>
                    <div class="absolute -left-1 mt-0.5">
                        <p class="text-gray-700"> Pendiente</p>
                    </div>

                </div>


                <div
                    class="{{($order->status >= 2 && $order->status != 6)?'bg-blue-400':'bg-gray-400' }} h-1 flex-1 mx-2">
                </div> --}}

                {{-- Seccion approved --}}
                <div
                    class="{{($order->status >= 5 && $order->status <= 6)?'hidden':' bg-white rounded-lg shadow-lg px-12 py-8 mb-6 flex  items-center' }}">


                    <div class=" relative">
                        <div
                            class="{{($order->status >= 2 && $order->status <= 4)?'bg-blue-400':'bg-gray-400' }} rounded-full h-12 w-12  flex items-center justify-center">
                            <i class="fas fa-check text-white"></i>
                            <div class="absolute -bottom-6 mt-0.5">
                                <p class="text-gray-700"> Enviado</p>
                            </div>

                        </div>

                    </div>




                    <div
                        class="{{($order->status >= 3 && $order->status <= 4)?'bg-blue-400':'bg-gray-400' }} h-1 flex-1 mx-2">
                    </div>




                    <div class=" relative">
                        <div
                            class="{{($order->status >= 3 && $order->status <= 4)?'bg-blue-400':'bg-gray-400' }} rounded-full h-12 w-12  flex items-center justify-center">
                            <i class="fas fa-check text-white"></i>
                            <div class="absolute -bottom-6 mt-0.5">
                                <p class="text-gray-700"> Revision</p>
                            </div>
                        </div>


                    </div>




                    <div
                        class="{{($order->status >= 4 && $order->status <= 4)?'bg-blue-400':'bg-gray-400' }} h-1 flex-1 mx-2">
                    </div>



                    <div class=" relative">
                        <div
                            class="{{($order->status >= 4 && $order->status <= 4)?'bg-green-400':'bg-gray-400' }} rounded-full h-12 w-12  flex items-center justify-center">
                            <i class="fas fa-check text-white"></i>
                            <div class="absolute -bottom-6 mt-0.5">
                                <p class="text-gray-700"> Aprobado</p>
                            </div>
                        </div>


                    </div>


                </div>


                {{-- {{seccion cancell}} --}}

                <div class="{{($order->status >= 4 && $order->status <= 4)?'hidden':'' }} ">


                    <div
                        class="{{($order->status >= 5 && $order->status != 6)?'bg-white':'bg-whitemx-2' }} h-1 flex-1  ">
                    </div>

                    <div class="relative">
                        <div
                            class="{{($order->status >= 5 && $order->status != 6)?'bg-red-400':'bg-gray-400' }} rounded-full h-12 w-12  flex items-center justify-center hidden">
                            {{-- <i class="fas fa-check text-white"></i> --}}

                            <i class=" text-2xl fas fa-times text-white"></i>


                            <div class="absolute -left-1.5 mt-0.5">
                                <p class="text-gray-700 "> Rechazado</p>
                            </div>

                        </div>

                    </div>



                    <div
                        class="{{($order->status >= 6 && $order->status != 5)?'bg-white':'bg-white  h-1 flex-1 mx-2' }}">
                    </div>

                    <div class="relative">
                        <div
                            class="{{($order->status >= 6 && $order->status != 5)?'bg-red-400':'hidden bg-gray-400' }} rounded-full h-12 w-12  flex items-center justify-center">
                            {{-- <i class="fas fa-check text-white"></i> --}}

                            <i class=" text-2xl fas fa-times text-white"></i>
                            <div class="absolute -bottom-6 -left-1.5 mt-0.5">
                                <p class="text-gray-700"> Anulado</p>
                            </div>
                        </div>


                    </div>


                </div>



        </div>
        {{-- muestra lista detalle de la solicitud --}}
    </div>


    <div class="items-center justify-items-center   py-8">

        <div class="bg-white rounded-lg shadow-lg px-6 py-4 mb-6 ">
            <p class="text-gray-700 uppercase"><span class="font-semibold">NUMERO DE SOLICITUD</span>-
                {{$order->id}}</p>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6 ">
            <div class="grid grid-col-2 gap-6 text-gray-700">
                <div>
                    <p class="text-gray-700  font-semibold"><i class="text-yellow-600 fas fa-info-circle"></i>&nbsp Instrucciones para el control adecuado de Stock en almacenes.</p>
                    <p class="text-justify text-gray-600"> <spam class="text-blue-700 font-semibold">Enviado: </spam> La solicitud ya fue enviada al administrador, las cantidades disponibles ya fueron actualizadas, por lo tanto usted puede disponer del o los articulos estrictamente del almacen que lo solicito. Si esta solicitud no es correcta puede comunicarse con el administrador para su anulacion y se restablecerán las cantidades en Stock solicitadas a su respectivo almacen.</p>
                
                               <p class="text-justify text-gray-600  "> <spam class="text-blue-700 font-semibold">Revision: </spam> El administrador puede anular o aprobar  esta solicitud en coordinacion con el solicitante, esto para mantener un control adecuado de stock en los diferentes almacenes. Tome en cuenta que los administradores pueden aprobar esta solicitud rapidamente cuando se trata de articulos comunes, por tanto usted debe comunicarse rapidamente con el para anularla si fuera el caso de que la solicitud no sea correcta</p>
                </div>

            </div>
        </div>


        {{-- tabla de resumen de articulos ya solicitados --}}
        <div class="bg-white rounded-lg shadow-lg px-6 mt-6 py-4 mb-2 ">
            <p class="text-gray-700 uppercase"><span class="font-semibold">RESUMEN</span> </p>
        </div>

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
                    {{-- <th
                        class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                    </th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr
                    class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0 border-separate border border-gray-400">
                    <td
                        class="px-10 w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                        <span
                            class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase"></span>

                        <div class="flex justify-start items-center">










                           
                                    @if (ImageO($item->options->id_art) != null)
                                    <img class="w-20 h-20 rounded-full object-cover"
                                    src="{{ asset('/storage/'.ImageO($item->options->id_art)->url) }} "
                                    alt="" />
                                    @else
                                    <img class="w-20 h-20 rounded-full object-cover"
                                    src="{{ asset('/storage/'.'articles/def.jpg') }} "
                                    
                                    alt="" />
                                    @endif
                     
                            <div class="font-bold text-sm text-gray-600">
                                <p class="flex justify-start items-center"> {{ $item->name }}</p>
                                <p class="flex justify-start items-center"> {{ $item->options->id_dopp }} </p>
                                <p class="flex justify-start items-center"> {{ $item->options->id_eetc}} </p>

                            </div>
                        </div>
                    </td>


                    <td
                        class="bg-{{ $item->options->line_color}} text-sm px-10 w-full lg:w-auto p-3 text-gray-700 text-center border border-b block lg:table-cell relative lg:static">

                        <div class="font-bold ">

                            <p class="flex justify-center items-center text-xs"> {{ $item->options->warehouse }}</p>
                        </div>

                    </td>


                    <td
                        class="w-full lg:w-auto pl-20 p-3 text-gray-800  border border-b text-center block lg:table-cell relative lg:static">
                        <div class="font-bold ">

                            <p class="flex items-center text-xs"> {{ $item->qty }}</p>
                        </div>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>




    </div>




















</x-app-layout>