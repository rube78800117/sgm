<div>



    <!--movimiento entre almacenes-->


    <div class=" col-span-5 md:col-span-3">

        <p class=" text-gray-900">MOVIMIENTO ENTRE ALMACENES</p>

    </div>
    <div class="flex justify-between">
        <div>
            <h2>Origen</h2>
            <div class="col-span-5 md:col-span-3">
                <div class="">
                    <select wire:model="linewarehouse" placeholder="Estación" name="linewarehouse"
                        class="rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  sm:text-sm   bg-white  focus:outline-none  ">


                        <option value="">Seleccione una ubicación</option>
                        @forelse($lines ?? [] as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @empty
                            <option value="">Seleccione una ubicación</option>
                        @endforelse ()

                    </select>
                    <x-jet-input-error for="linewarehouse" />
                </div>
            </div>
            <div class="col-span-5 md:col-span-3">
                <div class="col-span-5">
                    <select wire:model="stationselect" placeholder="Estación" name="stationselect"
                        class="rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  sm:text-sm   bg-white  focus:outline-none  ">


                        <option value="">Seleccione una Estacion</option>
                        @forelse($stations ?? [] as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @empty
                            {{-- <option value="">Seleccione una Estacion</option> --}}
                        @endforelse ()


                    </select>
                    <x-jet-input-error for="stationselect" />
                </div>
            </div>

            <div class="col-span-5 md:col-span-3">
                <div class="">
                    <select wire:model="warehouseselect" placeholder="Almacén" name="warehouseselect"
                        class="rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  sm:text-sm   bg-white  focus:outline-none  ">

                        <option value="">Seleccione un Almacén</option>
                        @foreach ($warehouses ?? [] as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach


                    </select>
                    <x-jet-input-error for="warehouseselect" />
                </div>

            </div>
            <div class="flex justify-between">

                <x-button-enlace wire:click="stockWarehouse()" color="blue" class="mt-4"> Mostrar stock
                    actual de almacén seleccionado</x-button-enlace>
            </div>

        </div>
        <div>
            <h2>Destino</h2>
            <div class="col-span-5 md:col-span-3">
                <div class="">
                    <select wire:model="linewarehouseDest" placeholder="Estación" name="linewarehouseDest"
                        class="rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  sm:text-sm   bg-white  focus:outline-none  ">


                        <option value="">Seleccione una ubicación</option>
                        @forelse($lines ?? [] as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @empty
                            <option value="">Seleccione una ubicación</option>
                        @endforelse ()

                    </select>
                    <x-jet-input-error for="linewarehouseDest" />
                </div>
            </div>
            <div class="col-span-5 md:col-span-3">
                <div class="col-span-5">
                    <select wire:model="stationselectDest" placeholder="Estación" name="stationselectDest"
                        class="rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  sm:text-sm   bg-white  focus:outline-none  ">


                        <option value="">Seleccione una Estacion</option>
                        @forelse($stationsDest ?? [] as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @empty
                            {{-- <option value="">Seleccione una Estacion</option> --}}
                        @endforelse ()


                    </select>
                    <x-jet-input-error for="stationselectDest" />
                </div>
            </div>

            <div class="col-span-5 md:col-span-3">
                <div class="">
                    <select wire:model="warehouseselectDest" placeholder="Almacén" name="warehouseselectDest"
                        class="rounded-md shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  sm:text-sm   bg-white  focus:outline-none  ">

                        <option value="">Seleccione un Almacén</option>
                        @foreach ($warehousesDest ?? [] as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach


                    </select>
                    <x-jet-input-error for="warehouseselectDest" />
                </div>

                <button wire:loading.attr="disabled" wire:targuet="" wire:click="create_mov_parcial" type="button"
                    class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-red-500 hover:bg-red-600 hover:shadow-lg">Enviar
                    movimiento entre almacenes</button>
            </div>

        </div>


    </div>


    <x-table-responsive>



        @if ($data->count())

            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <!-- Columna visible en todas las pantallas -->
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Nro
                        </th>
                        <!-- Columna oculta en pantallas pequeñas -->
                        <th
                            class="hidden sm:table-cell  py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            ID's
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Nombre de articulo
                        </th>


                        <!-- Columna oculta en pantallas pequeñas -->
                        <th
                            class="hidden sm:table-cell px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Cantidad
                        </th>

                        {{-- <!-- Columna oculta en pantallas pequeñas -->
                    <th
                        class="hidden sm:table-cell px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Stock Mínimo
                    </th>
                    <!-- Columna oculta en pantallas pequeñas -->
                    <th
                        class="hidden sm:table-cell px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Medida Por
                    </th> --}}
                    </tr>
                </thead>
                <tbody>







                    @foreach ($dataArray as $key => $itemAdd)
                        {{-- {{dd($itemAdd) }} --}}

                        <tr class="text-left " wire:key="{{ $key }}">


                            <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $key + 1 }}</p>

                            </td>


                            <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">


                                <p class="text-gray-900  flex justify-start ">



                                    @if (!empty($itemAdd['article']['id_dopp']))
                                        <p class=" text-gray-900 mr-2"></p>
                                        <ul class="flex">
                                            <li class=" text-gray-800 mr-2"><i class="text-blue-500 mr-2 fas fa-key">
                                                </i>
                                            </li>
                                            <li class=" text-gray-900 font-bold  ">{{ $itemAdd['article']['id_dopp'] }}
                                            </li>
                                        </ul>
                                    @endif


                                    @if (!empty($itemAdd['article']['id_eetc']))
                                        <p class=" text-gray-900 mr-2"></p>

                                        <ul class="flex">
                                            <li class=" text-gray-800 mr-2">
                                                <i class="text-yellow-400 mr-2 fas fa-key"></i>
                                            </li>
                                            <li class=" text-gray-900 font-bold "> {{ $itemAdd['article']['id_eetc'] }}
                                            </li>
                                        </ul>
                                    @endif



                                    @if (!empty($itemAdd['article']['id_zona']))
                                        <p class=" text-gray-900 mr-2"> </p>
                                        <ul class="flex">
                                            <li class=" text-gray-800 mr-2"><i
                                                    class="text-gray-400 mr-2 fas fa-key"></i>
                                            </li>
                                            <li class=" text-gray-900 font-bold ">{{ $itemAdd['article']['id_zona'] }}
                                            </li>
                                        </ul>
                                    @endif


                                </p>










                            </td>





                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-12 h-12">
                                        @if (isset($itemAdd['article']['image']['url']) && $itemAdd['article']['image']['url'] != null)
                                            <img class="w-full h-full rounded-full object-cover"
                                                src="{{ asset('storage/' . $itemAdd['article']['image']['url']) }}"
                                                alt="" />
                                        @else
                                            <img class="w-full h-full rounded-full object-cover"
                                                src="{{ asset('storage/articles/def.jpg') }}" alt="" />
                                        @endif
                                    </div>
                                    <div class="ml-3">
                                        @if (isset($itemAdd['article']['name']))
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $itemAdd['article']['name'] }}</p>
                                        @else
                                            <p class="text-gray-900 whitespace-no-wrap">Sin imagen</p>
                                        @endif
                                    </div>
                                </div>
                            </td>









                            {{-- <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{$itemAdd['id'] }}
                            </p>
                        </td> --}}


                            <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $itemAdd['quantity'] }}
                                </p>
                            </td>





                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                {{-- <a href="{{route('admin.articles.edit', $article)}}" class=""> --}}

                                <div wire:click="removeIttem({{ $key }})"
                                    class=" text-red-400 hover:text-red-600 cursor-pointer">
                                    <p class="text-xl flex justify-center">
                                        <i class="fas fa-trash-alt"></i>
                                    </p>
                                    <p class=" text-red-400 hover:text-red-600 text-md flex justify-center">
                                        Borrar
                                    </p>
                                </div>


                            </td>





                        </tr>
                    @endforeach




















                    {{-- @foreach ($data as $key => $item)
                        <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{ $key + 1 }}</p>

                        </td>
                        <td class="px-5 w-40 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">



                                @if (!empty($item->article->id_dopp))
                                    <p class=" text-gray-900 mr-2"><i class="text-blue-500 mr-2 fas fa-key"></i>
                                        {{ $item->article->id_dopp }}</p>
                                @endif
                                @if (!empty($item->article->id_eetc))
                                    <p class=" text-gray-900 mr-2"><i class="text-yellow-400 mr-2 fas fa-key"></i>
                                        {{ $item->article->id_eetc }}</p>
                                @endif
                                @if (!empty($item->article->id_zona))
                                    <p class=" text-gray-900 mr-2"><i class="text-gray-400 mr-2 fas fa-key"></i>
                                        {{ $item->article->id_zona }}</p>
                                @endif


                            </p>
                        </td>

                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-12 h-12">
                                    @if ($item->article->image != null)
                                        <img class="w-full h-full rounded-full object-cover"
                                            src="{{ asset('storage/' . $item->article->image->url) }}"
                                            alt="" />
                                    @else
                                        <img class="w-full h-full rounded-full object-cover"
                                            src="{{ asset('storage/' . 'articles/def.jpg') }}" alt="" />
                                    @endif
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $item->article->name }}
                                    </p>
                                </div>
                            </div>
                        </td>






                        <td class="hidden sm:table-cell px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{ $item->warehouse->station->line->acronym }} {{ $item->warehouse->station->name }} -
                                {{ $item->warehouse->name }}
                            </p>
                        </td>






                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{ $item->quantity }}
                            </p>
                        </td>





                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        

                            <div wire:click="removeIttem({{ $key }})"
                                class=" text-red-400 hover:text-red-600 cursor-pointer">
                                <p class="text-xl flex justify-center">
                                    <i class="fas fa-trash-alt"></i>
                                </p>
                                <p class=" text-red-400 hover:text-red-600 text-md flex justify-center">
                                    Borrar
                                </p>
                            </div>


                        </td>








                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
        @else
            <div class="px-6 py-4">
                No hay ningún registro coincidente
            </div>
        @endif

        <!-- Paginación de la tabla -->
        {{-- @if ($articles->hasPages())
        <div class="px-6 py-4">
            {{$articles->links()}}
        </div>
        @endif --}}
    </x-table-responsive>





</div>
