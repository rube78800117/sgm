<div>




    <div class="container mx-auto">


        <div class="grid sm:grid-cols-12 mb-1 gap-4 grid-cols-4">
            {{-- nivel 1 --}}
            <div class=" form-control col-span-12 sm:col-span-5 md:col-span-5 pb-4 mt-4  rounded-xl shadow-2xl">


                {{-- nivel 1 STAR SECCION DE INPUTS datos PROVEEDOR --}}
                <div class="  px-2 py-4  sm:p-2 ">



                    {{-- %%%%%%%%%%%%%%%%% STAR SECCION SELECTED PROVEEDOR %%%%%%%%%%%%%%%%%%%%%% --}}
                    <div class="form-control relative mt-4 mb-2" x-data="{ isVisible: false, open: true }" @click.away="isVisible = false">
                        <div x-show="open" class=" form-control border-0">



                            <div class="  card-body">
                                <div class=" form-floating mb-2">
                                    <input wire:model="searchText" @focus="isVisible = true" type="text"
                                        class="  form-control rounded-md " id="floatingcod_document"
                                        placeholder="Codigo Documento" name="proveedor_id"
                                        aria-describedby="floatingcod_documentHelp" />
                                    <label for="floatingcod_document">Proveedor...</label>
                                    <span class="form-floating-focused"></span>
                                    <x-jet-input-error for="searchText" />

                                </div>



                            </div>




                            {{-- <input wire:model="searchText" @focus="isVisible = true" type="text" name="proveedor_id"
                                class=" rounded-md shadow-sm border-gray-400 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full mb-1"
                                placeholder="Proveedor...">
                            <x-jet-input-error for="proveedor_id" /> --}}
                        </div>






                        {{-- ************ STAR CARGA EL SELECT CON LOS ITEMS DE PROVEEDORES**************** --}}
                        <x-card x-show="isVisible" style="display: none"
                            class="form-control z-20 absolute w-full max-h-40 overflow-scroll   ">
                            <div class="form-control">
                                @foreach ($items as $item)
                                    <div class="form-control  text-sm w-full  p-1 mb-1 rounded-md  cursor-pointer pl-2 font-semibold"
                                        {{-- **LA UNCION CHOOOSE CARGA EL VALOR SELECCIONODO A UNA MATRIS: selectedIds[]** --}}
                                        wire:click="choose({{ $item->id }}, '{{ $item->name }}')"
                                        @click="isVisible = false, open = false">
                                        {{ $item->name }}

                                    </div>
                                @endforeach
                            </div>
                        </x-card>
                        {{-- ************ END CARGA EL SELECT CON LOS ITEMS DE PROVEEDORES**************** --}}

                        {{-- ********* STAR Botones emerjentes despues de seleccionar un item --}}
                        <div class=" flex flex-wrap flex-1 gap-1 ">
                            <span class="">{{ $label }} </span>
                            @foreach ($selectedItems as $selected)
                                <div class="grid grid-cols-1">
                                    <div>
                                        <span @click=" open = true"
                                            class="transition-all bg-green-400 hover:bg-red-400 rounded p-1 text-sm font-bold cursor-pointer"
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



                    <div class="col-span-5  z-10">


                        <div class="   mt-2  rounded-xl shadow-xl">
                            <div class="   mb-1 gap-4">




                                <div class=" form-group px-2">



                                    <div class="card-body">
                                        <div class="form-floating mb-2">
                                            <input wire:model.defer="purchase_description" type="text"
                                                class="form-control rounded-md " name="purchase_description"
                                                id="floatingcod_document"
                                                placeholder="Aclaración o descripcion del ingreso"
                                                aria-describedby="floatingcod_documentHelp" />
                                            <label for="floatingcod_document">Aclaración o descripcion del
                                                ingreso"</label>
                                            <span class="form-floating-focused"></span>
                                            <x-jet-input-error for="purchase_description" />

                                        </div>

                                    </div>

                                    {{--             
                                    <input wire:model.defer="purchase_description" type="text"
                                        name="purchase_description" placeholder="Aclaración o descripcion del ingreso"
                                        class="form-control rounded-md shadow-sm border-gray-400 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 w-full  sm:text-sm ">
                                    <x-jet-input-error for="purchase_description" /> --}}
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



            <div class="form-control col-span-12 sm:col-span-7 md:col-span-7   mt-4  rounded-xl shadow-2xl">
                <span class=" sm:block py-2">Datos documentacion: </span>

                <div class="grid grid-cols-2 sm:grid-cols-4 mb-1 gap-2">

                    <div class="col-span-2 sm:col-span-1 ">
                        <div class="form-floating mb-2">
                            <select wire:model="voucher_select" placeholder="Tipo Documento" name="voucher_select"
                                class="form-select" id="voucher_select" aria-label="Floating label select example">
                                @foreach ($types_voucher as $voucher)
                                    <option value="{{ $voucher->id }}">{{ $voucher->name }}</option>
                                @endforeach


                            </select>
                            <label for="floatingSelectFilled">Tipo de documento</label>
                            <span class="form-floating-focused"></span>
                            <x-jet-input-error for="voucher_select" />
                        </div>






                        <div class="card-body">
                            <div class="form-floating mb-2">
                                <input wire:model.defer="cod_document" type="text" class="form-control"
                                    id="floatingcod_document" placeholder="Codigo Documento"
                                    aria-describedby="floatingcod_documentHelp" />
                                <label for="floatingcod_document">Codigo Documento</label>
                                <span class="form-floating-focused"></span>
                                <x-jet-input-error for="cod_document" />

                            </div>

                        </div>












                        <div class="form-floating mb-2">
                            <select wire:model="lineselect" placeholder="Tipo Documento" name="lineselect"
                                class="form-select" id="lineselect" aria-label="Floating label select example">
                                @foreach ($lines as $line)
                                    <option value="{{ $line->id }}">{{ $line->name }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelectFilled">Seleccione Linea</label>
                            <span class="form-floating-focused"></span>
                            <x-jet-input-error for="lineselect" />
                        </div>



                    </div>

                    <div class="flex flex-col items-center justify-center w-full space-y-2">
                        @if (!empty($lineSelected))
                            <div class="">
                                <p class=" font-bold ">{{ $lineSelected->name }}</p>
                            </div>

                            <div class="mr-2">


                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="64 " height="64"
                                    x="0" y="0" viewBox="0 0 512.001 512.001"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve"
                                    {{-- class="fill-current text-{{ $item->options->line_color }}"> --}} class="fill-current text-{{ $lineSelected->color }}">
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
                            </div>
                        @else
                            <span>Seleccione una linea</span>
                        @endif


                    </div>

                    <div class="col-span-2 md:col-span-2 ">
                        <p class="mb-2 font-bold">Datos de ubicacion física para el ingreso</p>
                        {{-- <div class="form-floating mb-2">
                            <select wire:model="linewarehouse" placeholder="Tipo Documento" name="linewarehouse"
                                class="form-select" id="linewarehouse" aria-label="Floating label select example">
                                <option value="">Seleccione una Ubicación</option>
                                @forelse($lines ?? [] as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @empty
                                    <option value="">Seleccione una Ubicación</option>
                                @endforelse
                            </select>
                            <label for="floatingSelectFilled">Ubicación</label>
                            <span class="form-floating-focused"></span>
                            <x-jet-input-error for="linewarehouse" />
                        </div> --}}

                        <div class="form-floating mb-2">
                            <select wire:model="stationselect" placeholder="Tipo Documento" name="stationselect"
                                class="form-select" id="stationselect" aria-label="Floating label select example">
                                <option value="">Seleccione una Estación</option>
                                @forelse($stations ?? [] as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @empty
                                    <option value="">Seleccione una Estación</option>
                                @endforelse
                            </select>
                            <label for="floatingSelectFilled">Estación</label>
                            <span class="form-floating-focused"></span>
                            <x-jet-input-error for="stationselect" />
                        </div>

                        <div class="form-floating mb-2">
                            <select wire:model="warehouseselect" placeholder="Seleccione un almacén"
                                name="warehouseselect" class="form-select" id="warehouseselect"
                                aria-label="Floating label select example">
                                <option value="">Seleccione un almacén</option>
                                @forelse($warehouses ?? [] as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @empty
                                    <option value="">Seleccione un almacén</option>
                                @endforelse
                            </select>
                            <label for="floatingSelectFilled">Ubicación</label>
                            <span class="form-floating-focused"></span>
                            <x-jet-input-error for="warehouseselect" />
                        </div>

                        <div class="form-floating mb-2">
                            <select wire:model="sectorselect" placeholder="Seleccione un estante" name="sectorselect"
                                class="form-select" id="sectorselect" aria-label="Floating label select example">
                                <option value="">Seleccione un estante</option>
                                @forelse($sectors ?? [] as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @empty
                                    <option value="">Seleccione un estante</option>
                                @endforelse
                            </select>
                            <label for="floatingSelectFilled">Estante</label>
                            <span class="form-floating-focused"></span>
                            <x-jet-input-error for="sectorselect" />
                        </div>

                        <div class="form-floating mb-2">
                            <select wire:model="locationselect" placeholder="Seleccione una localización"
                                name="locationselect" class="form-select" id="locationselect"
                                aria-label="Floating label select example">
                                <option value="">Seleccione una localización</option>
                                @forelse($locations ?? [] as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @empty
                                    <option value="">Seleccione una localización</option>
                                @endforelse
                            </select>
                            <label for="floatingSelectFilled">Localización</label>
                            <span class="form-floating-focused"></span>
                            <x-jet-input-error for="locationselect" />
                        </div>


                    </div>


                </div>


            </div>




            {{-- %%%%%%%%%%%%%%%%%%%% STAR LISTA DE ARTICULOS DETALLES %%%%%%%%%%%%%%%%%%%% --}}
            <div class="form-control col-span-12 sm:col-span-12 md:col-span-12   mt-4  rounded-xl shadow-2xl ">
                <!-- component -->
                <div class="py-4">
                    @livewire('admin.import-survey')

                    <hr>






                    <!-- Hoverable Table rows -->
                    <div class="card">






                        <h5 class="card-header"></h5>


                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="card-header flex justify-between border-top rounded-0 flex-wrap py-md-0">
                                <div class="me-5 ms-n2">
                                    <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>




                                            <div class="input-group input-group-floating">
                                                <span class="input-group-text"><i class='fas fa-search'></i></span>
                                                <div class="form-floating">
                                                    <input wire:model="search" type="text" class="form-control"
                                                        id="basic-addon21" placeholder="" aria-label="Username"
                                                        aria-describedby="basic-addon21" />
                                                    <label for="basic-addon21">Que estas buscando...?</label>
                                                </div>
                                                <span class="form-floating-focused"></span>
                                            </div>


                                        </label></div>
                                </div>
                                <div class="d-flex justify-content-start justify-content-md-end align-items-baseline">
                                    <div
                                        class="dt-action-buttons d-flex align-items-start align-items-md-center justify-content-sm-center mb-3 mb-sm-0 gap-3 pt-0">
                                        <div class="dataTables_length mt-0 mt-md-3" id="DataTables_Table_0_length">
                                            <label class="mb-3"><select name="DataTables_Table_0_length "
                                                    aria-controls="DataTables_Table_0" class="form-select">
                                                    <option value="7">7</option>
                                                    <option value="10">10</option>
                                                    <option value="20">20</option>
                                                    <option value="50">50</option>
                                                    <option value="70">70</option>
                                                    <option value="100">100</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="dt-buttons"> <button
                                                class="dt-button buttons-collection dropdown-toggle btn btn-label-secondary me-3"
                                                tabindex="0" aria-controls="DataTables_Table_0" type="button"
                                                aria-haspopup="dialog" aria-expanded="false"><span><i
                                                        class="mdi mdi-export-variant me-1"></i><span
                                                        class="d-none d-sm-inline-block">Export </span></span><span
                                                    class="dt-down-arrow">▼</span></button>





                                            <button class="dt-button add-new btn btn-primary ms-n1" tabindex="0"
                                                aria-controls="DataTables_Table_0" type="button"><span><i
                                                        class="mdi mdi-plus me-0 me-sm-1"></i><span
                                                        class="d-none d-sm-inline-block">
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.purchases.create') }}">
                                                            Add
                                                            Product
                                                        </a>


                                                    </span></span>
                                            </button>



                                        </div>
                                    </div>
                                </div>

                            </div>



                            <div class="table-responsive form-control">



                                @if ($selectedArticles)


                                    <table class="table table-hover">
                                        <thead class="sticky top-0 z-10 ">
                                            <tr>
                                                <th> Nro</th>
                                                <th> Nombre de articulo</th>
                                                <th> ID's</th>
                                                <th> Almacén</th>
                                                <th> Cantidad</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">

                                            @foreach ($selectedArticles as $key => $itemAdd)
                                                <tr class="text-left " wire:key="{{ $key }}">

                                                    <td>


                                                        <p class=" whitespace-no-wrap">
                                                            {{ $key + 1 }}</p>


                                                    </td>
                                                    <td>



                                                        <div class="flex  items-center">
                                                            {{-- <div class="flex-shrink-0 w-12 h-12">
                                                                @if ($item->article->image != null)
                                                                    <img class="w-full h-full rounded-full object-cover"
                                                                        src="{{ asset('storage/' . $item->article->image->url) }}"
                                                                        alt="" />
                                                                @else
                                                                    <img class="w-full h-full rounded-full object-cover"
                                                                        src="{{ asset('storage/' . 'articles/def.jpg') }}"
                                                                        alt="" />
                                                                @endif
                                                            </div> --}}
                                                            <div class="  ml-3 text-xs ">
                                                                <p class="  whitespace-no-wrap">
                                                                    {{ $itemAdd['article_name'] }}
                                                                </p>
                                                            </div>
                                                        </div>


                                                    </td>
                                                    <td class=" py-2 text-sm">


                                                        {{-- 
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
                                                    @endif --}}




                                                        @if (!empty($itemAdd['article_id_dopp']))
                                                            <p class=" "><i
                                                                    class="text-blue-500  fas fa-key"></i>
                                                                {{ $itemAdd['article_id_dopp'] }}</p>
                                                        @endif
                                                        @if (!empty($itemAdd['article_id_eetc']))
                                                            <p class=" "><i
                                                                    class="text-yellow-400  fas fa-key"></i>
                                                                {{ $itemAdd['article_id_eetc'] }}</p>
                                                        @endif
                                                        @if (!empty($itemAdd['article_id_zona']))
                                                            <p class=" "><i
                                                                    class="text-gray-400  fas fa-key"></i>
                                                                {{ $itemAdd['article_id_zona'] }}</p>
                                                        @endif

                                                    </td>


                                                    <td class="text-xs">
                                                        {{ $itemAdd['unit_name'] }}
                                                    </td>
                                                    <td class="text-xs">
                                                        {{ $itemAdd['quantity'] }}
                                                    </td>


                                                    <td>
                                                        <div class="dropdown">
                                                            <button type="button"
                                                                class="btn p-0 dropdown-toggle hide-arrow"
                                                                data-bs-toggle="dropdown">
                                                                <i class="mdi mdi-dots-vertical"></i>
                                                            </button>
                                                            <div class="dropdown-menu">



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
                                                                {{-- <a class="dropdown-item"
                                                    href="{{ route('admin.articles.edit', $item->id) }}"><i
                                                        class="mdi mdi-pencil-outline me-1"></i>
                                                    Edit</a> --}}

                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>







                                    </table>
                                @else
                                    <div class="form-control px-6 py-4">
                                        No hay ningún registro coincidente
                                    </div>
                                @endif

                                <!-- Paginación de la tabla -->

                                {{-- @if ($purchaseDetails->hasPages())
                                    <div class=" form-control px-6 py-4">
                                        <span class="form-control  ">{{ $purchaseDetails->links() }}</span>
                                    </div>
                                @endif --}}













                                <!--/ Hoverable Table rows -->











                            </div>
                            <!-- / Content -->









                        </div>
                        <!-- / Content -->



                        <!-- Content wrapper -->













                        {{-- info art --}}
                        {{-- BUSCADOR SEARCH-COUNT  BUSCA LOS ARTICULOS  --}}
                        <div class="col-span-12 md:col-span-7 mt-2 py-2  ">
                            <div class="mx-4">
                               @livewire('search-count')
                               
                               <x-jet-input-error  class="mt-2" for="id_art" />
  
                            </div>
                           







                            <div class="card-body">
                                <form class="form-repeater" data-select2-id="34">
                                    <div data-repeater-list="group-a" data-select2-id="33">
                                        <div data-repeater-item="" data-select2-id="32">
                                            <div class="row mb-3 mb-sm-0" data-select2-id="31">
                                                <div class="mb-3 col-sm-4" data-select2-id="30">

                                                    <div class="form-floating">
                                                        <input wire:model.defer="quantity"
                                                            placeholder="Ingrese la cantidad..." type="text"
                                                            class="form-control rounded-lg" id="qty"
                                                            aria-describedby="floatingInputFilledHelp" />
                                                        <button wire:click="$set('quantity', '')"
                                                            class="absolute inset-y-0 -right-1  p-3 rounded-r-lg flex items-center bg-blue-500 text-white focus:outline-none hover:text-gray-600 transition-colors"
                                                            type="button">
                                                            <i class="text-md fas fa-times"></i>
                                                        </button>
                                                        <label for="floatingInputFilled">Escriba la
                                                            cantidad</label>
                                                        <span class="form-floating-focused"></span>
                                                    </div>
                                                    <div id="floatingInputFilledHelp" class="form-text">
                                                        Escriba la cantidad para el ingreso
                                                    </div>

                                                    <x-jet-input-error for="quantity" />
                                                </div>
                                                <div>
                                                    <button wire:click.prevent="addArticle()"
                                                    class="btn btn-primary waves-effect waves-light" data-repeater-create="">Add
                                                    article</button>
                                                </div>
                                                <div class="mb-3 col-sm-8">
                                                    <div class="form-floating form-floating-outline">

                                                        @livewire('info-article')

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div>
                                        <button wire:click.prevent="addArticle()"
                                        class="btn btn-primary waves-effect waves-light" data-repeater-create="">Add
                                        article</button>
                                    </div> --}}
                                </form>
                            </div>















                        </div>


                        {{-- <div class="flex justify-items-stretch mt-6 ">

                        <div>

                            <div class="pt-2 flex items-center">

                                <div class="relative flex-grow">
                                    <x-jet-label class="px-2 text-xl" value="Cantidad:" />
                                    <x-jet-input
                                        class="px-4 py-2 border border-green-300 rounded-lg focus:outline-none focus:border-green-400"
                                        type="text" wire:model.defer="quantity"
                                        placeholder="Ingrese la cantidad..." />

                                    <button wire:click="$set('quantity', '')"
                                        class="absolute inset-y-0 right-0 px-3 py-2  text-gray-600 hover:text-green-800 focus:outline-none rounded-r-lg">
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
                    </div> --}}
                        <div class="col-span-12 md:col-span-5 pb-2">
                            {{-- @livewire('info-article') --}}

                        </div>






                        {{-- END info art --}}
                        <!--End component -->
                    </div>
                </div>
                {{-- %%%%%%%%%%%%%%%%%%%% END LISTA DE ARTICULOS DETALLES %%%%%%%%%%%%%%%%%%%% --}}


                <div class=" justify-end inline-block mr-2 m-2">
                    <button wire:click="storeOrder" type="button"
                        class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-green-500 hover:bg-green-600 hover:shadow-lg flex items-center">
                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
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
    </div>
