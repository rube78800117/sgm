<div>
    {{-- Success is as dangerous as failure. --}}


    <div class="container mx-auto">



        <div class="p-6 m-6  rounded-xl shadow-2xl">


            <div class="sm:grid grid-cols-2 mb-1 gap-4">


                {{-- CABECERA DEL DOCUMENTO DE FORMULARIO DE RELEVAMIENTO --}}
                <div class="">

                    <div class="mt-2">

                        <label class=" text-sm font-medium text-gray-700">Nombre del relevamiento</label>
                        <input wire:model.defer="purchase_description" type="text" name="purchase_description"
                            placeholder="Relevamiento de materiales y repustos 2024"
                            class="form-control rounded-md shadow-sm border-gray-400 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  sm:text-sm ">

                        <x-jet-input-error for="purchase_description" />



                    </div>
                    <div class="mt-2">
                        <input wire:model.defer="descriptionCount" type="text" name="descriptionCount"
                            placeholder="Detalle o descripción"
                            class="form-control rounded-md shadow-sm border-gray-400 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  sm:text-sm ">

                        <x-jet-input-error for="descriptionCount" />


                    </div>


                </div>






                {{-- STAR  UBICACION  DEL ALMACEN PARA EL RELEVAMIENTO --}}


                <div class="">

                    <div class="mt-2">
                        <label class=" text-sm font-medium text-gray-700">Ubicacion del almacén para el
                            relevamiento</label>
                        <select wire:model="linewarehouse" placeholder="Estación" name="linewarehouse"
                            class="rounded-md shadow-sm border-gray-400 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  sm:text-sm   bg-white  focus:outline-none  ">


                            <option value="">Seleccione la Linea</option>
                            @forelse($lines ?? [] as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @empty
                                <option value="">Seleccione una ubicación</option>
                            @endforelse ()

                        </select>
                        <x-jet-input-error for="linewarehouse" />
                    </div>

                    <div class="mt-2">
                        <select wire:model="stationselect" placeholder="Estación" name="stationselect"
                            class="rounded-md shadow-sm border-gray-400 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  sm:text-sm   bg-white  focus:outline-none  ">


                            <option value="">Seleccione una Estacion</option>
                            @forelse($stations ?? [] as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @empty
                                {{-- <option value="">Seleccione una Estacion</option> --}}
                            @endforelse ()


                        </select>
                        <x-jet-input-error for="stationselect" />
                    </div>

                    <div class="mt-2">
                        <select wire:model="warehouseselect" placeholder="Almacén" name="warehouseselect"
                            class="rounded-md shadow-sm border-gray-400 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  sm:text-sm   bg-white  focus:outline-none  ">

                            <option value="">Seleccione un Almacén</option>
                            @foreach ($warehouses ?? [] as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach

                        </select>
                        <x-jet-input-error for="warehouseselect" />
                    </div>

                    {{-- <div class="mt-2 sm:w-full">

                        <x-button-enlace color="green" class="" wire:click.prevent="newCount()">
                            Iniciar Relevamietno
                        </x-button-enlace>
                    </div> --}}

                </div>

                {{-- END UBICACION  DEL ALMACEN PARA EL RELEVAMIENTO --}}




            </div>






        </div>



        <div class=" bg-gray-100 rounded-xl shadow-2xl">
            {{-- %%%%%%%%%%%%%%%%%%%% STAR LISTA DE ARTICULOS DETALLES %%%%%%%%%%%%%%%%%%%% --}}
            <div class=" ">
                <!-- component -->
                <div class="">

                    <h1 class="p-2">Detalle de articulos agregados:</h1>
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
                                        {{-- <th
                                            class="px-5 py-2 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Almacén
                                        </th> --}}


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
                                                    {{ $itemAdd['warehouse_name'] }}
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
                            <div class="bg-white py-4 px-4">
                                No hay ningún registro

                            </div>
                        @endif

                        <x-jet-input-error for="selectedArticles" />
                    </x-table-responsive>

                    {{-- info art --}}
                    {{-- BUSCADOR SEARCH-COUNT  BUSCA LOS ARTICULOS  --}}

                    <div class="col-span-12 md:col-span-7 mt-2 px-2 py-2 ">
                        @livewire('search-count')
                        <x-jet-input-error for="id_art" />     
                    </div>

                    <div class=" pb-2">
                        @livewire('info-article')
                    </div>

                

                    <div class="mx-4 ">

                        <div>
                            <div class="relative mt-1">
                                <input wire:model.defer="quantity" type="text" id="cantidad"
                                    class="pl-3 pr-10 py-2 border-2 border-gray-200 rounded-xl hover:border-gray-300 focus:outline-none focus:border-blue-500 transition-colors"
                                    placeholder="Ingrese la cantidad...">
                                <button wire:click="$set('quantity', '')"
                                    class="block w-7 h-7 text-center text-xl leading-0 absolute top-2 right-2 text-gray-400 focus:outline-none hover:text-gray-900 transition-colors">X</button>
                            </div>
                            <x-jet-input-error for="quantity" />
                        </div>

                       

                    </div>
                   
                    <div>

                        <x-button-enlace color="blue" class="mt-2 ml-6 "
                            wire:click.prevent="addArticle()">AGREGAR ITEM</x-button-enlace>
                    </div>

                    {{-- END info art --}}
                    <!--End component -->
                </div>
            </div>
            {{-- %%%%%%%%%%%%%%%%%%%% END LISTA DE ARTICULOS DETALLES %%%%%%%%%%%%%%%%%%%% --}}
            <div>
                <div class="mt-1">
                    <input wire:model.defer="observation" type="text" id="observation"
                        class="mx-4 w-full border-2 border-gray-200 rounded-xl hover:border-gray-300 focus:outline-none focus:border-blue-500 transition-colors"
                        placeholder="Observaciones">
                    {{-- <button wire:click="$set('quantity', '')"
                        class="block w-7 h-7 text-center text-xl leading-0 absolute top-2 right-2 text-gray-400 focus:outline-none hover:text-gray-900 transition-colors">X</button> --}}
                </div>
                <x-jet-input-error for="observations" />
            </div>

            <div class="flex justify-end  mr-2 mt-2 p-4">
                <button wire:click="storeOrder" type="button"
                    class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-green-500 hover:bg-green-600 hover:shadow-lg flex items-center">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                    </svg>
                    GUARDAR LISTA
                </button>
            </div>
        </div>





        @push('script')
            <script>
                Livewire.on('createCount', () => {
                    Swal.fire({
                        title: '¿Está usted seguro de enviar estos registros?',
                        text: "¡No podrá editar estos registros despues!",
                        icon: 'information',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: '¡Si, Enviar!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Livewire.emitTo('admin.create-counts', 'storeOrder');
                            Swal.fire(

                                '¡Los registros se enviarón!',
                                '',
                                'success'
                            )
                        }
                    })

                })
            </script>
        @endpush

    </div>
