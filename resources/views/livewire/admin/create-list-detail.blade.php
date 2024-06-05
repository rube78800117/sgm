<div>


    {!! Toastr::message() !!}

    <div class="container mx-auto">
        {{ Session::get('key') }}

        <div class="grid sm:grid-cols-12 mb-1 gap-4 grid-cols-4">
            {{-- nivel 1 --}}
            <div class="col-span-12 sm:col-span-5 md:col-span-5 pb-4 mt-4 bg-white rounded-xl shadow-2xl">
                {{-- <div class="col-span-1 flex flex-col  w-full mb-1">
                    <label for="first-name" class="block text-sm font-medium text-gray-700">Proveedor
                    </label>
                </div> --}}


                {{-- nivel 1 STAR SECCION DE INPUTS datos PROVEEDOR --}}
                <div class="px-2 py-4  sm:p-2 ">



                    {{-- %%%%%%%%%%%%%%%%% STAR SECCION SELECTED PROVEEDOR %%%%%%%%%%%%%%%%%%%%%% --}}
                    <div class="relative mt-4 mb-2" x-data="{ isVisible: false, open: true }" @click.away="isVisible = false">
                        <div x-show="open">
                            <input wire:model="searchText" @focus="isVisible = true" type="text" name="proveedor_id"
                                class=" rounded-md shadow-sm border-gray-400 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full mb-1"
                                placeholder="Proveedor...">
                            <x-jet-input-error for="proveedor_id" />
                        </div>






                        {{-- ************ STAR CARGA EL SELECT CON LOS ITEMS DE PROVEEDORES**************** --}}
                        <x-card x-show="isVisible" style="display: none"
                            class="absolute w-full max-h-40 overflow-scroll border-b border-gray-400 overscroll-contain">
                            @foreach ($items as $item)
                                <div class=" text-sm w-full bg-gray-100 p-1 mb-1 rounded-md hover:bg-gray-200 cursor-pointer pl-2 font-semibold"
                                    {{-- **LA UNCION CHOOOSE CARGA EL VALOR SELECCIONODO A UNA MATRIS: selectedIds[]** --}}
                                    wire:click="choose({{ $item->id }}, '{{ $item->name }}')"
                                    @click="isVisible = false, open = false">
                                    {{ $item->name }}

                                </div>
                            @endforeach
                        </x-card>
                        {{-- ************ END CARGA EL SELECT CON LOS ITEMS DE PROVEEDORES**************** --}}

                        {{-- ********* STAR Botones emerjentes despues de seleccionar un item --}}
                        <div class="flex flex-wrap flex-1 gap-1 ">
                            <span class="">{{ $label }} </span>
                            @foreach ($selectedItems as $selected)
                                <div class="grid grid-cols-1">
                                    <div>
                                        <span @click=" open = true"
                                            class="transition-all bg-green-400 hover:bg-red-400 rounded p-1 text-sm text-white font-bold cursor-pointer"
                                            wire:click="remove({{ $selected->id }})">
                                            {{ $selected->name_company }}
                                        </span>
                                    </div>
                                    {{-- <input name="{{$name}}[]" value="{{$selected->name}}"> --}}
                                    <div>
                                        <span>
                                            <p><span class="font-bold">Proveedor: </span><span class=" ">
                                                    {{ $selected->name }} </span></p>
                                            <p> <span class="font-bold">Teléfono: </span> <span>{{ $selected->phone }} -
                                                </span> <span class="font-bold"> Dirección: </span> <span>
                                                    {{ $selected->address }} </span></p>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{-- END*********Botones emerjentes despues de seleccionar un item --}}








                    </div>

                    {{-- %%%%%%%%%%%%%%%%% end SECCION SELECTED PROVEEDOR %%%%%%%%%%%%%%%%%%%%%% --}}




                </div>
                {{-- nivel 1 END SECCION DE INPUTS datos PROVEEDOR --}}



                {{-- nivel 1 STAR SECCION DE INPUTS datos GENERALES --}}
                <div class=" col-span-12 sm:col-span-5 row-span-1  gap-4">

                    {{-- <div class="col-span-8 w-full mb-1">
                        <label for="first-name" class=" text-sm font-medium text-gray-700">Formulario
                        </label>
                    </div> --}}

                    <div class="col-span-5 bg-white">


                        <div class="   mt-4 bg-white rounded-xl shadow-xl">
                            <div class="   mb-1 gap-4">




                                <div class=" form-group px-2">
                                    <label class=" text-sm font-medium text-gray-700">Nombre o descripcion del
                                        ingreso</label>
                                    <input wire:model.defer="purchase_description" type="text"
                                        name="purchase_description" placeholder="Aclaración o descripcion del ingreso"
                                        class="form-control rounded-md shadow-sm border-gray-400 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  sm:text-sm ">
                                    <x-jet-input-error for="purchase_description" />
                                </div>




                                {{-- <button wire:click="storeOrder"
                                    class="mr-4 inline-flex justify-center w-24 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md ring ring-gray-500 ring-offset-4  text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2  focus:ring-indigo-500">

                                    crear ingreso
                                </button> --}}




                                {{-- <div class="px-4 py-3 bg-white text-right sm:px-6">

                                    <button type="submit"
                                        class="inline-flex justify-center w-24 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md ring  ring-indigo-500 ring-offset-4 bg-indigo-600 hover:bg-indigo-700 text-whitefocus:outline-none focus:ring-2  focus:ring-indigo-500">
                                        Save
                                    </button>
                                </div> --}}
                            </div>
                        </div>










                    </div>
                </div>
                {{-- nivel 1 END SECCION DE INPUTS datos GENERALES --}}
            </div>
            {{-- END nivel 1 --}}



            <div class="col-span-12 sm:col-span-7 md:col-span-7  p-4 mt-4 bg-white rounded-xl shadow-2xl">
                <span class=" sm:block py-8">Datos documentacion: </span>

                <div class="grid grid-cols-2 sm:grid-cols-4 mb-1 gap-4">


                    <div class="form-group ">
                        <x-jet-label class="" value="Tipo de documento" />
                        <select wire:model="voucher_select" placeholder="Tipo Documento" name="voucher_select"
                            class="form-control rounded-md shadow-sm border-gray-400 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  mb-1 mt-1 sm:text-sm   bg-white  focus:outline-none  ">
                            <option value="">Seleccione tipo de Documento</option>
                            @foreach ($types_voucher as $voucher)
                                <option value="{{ $voucher->id }}">{{ $voucher->name }}</option>
                            @endforeach

                        </select>
                        <x-jet-input-error for="voucher_select" />
                    </div>

                    <div class="form-group ">
                        <x-jet-label class="sm:block" value="Nro. o codigo documento" />
                        <input wire:model.defer="cod_document" type="text" name="cod_document"
                            placeholder="Numero o codigo de Docuemento" autocomplete="given-name"
                            class="form-control rounded-md shadow-sm border-gray-400 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full mb-1 mt-1 sm:text-sm ">
                        <x-jet-input-error for="cod_document" />

                    </div>


                    <div class=" form-group col-span-2 sm:col-span-1">
                        <label for="type" class=" text-sm font-medium text-gray-700">Ingreso a Linea:</label>
                        <select wire:model="lineselect" placeholder="Aclaración o descripcion del ingreso"
                            autocomplete="type" name="lineselect"
                            class="form-control rounded-md shadow-sm border-gray-400 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full mb-1     sm:text-sm     py-2 px-3 border 0 bg-white  focus:outline-none  ">
                            <option value="">Seleccione una Linea</option>
                            @foreach ($lines as $line)
                                <option value="{{ $line->id }}">{{ $line->name }}</option>
                            @endforeach

                        </select>
                        <x-jet-input-error for="lineselect" />
                    </div>





                    <div class="col-span-2 md:col-span-2">
                        <div>
                            <span class="sm:block">Datos del almacen (Ubicación):</span>
                            <select wire:model="linewarehouse" placeholder="Estación" name="linewarehouse" onchange="resetStationSelect()"
                                class="rounded-md shadow-sm border-gray-400 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full sm:text-sm bg-white focus:outline-none">
                                <option value="">Seleccione una ubicación</option>
                                @forelse($lines ?? [] as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @empty
                                @endforelse
                            </select>
                            <x-jet-input-error for="linewarehouse" />
                        </div>
                    </div>
                    
                    <div class="col-span-2 sm:pt-6 md:col-span-2">
                        <div>
                            <select wire:model="stationselect" placeholder="Estación" name="stationselect" id="stationselect"
                                class="rounded-md shadow-sm border-gray-400 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full sm:text-sm bg-white focus:outline-none">
                                <option value="">Seleccione una Estacion</option>
                                @forelse($stations ?? [] as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @empty
                                    <option value="">Seleccione una Estacion</option>
                                @endforelse
                            </select>
                            <x-jet-input-error for="stationselect" />
                        </div>
                    </div>
                    
                    <div class="col-span-2 md:col-span-2">
                        <div>
                            <select wire:model="warehouseselect" placeholder="Almacén" name="warehouseselect" id="warehouseselect"
                                class="rounded-md shadow-sm border-gray-400 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full sm:text-sm bg-white focus:outline-none">
                                <option value="">Seleccione un almacén</option>
                                @forelse($warehouses ?? [] as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @empty
                                    <option value="">Seleccione un almacén</option>
                                @endforelse
                            </select>
                            <x-jet-input-error for="warehouseselect" />
                        </div>
                    </div>
                    
                    <div class="col-span-2 md:col-span-2">
                        <div>
                            <select wire:model="sectorselect" placeholder="Estante" name="sectorselect" id="sectorselect"
                                class="rounded-md shadow-sm border-gray-400 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full sm:text-sm bg-white focus:outline-none">
                                <option value="">Seleccione un estante</option>
                                @forelse($sectors ?? [] as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @empty
                                    <option value="">Seleccione un estante</option>
                                @endforelse
                            </select>
                            <x-jet-input-error for="sectorselect" />
                        </div>
                    </div>
                    
                    <div class="col-span-2 md:col-span-2">
                        <div>
                            <select wire:model="locationselect" placeholder="Localización" name="locationselect" id="locationselect"
                                class="rounded-md shadow-sm border-gray-400 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full sm:text-sm bg-white focus:outline-none">
                                <option value="">Seleccione una localización</option>
                                @forelse($locations ?? [] as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @empty
                                    <option value="">Seleccione una localización</option>
                                @endforelse
                            </select>
                            <x-jet-input-error for="locationselect" />
                        </div>
                    </div>
                    

                </div>


            </div>


        </div>




        {{-- %%%%%%%%%%%%%%%%%%%% STAR LISTA DE ARTICULOS DETALLES %%%%%%%%%%%%%%%%%%%% --}}
        <div class=" ">
            <!-- component -->
            <div class="py-4">
                @livewire('admin.import-survey')

                <hr>
                Detalle de articulos agregados:



                <x-table-responsive>

                    @if ($selectedArticles)
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        #
                                    </th>
                                    <th
                                        class="px-5 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        ID´s
                                    </th>
                                    <th
                                        class="px-5 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Nombre
                                    </th>

                                    <th
                                        class="px-5 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Unidad
                                    </th>
                                    <th
                                        class="px-5 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Cantidad
                                    </th>
                                    <th
                                        class="px-5 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Almacén
                                    </th>


                                    <th
                                        class="px-5 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Acciones
                                    </th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($selectedArticles as $key => $itemAdd)
                                    <tr class="text-left " wire:key="{{ $key }}">


                                        <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $key + 1 }}</p>
                                            {{--
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$itemAdd->id_eetc}}
                                    </p>
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$itemAdd->id_zona}}
                                    </p> --}}
                                        </td>


                                        <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">


                                            <p class="text-gray-900  flex justify-start ">



                                                @if (!empty($itemAdd['article_id_dopp']))
                                                    <p class=" text-gray-900 mr-2"></p>
                                                    <ul class="flex">
                                                        <li class=" text-gray-800 mr-2"><i
                                                                class="text-blue-500 mr-2 fas fa-key"> </i>
                                                            Dopp:</li>
                                                        <li class=" text-gray-900 font-bold  ">
                                                            {{ $itemAdd['article_id_dopp'] }}</li>
                                                    </ul>
                                                @endif


                                                @if (!empty($itemAdd['article_id_eetc']))
                                                    <p class=" text-gray-900 mr-2"></p>

                                                    <ul class="flex">
                                                        <li class=" text-gray-800 mr-2">
                                                            <i class="text-yellow-400 mr-2 fas fa-key"></i> MiT:
                                                        </li>
                                                        <li class=" text-gray-900 font-bold ">
                                                            {{ $itemAdd['article_id_eetc'] }}</li>
                                                    </ul>
                                                @endif



                                                @if (!empty($itemAdd['article_id_zona']))
                                                    <p class=" text-gray-900 mr-2"> </p>
                                                    <ul class="flex">
                                                        <li class=" text-gray-800 mr-2"><i
                                                                class="text-gray-400 mr-2 fas fa-key"></i>
                                                            Zona:</li>
                                                        <li class=" text-gray-900 font-bold ">
                                                            {{ $itemAdd['article_id_zona'] }}</li>
                                                    </ul>
                                                @endif


                                            </p>










                                        </td>




                                        <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $itemAdd['article_name'] }}
                                            </p>
                                        </td>
                                        <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $itemAdd['unit_name'] }}
                                            </p>
                                        </td>


                                        <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $itemAdd['quantity'] }}
                                            </p>
                                        </td>


                                        {{-- <td class="px-5 py-1 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$itemAdd['warehouse_name'] }}
                                    </p>
                                </td> --}}


                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            {{-- <a href="{{route('admin.articles.edit', $article)}}" class=""> --}}

                                            <div wire:click="removeIttem({{ $key }})"
                                                class=" text-red-400 hover:text-red-600 cursor-pointer">
                                                <p class="text-xl flex justify-center">
                                                    <i class="fas fa-trash-alt"></i>
                                                </p>
                                                <p
                                                    class=" text-red-400 hover:text-red-600 text-md flex justify-center">
                                                    Borrar
                                                </p>
                                            </div>


                                        </td>





                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    @else
                        <div class="px-6 py-4">
                            No hay ningún registro

                        </div>
                    @endif



                    {{-- @if ($itemAdds->hasPages())
                    <div class="px-6 py-4">
                        {{$itemAdds->links()}}

                    </div>
                    @endif --}}

                </x-table-responsive>


                {{-- info art --}}
                {{-- BUSCADOR SEARCH-COUNT  BUSCA LOS ARTICULOS  --}}
                <div class="col-span-12 md:col-span-7 mt-2 py-2 ">
                    @livewire('search-count')
                    <x-jet-input-error for="id_art" />
                </div>


                <div class="flex justify-items-stretch mt-6 ">

                    <div>

                        <div class="pt-2 flex items-center">

                            <div class="relative flex-grow">
                                <x-jet-label class="px-2 text-xl" value="Cantidad:" />
                                <x-jet-input
                                    class="px-4 py-2 border border-green-300 rounded-lg focus:outline-none focus:border-green-400"
                                    type="text" wire:model.defer="quantity"
                                    placeholder="Ingrese la cantidad..." />

                                <button wire:click="$set('quantity', '')"
                                    class="absolute inset-y-0 right-0 px-3 py-2 bg-gray-200 text-gray-600 hover:text-green-800 focus:outline-none rounded-r-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M5.293 5.293a1 1 0 011.414 0L10 8.586l3.293-3.293a1 1 0 111.414 1.414L11.414 10l3.293 3.293a1 1 0 01-1.414 1.414L10 11.414l-3.293 3.293a1 1 0 01-1.414-1.414L8.586 10 5.293 6.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <x-jet-input-error for="quantity" />

                    </div>







                    <div class="col-span-12 md:col-span-2 m-6">
                        <x-button-enlace color="blue" class="px-2 flex w-full justify-center items-center "
                            wire:click.prevent="addArticle()">AGREGRAR ITEM (Temporal)

                        </x-button-enlace>









                    </div>
                </div>
                <div class="col-span-12 md:col-span-5 pb-2">
                    @livewire('info-article')

                </div>






                {{-- END info art --}}
                <!--End component -->
            </div>
        </div>
        {{-- %%%%%%%%%%%%%%%%%%%% END LISTA DE ARTICULOS DETALLES %%%%%%%%%%%%%%%%%%%% --}}


        <div class="flex justify-end inline-block mr-2 m-2">
            <button wire:click="storeOrder" type="button"
                class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-green-500 hover:bg-green-600 hover:shadow-lg flex items-center">
                <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                </svg>
                GUARDAR LISTA Y ACTUALIZAR STOCK
            </button>
        </div>
    </div>
</div>













<div>


    @push('script')
    @push('script')
    <script>
        function resetStationSelect() {
            var selectIds = ['stationselect', 'warehouseselect', 'sectorselect', 'locationselect'];
            selectIds.forEach(function(id) {
                var selectElement = document.getElementById(id);
                if (selectElement) {
                    selectElement.value = ""; // Restablece el valor del select a vacío
                }
            });
        }
    </script>
@endpush
    @endpush




</div>
